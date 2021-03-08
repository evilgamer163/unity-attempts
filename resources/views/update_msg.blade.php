@extends('layouts.app')

@section('title')Контакты@endsection

@section('content')

<h1>Обновление записи</h1>

<form action="{{ route('contact-update-submit', $data->id) }}" method="POST" class="form-group">
   @csrf

   <label for="name">Name</label>
   <input type="text" name="name" id="name" class="form-control mb-3" value="{{ $data->name }}">

   <label for="email">Email</label>
   <input type="text" name="email" id="email" class="form-control mb-3" value="{{ $data->email }}">

   <label for="theme">Theme message</label>
   <input type="text" name="theme" id="theme" class="form-control mb-3" value="{{ $data->theme }}">

   <label for="message">Message</label>
   <textarea type="text" name="message" id="message" class="form-control mb-3" >{{ $data->message }}</textarea>

   <button class="btn btn-success">Обновить</button>
</form>

@endsection
