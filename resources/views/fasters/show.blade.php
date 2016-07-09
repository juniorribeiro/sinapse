@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Regex {{ $regex->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $regex->id }}</td>
                </tr>
                <tr><th> {{ trans('regexs.site') }} </th><td> {{ $regex->site }} </td></tr><tr><th> {{ trans('regexs.title') }} </th><td> {{ $regex->title }} </td></tr><tr><th> {{ trans('regexs.description') }} </th><td> {{ $regex->description }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('regexs/' . $regex->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Regex"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['regexs', $regex->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Regex',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

</div>
@endsection