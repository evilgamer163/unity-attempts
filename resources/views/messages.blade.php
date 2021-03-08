@extends('layouts.app')

@section('title')Сообщения@endsection

@section('content')

<h1>Сообщения</h1>
@if(!empty($data))
@foreach ($data as $el)
	<div class="alert alert-info">
		<h3>{{ $el->message }}</h3>
		<p>{{ $el->email }}</p>
		<b><p>{{ $el->created_at }}</p></b>
		<a href="{{ route('contact-id-msg', $el->id) }}" class="btn btn-success">Get this msgs</a>
	</div>
@endforeach
@endif

@endsection
