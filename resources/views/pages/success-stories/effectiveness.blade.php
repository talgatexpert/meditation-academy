@extends('layouts.master')

@section('title', 'Истории успеха участников - повышение эффективности | ' . config('app.name'))
@section('description', 'Отзывы выпускников курса ' . config('app.name') . ' о том, как практика медитации помогла эффективнее управлять вниманием и выполнять задачи, стать энергичнее и справляться с выгоранием.')
@section('keywords', 'управление вниманием, повышение личной эффективности, эмоциональное выгорание')
@section('class', 'bg-blue-green-repeat')

@section('content')
<div class="container container--narrow">
    <ul class="breadcrumbs">
        <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="{{ route('home') }}">Главная</a></li>
        <li class="breadcrumbs__item"><span class="breadcrumbs__text">Истории успеха: повышение эффективности</span></li>
    </ul>
    <h1 class="h2">Участники курса <br>о повышении личной эффективности</h1>
</div>

<div class="container container--wide">
    <div class="reviews">
        <div class="reviews__items">
            <div class="reviews__item item-review item-review--bg">
                <div class="item-review__avatar"><img src="/assets/img/avatar-21.svg" alt="avatar"></div>
                <div class="item-review__info">
                    <div class="item-review__name h5">Дели Арт</div>
                    <div class="item-review__date"></div>
                    <div class="item-review__text">
                        <p>Я очень рада, что встретила этот курс! Большое спасибо за него!!!</p>
                        <p>Я писала, в начале, что моя цель, для участия в этом курсе - самоорганизация, за счет внешних
                            обязательств. Я получила это! И, особенно явно, это сработала вчера, в последний день))</p>
                        <p>Если бы курс длился еще, я бы продолжила, с удовольствием! )))</p>
                    </div>
                </div>
            </div>

            <div class="reviews__item item-review item-review--bg">
                <div class="item-review__avatar"><img src="/assets/img/avatar-18.svg" alt="avatar"></div>
                <div class="item-review__info">
                    <div class="item-review__name h5">Данила Пепеляев</div>
                    <div class="item-review__date"></div>
                    <div class="item-review__text">
                        <p>Просидел 40 минут вечером. пока семья гулять ушла. На мысли несколько раз отвлекался, в это раз мысли все как на подбор эмоционально "заряженные" и в этой эмоции уносили за собой :). И, кстати, я уже 5 дней в "танчики" на компе не играл</p>
                    </div>
                </div>
            </div>

            <div class="reviews__item item-review item-review--bg">
                <div class="item-review__avatar"><img src="/assets/img/avatar-5.svg" alt="avatar"></div>
                <div class="item-review__info">
                    <div class="item-review__name h5">Jet</div>
                    <div class="item-review__date"></div>
                    <div class="item-review__text">
                        <p>Добрый вечер. Хочу сказать большое спасибо вам за ваши уроки медитации в таком формате. А так же огромное спасибо куратору за консультации по курсу. Теперь я каждое утро с удовольствием бегу делать медитацию. Я заметила что от этого я получаю хороший заряд энергии. У меня повысилась эффективность я стала на много больше делать задач поставленных на день. В течение дня я чувствую себя осознано и появился контроль над мыслями)</p>
                    </div>
                </div>
            </div>

            <div class="reviews__item item-review item-review--bg">
                <div class="item-review__avatar"><img src="/assets/img/avatar-13.svg" alt="avatar"></div>
                <div class="item-review__info">
                    <div class="item-review__name h5">Наталья Могылдя</div>
                    <div class="item-review__date"></div>
                    <div class="item-review__text">
                        <p>Заметила в повседневности улучшения в фокусе внимания. В общем трудиться и еще раз трудиться. На какое-то время забросила практики, вернее отложила в виду эксперимента. И вот подвернулся ваш курс. Премного благодарна за предоставленную возможность, где-то даже помогло в дисциплине.</p>
                        <p>Спасибо за труд всем, кто в этом участвует!!!</p>
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
