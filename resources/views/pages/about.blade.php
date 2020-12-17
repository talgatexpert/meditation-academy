@extends('layouts.master')

@section('title', 'О проекте ' . config('app.name') . ' | Обучение медитации')
@section('description', 'О проекте ' . config('app.name') . '. Онлайн-курс медитации для начинающих. Поможем научиться жить осознанно, стать энергичнее, избавиться от страхов и тревожности. Техники медитации, советы опытных кураторов, голосовое сопровождение занятий.')
@section('keywords', 'медитация для начинающих, техники медитации, медитация онлайн, практика осознанности')
@section('class', 'bg-multicolor-repeat')

@section('content')
<div class="container container--narrow">
    <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
            <a class="breadcrumbs__link" href="{{ route('home') }}">Главная</a>
        </li>
        <li class="breadcrumbs__item">
            <span class="breadcrumbs__text">О проекте</span>
        </li>
    </ul>
    <h1 class="h2">О проекте</h1>
</div>

<div class="container container--narrow">
    <article class="about">
        <div class="about__top">
            <div class="dashes"></div>
            <h3 class="about__title h3">Мы хотим, чтобы вы стали жить осознаннее</h3>
            <div class="about__text">
                <p>Согласно последним научным исследованиям в области нейрофизиологии, суетливый ум — источник страданий, а внимательность и осознанность — ключ к счастливому состоянию.</p>
                <p>Мы применяем древние техники для решения задач современного человека!</p>
            </div>
        </div>
        <div class="about__big-circles big-circles">
            <div class="big-circle__icon-dots icon-dots">
                <div class="big-circle__icon-circles icon-circles"></div>
                <div class="big-circle__line lines lines--reverse"></div>
            </div>
        </div>
        <div class="about__info">
            <div class="about__group about__group--cols">
                <div class="about__left">
                    <div class="about__photos">
                        <div class="about__photo">
                            <img src="/assets/img/about-photo-1.jpg" alt="image">
                        </div>
                        <div class="about__photo">
                            <img src="/assets/img/about-photo-2.jpg" alt="image">
                        </div>
                        <div class="white-line"></div>
                    </div>
                </div>
                <div class="about__right">
                    <div class="about__text">
                        <p>Курс был разработан Академией медитации в 2018 году, чтобы подарить всем желающим возможность прикоснуться к миру медитации независимо от достатка или географического положения.</p>
                        <p>Это продуманная последовательность шагов для постижения азов практики духовного совершенствования — отличные медитации для начинающих и не только.</p>
                    </div>
                </div>
            </div>
            <div class="about__group about__group--cols">
                <div class="about__left">
                    <h3 class="about__title h3">Учитесь лучшему <br>у лучших!</h3>
                    <div class="about__text">
                        <p>А для тех, кто ищет ответы на самые глубокие вопросы, мы можем предложить практически ничем не ограниченные возможности изучения природы своего «я» на Ретритах Академии медитации.</p>
                    </div><a class="about__btn btn {{ Auth::guard('participant')->check() ? '' : 'js-registration' }}"  href="{{ Auth::guard('participant')->check() ? '/messages' : 'js-javascript:void(0);' }}"> <span>{{Auth::guard('participant')->check() ? 'Перейти к курсу' : 'Записаться'}}</span></a>
                </div>
                <div class="about__right">
                    <div class="about__photo"><img src="/assets/img/about-photo-3.jpg" alt="image">
                        <div class="circle-line"></div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>
@endsection
