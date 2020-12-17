@extends('layouts.master')

@section('title', 'Отзывы наших выпускников | ' . config('app.name'))
@section('description', 'Медитация - с чего начать? На курсе: подробные инструкции, голосовое сопровождение занятий, личный куратор, гибкий график. Повышение осознанности помогает стать эффективнее, укрепить эмоциональную стабильность, жить в позитиве и развиваться духовно.')
@section('keywords', 'как научиться медитировать, техники медитации, медитация онлайн, медитация для начинающих, бесплатно')

@section('content')
    <main class="main-content">
        <div class="container container--narrow">
            <ul class="breadcrumbs">
                <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="{{route('home')}}">Главная</a></li>
                <li class="breadcrumbs__item"><span class="breadcrumbs__text">Отзывы</span></li>
            </ul>
            <h1 class="h2">Отзывы</h1>
        </div>
        <div class="container container--wide">
            <div class="reviews">
                <div class="reviews__items js-ajax-reviews-load">
                        @include('includes.reviews.review')
                </div>
                <div class="reviews__nav-btns"><a class="reviews__btn nav-btn nav-btn--icon-left" href="{{route('home')}}">
                        <svg class="icon icon-arrow ">
                            <use xlink:href="/assets/img/spritesvg.svg#arrow"></use>
                        </svg>На главную</a>
                    @if($reviews->nextPageUrl())
                    <a class="reviews__btn nav-btn nav-btn--icon-right js-ajax-reviews" href="javascript:void(0);" data-next-page="{{ $reviews->nextPageUrl() }}">Показать еще
                        <svg class="icon icon-arrow ">
                            <use xlink:href="img/spritesvg.svg#arrow"></use>
                        </svg>
                    </a>
                        @endif
                </div>
            </div>
        </div>
    </main>
    @endsection
