@extends('layouts.error')

@section('title', 'Время вашего сеанса истекло | ' . config('app.name'))

@section('content')
    <div class="number font-red"> 419 </div>
    <div class="details">
        <h3>Время вашего сеанса истекло.</h3>
        <p>К сожалению, ваш сеанс истек. Пожалуйста, обновите страницу и попробуйте снова.<br/><a href="/"> На главную </a></p>
    </div>
@endsection
