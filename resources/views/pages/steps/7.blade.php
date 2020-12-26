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
            <h1 class="step__title h3">Осознанность и благодарность</h1>
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

    <div class="step__item item-step">
        <div class="container container--narrow">
            <div class="item-step__top">
                <div class="item-step__number number-circle number-circle--center animation">
                    <svg class="icon icon-decor-10 ">
                        <use xlink:href="/assets/img/spritesvg.svg#decor-10"></use>
                    </svg>
                </div>
                <h3 class="item-step__title h3">Выбор упражнения</h3>
            </div>
            <div class="item-step__info step-info">
                <p>В качестве задания медитации выберите то упражнение, которое у вас получается лучше всего: фокусировка на кистях рук, “динамическия” медитация, упражнение «поплавок» или счет дыхания.</p>
                <p>Если вы выберете последнее упражнение, то попробуйте считать только вдохи, а выдох проводить в состоянии ожидания, когда можно будет “произнести” следующую цифру. В некоторых школах Тибета также применяют счет до 8 или 12 (бывает и больше). Но не гонитесь за количеством цифр, а развивайте контроль над умом постепенно.</p>
            </div>
        </div>
    </div>

    <div class="step__item item-step">
        <div class="container container--narrow">
            <div class="item-step__top">
                <div class="item-step__number number-circle number-circle--center animation">
                    <svg class="icon icon-decor-1 ">
                        <use xlink:href="/assets/img/spritesvg.svg#decor-1"></use>
                    </svg>
                </div>
                <h3 class="item-step__title h3">Усмиряем непоседливость</h3>
            </div>
            <div class="item-step__info step-info">
                <p>Если на каком-то этапе вам станет совсем трудно удерживать внимание, то можно поменять выбранное задание на другое прямо во время медитации. </p>
                <div class="h4 h4--green h4--dots">Подобная смена упражнений облегчает положение нашему непоседливому уму, привыкшему к развлечениям, но при этом мы держим его в узде и направляем к успокоению.</div>
                <p>Зачастую при более длительном сидении ум сдается и все-таки затихает, уступая место восприятию без хаоса мыслей.</p>
            </div>
        </div>
    </div>

    <div class="step__item item-step">
        <div class="container container--narrow">
            <div class="item-step__top">
                <div class="item-step__number number-circle number-circle--center animation">
                    <svg class="icon icon-decor-13 ">
                        <use xlink:href="/assets/img/spritesvg.svg#decor-13"></use>
                    </svg>
                </div>
                <h3 class="item-step__title h3">Осознанная благодарность</h3>
            </div>
        </div>
        <div class="section section--white">
            <div class="container container--narrow">
                <div class="item-step__info step-info">
                    <p>Сегодня в конце медитации мы пожелаем всем живым существам счастья. Также мы попробуем испытать чувство благодарности за эту медитацию. По традиции мы это делаем после звонка колокольчика, ненадолго соединяя ладони на уровне груди.</p>
                    <img class="step-info__img" src="/assets/img/step-8.jpg" alt="image">
                    <p>Крайне полезно заканчивать каждую медитацию чувством благодарности, приятия и любви ко всему окружающему. Также важно в этой работе подталкивать себя к прощению наших обидчиков, из-за которых мы страдали.</p>
                </div>
            </div>
        </div>
        <div class="container container--narrow">
            <div class="item-step__info step-info">
                <p>Это значительно оздоравливает нашу психическую сферу, пробуждает тонкое восприятие, осветляет сознание и подсознательно настраивает на успешность.</p>
                <p><b>Помните, мы все нуждаемся в расширении чувства благодарности!</b></p>
                <p>На этом все...</p>
            </div>
        </div>
    </div>

    <div class="step__item item-step">
        <div class="container container--narrow">
            <div class="item-step__top">
                <div class="item-step__number number-circle number-circle--center animation">
                    <svg class="icon icon-decor-6 ">
                        <use xlink:href="/assets/img/spritesvg.svg#decor-6"></use>
                    </svg>
                </div>
                <h3 class="item-step__title h3">До новых встреч!</h3>
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
                    <audio id="audio-player" src="/assets/audio/step_7.mp3"></audio>
                    <a class="audio__btn" href="javascript:void(0);"></a>
                    <div class="audio__progress"></div>
                    <div class="audio__time">
                        <span class="audio__current-time">00:00</span> / <span class="audio__total-time">24:31</span>
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
                        <svg class="icon icon-decor-8">
                            <use xlink:href="/assets/img/spritesvg.svg#decor-8"></use>
                        </svg>
                    </div>
                    <h3 class="item-step__title h3">Время финального отчета</h3>
                </div>
                <div class="item-step__info step-info js-form-report">
                    <p>В качестве благодарности за ваши труды мы вышлем вам персональный сертификат, по которому в течение года вы сможете получить скидку 25% на Ретрит Академии медитации.</p>

                    @includeWhen(($guard = Auth::guard('participant'))->check() && $guard->user()->isStepAvailable(7) && !$guard->user()->reportedAtStep(7), 'includes.steps.report', ['final' => true])
                </div>

                @include('includes.steps.comments', ['step' => 7])
            </div>
        </div>
    </div>

    <div class="container container--narrow">
        <div class="step-questions">
            <div class="circle-line-light"></div>
            <h2 class="step-questions__title h2">Самонаблюдение в действии</h2>
            <div class="step-questions__text">
                <p>Это третий компонент випассаны.</p>
                <p>Основная задача — пристальное наблюдение внутреннего психоэмоционального пространства в процессе общения с людьми. Существует два уровня этой практики: исцеляющий и направляющий.</p>
                <p>Исцеляющий уровень — это наблюдение внутренних ядов, отравляющих наше сознание. Таких как зависть, раздражение, жадность, обида и прочее. От нашего пристального внимания эти явления слабеют и утрачивают власть над нашим сознанием. Стоит лишь развернуть внимание с внешнего мира внутрь себя и наблюдать наши автоматические эмоции прямо во время общения.</p>
                <p>Направляющий уровень — задает вектор нашего развития прочь от заблуждений и страданий. Это культивация шести элементов раскрытия сердца. Прощение, сострадание, благодарность, равенство, восприятие доброты, внутренняя улыбка — вот эти шесть элементов.</p>
                <p>По-настоящему счастлив лишь тот, кто дарит счастье окружающим людям.</p>
                <p>Практикуйте и будьте счастливы!</p>
            </div>
            <div class="step-questions__big-circles big-circles">
                <div class="big-circle__icon-dots icon-dots">
                    <div class="big-circle__icon-circles icon-circles"></div>
                    <div class="big-circle__line lines lines--reverse"></div>
                </div>
            </div>
        </div>

        @includeWhen($guard->check() && $guard->user()->isNotVotedAtPoll('steps'), 'includes.steps.questionare')
    </div>
</div>
@endsection
