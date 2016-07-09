@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Edit Regex {{ $regex->id }}</h1>

    {!! Form::model($regex, [
        'method' => 'PATCH',
        'url' => ['/regexs', $regex->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('site') ? 'has-error' : ''}}">
                {!! Form::label('site', trans('regexs.site'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('site', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('site', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                {!! Form::label('title', trans('regexs.title'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                {!! Form::label('description', trans('regexs.description'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('description', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('img') ? 'has-error' : ''}}">
                {!! Form::label('img', trans('regexs.img'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('img', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('img', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
                {!! Form::label('price', trans('regexs.price'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('price', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
                {!! Form::label('type', trans('regexs.type'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('type', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('route') ? 'has-error' : ''}}">
                {!! Form::label('route', trans('regexs.route'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('route', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('route', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('state') ? 'has-error' : ''}}">
                {!! Form::label('state', trans('regexs.state'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('state', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
                {!! Form::label('city', trans('regexs.city'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('city', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('neighborhood') ? 'has-error' : ''}}">
                {!! Form::label('neighborhood', trans('regexs.neighborhood'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('neighborhood', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('neighborhood', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                {!! Form::label('status', trans('regexs.status'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('area') ? 'has-error' : ''}}">
                {!! Form::label('area', trans('regexs.area'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('area', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('area', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('bedroom') ? 'has-error' : ''}}">
                {!! Form::label('bedroom', trans('regexs.bedroom'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('bedroom', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('bedroom', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('vacancy') ? 'has-error' : ''}}">
                {!! Form::label('vacancy', trans('regexs.vacancy'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('vacancy', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('vacancy', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('areas') ? 'has-error' : ''}}">
                {!! Form::label('areas', trans('regexs.areas'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('areas', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('areas', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

</div>
@endsection