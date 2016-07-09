@extends('layouts.app')

@section('content')
<div class="container">

@if($faster)
<center>
<h3><b>{{ $faster->name }}</b></h3>
<br>
<br><a href="{{ route('fasters.delete') }}" class="btn btn-info" role="button">Valendddooooo</a><br>
</center>
@else

	<meta http-equiv="refresh" content="2">
	<h2><b>Aguardando...</b></h2>

@endif
<br>
<br>
<!-- <a href="{{ route('fasters.delete') }}">Nova Pergunta</a> -->

</div>
@endsection
