@extends('layouts.app')

@section('title')Главная страница@endsection

<!-- подключили шаблон и записываем контент в нем -->
@section('content')
<h1>Главнапя страница</h1>
@endsection

<!-- вывели доп текст в aside -->
@section('aside') 
   @parent
   <p>Еще немного текста в боковой панели</p>
@endsection