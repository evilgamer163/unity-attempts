@extends('layouts.app')

@section('title')Контакты@endsection

@section('content')

<h1>Контакты</h1>

@if($errors->any())
   <div class="alert alert-danger">
      <ul>
         @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
@endif

<form action="{{ route('contact-form') }}" method="POST" class="form-group">
   @csrf

   <label for="name">Name</label>
   <input type="text" name="name" id="name" class="form-control mb-3">

   <label for="email">Email</label>
   <input type="text" name="email" id="email" class="form-control mb-3">

   <label for="theme">Theme message</label>
   <input type="text" name="theme" id="theme" class="form-control mb-3">

   <label for="message">Message</label>
   <textarea type="text" name="message" id="message" class="form-control mb-3"></textarea>

   <button class="btn btn-success">Enter</button>
</form>

@endsection