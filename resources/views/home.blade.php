@extends('layouts.app')

@section('title')Главная страница@endsection

<!-- подключили шаблон и записываем контент в нем -->
@section('content')
<h1>Главная страница</h1>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt magni, 
provident soluta illo illum ab dignissimos, officia veniam beatae quia nesciunt! 
Explicabo quaerat error blanditiis debitis nostrum vitae minus ducimus!
</p>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt magni, 
provident soluta illo illum ab dignissimos, officia veniam beatae quia nesciunt! 
Explicabo quaerat error blanditiis debitis nostrum vitae minus ducimus!
</p>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt magni, 
provident soluta illo illum ab dignissimos, officia veniam beatae quia nesciunt! 
Explicabo quaerat error blanditiis debitis nostrum vitae minus ducimus!
</p>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt magni, 
provident soluta illo illum ab dignissimos, officia veniam beatae quia nesciunt! 
Explicabo quaerat error blanditiis debitis nostrum vitae minus ducimus!
</p>
@endsection

<!-- вывели доп текст в aside -->
@section('aside') 
   @parent
   <p>Еще немного текста в боковой панели</p>
@endsection