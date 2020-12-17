@extends('layouts.error')

@section('title', 'Страница не найдена | ' . config('app.name'))

@section('content')
    <div class="number font-red"> 404 </div>
    <div class="details">
        <h3>Страница не найдена.</h3>
        <p>К сожалению, такой страницы не существует.<br/><a href="/"> На главную </a></p>
    </div>
@endsection
