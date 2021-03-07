@extends('layouts.app')

@section('title')Сообщения@endsection

@section('content')

<h1>Сообщения</h1>

@foreach ($data as $el)
	<div class="alert alert-info">
		<h3>{{ $el->message }}</h3>
		<p>{{ $el->email }}</p>
		<b><p>{{ $el->created_at }}</p></b>
		<a href="" class="btn btn-success">Get all msgs</a>
	</div>
@endforeach

@endsection