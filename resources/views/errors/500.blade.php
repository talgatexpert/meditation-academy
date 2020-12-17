@extends('layouts.error')

@section('title', 'Что-то пошло не так | ' . config('app.name'))

@section('content')
    <div class="number font-red"> 500 </div>
    <div class="details">
        <h3>Что-то пошло не так.</h3>
        <p>Случилась непредвиденная ошибка.<br/><a href="/"> На главную </a></p>
    </div>
@endsection
