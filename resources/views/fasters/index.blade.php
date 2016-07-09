@extends('layouts.app')

@section('content')


<center>
<div class="container">


            {{-- */$x=0;/* --}}
            @forelse($fasters as $item)
                {{-- */$x++;/* --}}

                <h3>{{ $item->name }}</h3></b> conquistou direito de resposta ;)
                <meta http-equiv="refresh" content="2">

                @empty

        <!-- New Name Form -->
        <form action="{{ url('fasters') }}" method="POST" class="form-horizontal">

            {{ csrf_field() }}



            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Nome:</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="user-name" class="form-control" value="{{ $name }}">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-info">Enviar !!!</button>
                </div>
            </div>



@endforelse

</div>
</center>
@endsection
