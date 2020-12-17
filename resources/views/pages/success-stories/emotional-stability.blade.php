@extends('layouts.master')

@section('title', 'Истории успеха участников - контроль эмоций | ' . config('app.name'))
@section('description', 'Отзывы выпускников курса ' . config('app.name') . ' о том, как практика медитации помогла повысить эмоциональную стабильность, научиться справляться с тревожностью, страхами, раздражением.')
@section('keywords', 'контроль эмоций, как избавиться от негатива, как  избавиться от раздражения')
@section('class', 'bg-blue-green-repeat')

@section('content')
<div class="container container--narrow">
    <ul class="breadcrumbs">
        <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="{{ route('home') }}">Главная</a></li>
        <li class="breadcrumbs__item"><span class="breadcrumbs__text">Истории успеха: контроль эмоций</span></li>
    </ul>
    <h1 class="h2">Участники курса стали <br>лучше справляться с эмоциями</h1>
</div>

<div class="container container--wide">
    <div class="reviews">
        <div class="reviews__items">
            <div class="reviews__item item-review item-review--bg">
                <div class="item-review__avatar"><img src="/assets/img/avatar-2.svg" alt="avatar"></div>
                <div class="item-review__info">
                    <div class="item-review__name h5">Ирина</div>
                    <div class="item-review__date"></div>
                    <div class="item-review__text">
                        <p>Спасибо большое за уроки!. За эту неделю кое-что изменилось. Я стала спокойней реагировать на внешние раздражители, а краски мира стали ярче.Это стоит того чтобы продолжать Спасибо за приобретенный опыт и до встречи!</p>
                    </div>
                </div>
            </div>

            <div class="reviews__item item-review item-review--bg">
                <div class="item-review__avatar"><img src="/assets/img/avatar-11.svg" alt="avatar"></div>
                <div class="item-review__info">
                    <div class="item-review__name h5">Madkat</div>
                    <div class="item-review__date"></div>
                    <div class="item-review__text">
                        <p>В этом задании я выбрала сначала технику счёт, потом перешла на концентрацию на руках, т.к. мне достаточно сложно удерживать медитацию в течение длительного периода времени. Вообще, практикуя медитацию последний месяц, пришла к тому, что стала спокойнее, умиротвореннее, стала меньше беспокоится. Буду практиковать дальше</p>
                    </div>
                </div>
            </div>

            <div class="reviews__item item-review item-review--bg">
                <div class="item-review__avatar"><img src="/assets/img/avatar-19.svg" alt="avatar"></div>
                <div class="item-review__info">
                    <div class="item-review__name h5">Ольга Кардановская</div>
                    <div class="item-review__date"></div>
                    <div class="item-review__text">
                        <p>Спасибо большое за курс! Очень хочу продолжать с регулярными медитациями перед утренней йогой! чувствую положительный эффект - меньше раздражения или совсем нет в течение дня.</p>
                        <p>25 минутная медитация далась тяжелее всего.</p>
                        <p>В основном считала до 8, несколько раз переходила на поплавок. мысли одолевают... все же мне полегче с короткими медитациями.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="reviews__nav-btns">
            <a class="reviews__btn nav-btn nav-btn--icon-left" href="{{ route('home') }}#reasons">
                <svg class="icon icon-arrow ">
                    <use xlink:href="/assets/img/spritesvg.svg#arrow"></use>
                </svg>На главную
            </a>
        </div>
    </div>
</div>
@endsection
