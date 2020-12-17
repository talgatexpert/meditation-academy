@extends('layouts.error')

@section('title', 'Метод не разрешен | ' . config('app.name'))

@section('content')
    <div class="number font-red"> 405 </div>
    <div class="details">
        <h3>Метод не разрешен.</h3>
        <p>К сожалению, метод запроса не разрешен.<br/><a href="/"> На главную </a></p>
    </div>
@endsection
