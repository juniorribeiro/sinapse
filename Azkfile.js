/**
 * Documentation: http://docs.azk.io/Azkfile.js
 */
// Adds the systems that shape your system
systems({
  sinapse: {
    // Dependent systems
    depends: ['mysql'],
    // More images:  http://images.azk.io
    image: {"docker": "azukiapp/php-fpm:5.6"},
    // Steps to execute before running instances
    provision: [
      "npm install",
      "composer install",
      //"php artisan migrate",
    ],
    workdir: "/azk/#{manifest.dir}",
    shell: "/bin/bash",
    wait: 20,
    mounts: {
      '/azk/#{manifest.dir}': sync("."),
      '/azk/#{manifest.dir}/vendor': persistent("./vendor"),
      '/azk/#{manifest.dir}/composer.phar': persistent("./composer.phar"),
      '/azk/#{manifest.dir}/composer.lock': path("./composer.lock"),
      '/azk/#{manifest.dir}/.env.php': path("./.env.php"),
      '/azk/#{manifest.dir}/bootstrap/compiled.php': path("./bootstrap/compiled.php"),
      '/azk/#{manifest.dir}/node_modules': persistent("./node_modules"),
    },
    scalable: {"default": 1},
    http: {
      domains: [ "#{system.name}.#{azk.default_domain}" ]
    },
    ports: {
      // exports global variables
      http: "80/tcp",
    },
    envs: {
      // Make sure that the PORT value is the same as the one
      // in ports/http below, and that it's also the same
      // if you're setting it in a .env file
      APP_DIR: "/azk/#{manifest.dir}",
    },
  },

  mysql: {
      image: { docker: "azukiapp/mysql:5.6" },
      mounts: {
          // Activates a persistent data folder in '/data'
          '/var/lib/mysql': persistent("mysql_lib#{system.name}"),
      },
      shell: "/bin/bash",
      wait: 25,
      provision: [
          "[ \"$APP_ENV\" != \"production\" ] && { rm -rf /var/lib/mysql/*; } || true"
      ],
      ports: {
          data: "3306/tcp",
      },
      envs: {
          // set instances variables
          MYSQL_USER         : "azk",
          MYSQL_PASSWORD     : "azk",
          MYSQL_DATABASE     : "#{manifest.dir}",
          MYSQL_ROOT_PASSWORD: "azk",
          APP_ENV            : "production"
      },
      export_envs: {
          DB_PASSWORD: "#{envs.MYSQL_PASSWORD}",
          DB_USERNAME: "#{envs.MYSQL_USER}",
          DB_DATABASE: "#{envs.MYSQL_DATABASE}",
          DB_HOST: "#{net.host}",
          DB_PORT: "#{net.port.data}",
          DATABASE_URL: "mysql2://#{envs.MYSQL_USER}:#{envs.MYSQL_PASSWORD}@#{net.host}:#{net.port.data}/#{envs.MYSQL_DATABASE}",
      },
  },

});
