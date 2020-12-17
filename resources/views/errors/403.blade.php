@extends('layouts.error')

@section('title', 'Доступ запрещен | ' . config('app.name'))

@section('content')
    <div class="number font-red"> 403 </div>
    <div class="details">
        <h3>Доступ запрещен.</h3>
        <p>К сожалению, доступ к данной странице ограничен.<br/><a href="/"> На главную </a></p>
    </div>
@endsection
