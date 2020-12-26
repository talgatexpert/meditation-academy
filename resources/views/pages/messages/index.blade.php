@extends('layouts.master')

@section('title', 'Сообщения от Зои | ' . config('app.name'))
@section('description', '')
@section('keywords', '')
@section('class', 'bg-blue-green-repeat')

@section('content')
<div class="container container--narrow">
    <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
            <a class="breadcrumbs__link" href="{{ route('home') }}">Главная</a>
        </li>
        <li class="breadcrumbs__item">
            <span class="breadcrumbs__text">Письма</span>
        </li>
    </ul>
    <h1 class="h2">Фундамент медитации</h1>
</div>

<div class="container container--wide">
    <div class="letters">
        @include('includes.messages', ['messages' => $messages])
    </div>
</div>
@endsection
