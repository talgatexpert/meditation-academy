@extends('layouts.master')

@section('title', 'Шаг 7 - Осознанная благодарность | ' . config('app.name'))
@section('description', '')
@section('keywords', '')
@section('class', 'bg-multicolor-2')

@section('content')
<div class="container container--wide">
    <ul class="breadcrumbs breadcrumbs--center">
        <li class="breadcrumbs__item">
            <a class="breadcrumbs__link" href="{{ route('home') }}">Главная</a>
        </li>
        <li class="breadcrumbs__item">
            <span class="breadcrumbs__text">7 шагов медитации</span>
        </li>
    </ul>

{{--    @include('includes.steps.pagination')--}}
</div>
@endsection

@section('additional_content')
<div class="step">
    <div class="container container--narrow">
        <div class="long-line-1"></div>
        <div class="step__intro">
            <div class="dashes"></div>
            <h1 class="step__title h3">Поздравительное письмо с сертификатом об окончании</h1>
            <div class="step__text">
                <p>Давайте сегодня проведем в медитации 20 минут. <br>Помните, что мы говорили про преодоление <br>в самом начале четвертого урока?</p>
            </div>
        </div>
    </div>
    <div class="step__item item-step">
        <div class="container container--narrow">
            <div class="item-step__info step-info">
                <div class="h4 h4--green h4--dots">Постарайтесь просидеть вместе с Зои 20 минут, и вы убедитесь, что в следующий раз вам будет сидеть гораздо легче. Надеемся, вы продолжите медитировать и после окончания курса.</div>
            </div>
        </div>
    </div>
</div>
@endsection
