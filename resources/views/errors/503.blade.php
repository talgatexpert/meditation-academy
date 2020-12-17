@extends('layouts.error')

@section('title', 'Сайт временно недоступен | ' . config('app.name'))

@section('content')
    <div class="number font-red"> 503 </div>
    <div class="details">
        <h3>Сайт временно недоступен.</h3>
        <p>У нас идет техническое обслуживание. Пожалуйста, зайдите попозже.<br/><a href="/"> На главную </a></p>
    </div>
@endsection
