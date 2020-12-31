@extends('layouts.master')

@section('title', 'Шаг 4 - «Поплавок» | ' . config('app.name'))
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
            <span class="breadcrumbs__text">7 шагов к медитации</span>
        </li>
    </ul>

    @include('includes.steps.pagination')
</div>
@endsection

@section('additional_content')
<div class="step">
    <div class="container container--narrow">
        <div class="long-line-1"></div>
        <div class="step__intro">
            <div class="dashes"></div>
            <h1 class="step__title h3">«Поплавок»</h1>
            <div class="step__text">
                <p>Сегодня мы будем работать в медитации 10 минут,<br>плюс время на отстройку позы и<br>первичное успокоение ума.</p>
            </div>
        </div>
    </div>
    <div class="step__item item-step">
        <div class="container container--narrow">
            <div class="item-step__info step-info">
                <div class="h4 h4--green h4--dots">Если неподвижность вызывает трудности, то знайте, чем чаще вы потакаете телу в различных отвлекающих позывах (заболела мышца, зачесалась голова, хочется переложить ногу поудобнее и т. д.), тем дольше вы будете осваивать вход в первичную медитацию. Это никогда не закончится, если этому не положите конец именно вы.</div>
            </div>
        </div>
    </div>

    <div class="step__item item-step">
        <div class="container container--narrow">
            <div class="item-step__top">
                <div class="item-step__number number-circle number-circle--center animation">
                    <svg class="icon icon-decor-9 ">
                        <use xlink:href="/assets/img/spritesvg.svg#decor-9"></use>
                    </svg>
                </div>
                <h3 class="item-step__title h3">Описание техники</h3>
            </div>
        </div>
        <div class="section section--white">
            <div class="container container--narrow">
                <div class="item-step__info step-info">
                    <p>Итак, представьте, что вы находитесь в теплой воде. При каждом вдохе ваше тело чуть всплывает, а на выдохе погружается. Следите за ощущением покачивания в теплой воде. Это медитация умиротворенного сознания.</p>
                    @agent('mobile')
                        <div class="step-info__video step-info__video--mob">
                            <video autoplay="autoplay" muted="muted" loop id="video-step-4-mob">
                                <source src="/assets/video/step4_mob.mp4" type="video/mp4">
                            </video>
                        </div>
                    @else
                        <div class="step-info__video step-info__video--desk">
                            <video autoplay="autoplay" muted="muted" loop id="video-step-4">
                                <source src="/assets/video/step4_desk.mp4" type="video/mp4">
                            </video>
                        </div>
                    @endagent
                </div>
            </div>
        </div>
    </div>

    <div class="step__item item-step">
        <div class="container container--narrow">
            <div class="item-step__top">
                <div class="item-step__number number-circle number-circle--center animation">
                    <svg class="icon icon-decor-5 ">
                        <use xlink:href="/assets/img/spritesvg.svg#decor-5"></use>
                    </svg>
                </div>
                <h3 class="item-step__title h3">Памятка!</h3>
            </div>
            <div class="item-step__info step-info">
                <p>Не стоит во время медитации отвлекаться на мысли и посторонние образы. Старайтесь не погружаться в сон. Медитация происходит лишь в ясном сознании. Наше внимание должно быть сфокусировано на задании. Вялость сознания недопустима. Если не получается обеспечить такое состояние, лучше закончить раньше, чем приучать себя к вялости в упражнениях.</p>
                <div class="h4 h4--green h4--dots">Помните, в обучении медитации всегда присутствует элемент преодоления себя</div>
            </div>
        </div>
    </div>

    <div class="step__item item-step">
        <div class="container container--narrow">
            <div class="item-step__top">
                <div class="item-step__number number-circle number-circle--center animation">
                    <svg class="icon icon-decor-10 ">
                        <use xlink:href="/assets/img/spritesvg.svg#decor-10"></use>
                    </svg>
                </div>
                <h3 class="item-step__title h3">Готовы к погружению?</h3>
            </div>
            <div class="item-step__info step-info">
                <div class="step-info__wrap">
                    <div class="step-info__item item-step-info">
                        <div class="item-step-info__icon-dots icon-dots">
                            <div class="item-step-info__icon-circles icon-circles">01</div>
                        </div>
                        <div class="item-step-info__text">Настройтесь на работу</div>
                    </div>
                    <div class="step-info__item item-step-info">
                        <div class="item-step-info__icon-dots icon-dots">
                            <div class="item-step-info__icon-circles icon-circles">02</div>
                        </div>
                        <div class="item-step-info__text">Примите правильное положение тела</div>
                    </div>
                    <div class="step-info__item item-step-info">
                        <div class="item-step-info__icon-dots icon-dots">
                            <div class="item-step-info__icon-circles icon-circles">03</div>
                        </div>
                        <div class="item-step-info__text">Включайте фонограмму</div>
                    </div>
                </div>
                <div class="step-info__audio audio">
                    <audio id="audio-player" src="/assets/audio/step_4.mp3"></audio>
                    <a class="audio__btn" href="javascript:void(0);"></a>
                    <div class="audio__progress"></div>
                    <div class="audio__time">
                        <span class="audio__current-time">00:00</span> / <span class="audio__total-time">15:09</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="step__item item-step">
        <div class="section section--white bg-blue-green">
            <div class="container container--narrow">
                <div class="item-step__top">
                    <div class="item-step__number number-circle number-circle--center animation">
                        <svg class="icon icon-decor-12 ">
                            <use xlink:href="/assets/img/spritesvg.svg#decor-12"></use>
                        </svg>
                    </div>
                    <h3 class="item-step__title h3">Не забудьте про отчет</h3>
                </div>
                <div class="item-step__info step-info js-form-report">
                    <p>Мы на «экваторе» нашего курса. Расскажите куратору, как прошла медитация.</p>
                    <p>Вы почувствовали умиротворение?</p>

                    @include('includes.steps.report')
                </div>

                @include('includes.steps.comments', ['step' => 4])
            </div>
        </div>
    </div>

    <div class="container container--narrow">
        <div class="step-questions">
            <div class="circle-line-light"></div>
            <h2 class="step-questions__title h2">Об аналитической медитации</h2>
            <div class="step-questions__text">
                <p>Аналитическую медитацию мы относим к випассане. Она выполняется следующим образом:</p>
                <ul class="step-questions__list list">
                    <li>Прочтение специальной подборки тезисов.</li>
                    <li>Размышление над ними, оценка верности применительно к своей ситуации и жизни.</li>
                    <li>Медитация с закрытыми глазами с сохранением настроения, которое рождают тезисы.</li>
                </ul>
                <p>Аналитической медитацией задается некоторое новое направление нашего самопонимания, мы пропитываемся новым, более высоким мировоззрением. Она меняет наш образ мысли и образ действия. В результате мы постепенно перестанем продуцировать прежние кармические отягощения.</p>
                <p>На следующем занятии мы познакомимся еще с одной мощной техникой випассаны.</p>
            </div>
            <div class="step-questions__big-circles big-circles">
                <div class="big-circle__icon-dots icon-dots">
                    <div class="big-circle__icon-circles icon-circles"></div>
                    <div class="big-circle__line lines lines--reverse"></div>
                </div>
            </div>
        </div>

        @includeWhen(($guard = Auth::guard('participant'))->check()  && $guard->user()->isNotVotedAtPoll('steps'), 'includes.steps.questionare')
    </div>
</div>
@endsection
