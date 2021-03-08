@extends('layouts.app')

@section('title')Сообщения@endsection

@section('content')

<h1>{{ $data->theme }}</h1>

<div class="alert alert-info">
	<h3>{{ $data->theme }}</h3>
	<p>{{ $data->email }}</p>
   <p>{{ $data->message }}</p>
	<b><p>{{ $data->created_at }}</p></b>
   <a href="{{ route('contact-update', $data->id) }}" class="btn btn-primary">Редактировать</a>

   <a href="{{ route('contact-del', $data->id) }}" class="btn btn-danger">Delete</a>
</div>

@endsection
