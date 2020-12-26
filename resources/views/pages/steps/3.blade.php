@extends('layouts.master')

@section('title', 'Шаг 3 - «Динамическая» медитация | ' . config('app.name'))
@section('description', 'Техника медитации для непоседливых умов. Тренировка внимания и осознанности. Живая практика, персональный куратор, аудио сопровождение медитации. Понятный онлайн-курс для начинающих.')
@section('keywords', 'успокоение ума, медитация техника')
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
            <h1 class="step__title h3">«Динамическая» медитация</h1>
            <div class="step__text">
                <p>Внимание двигается по кругу - от точки к точке.<br>Тело полностью неподвижно.</p>
            </div>
        </div>
    </div>

    <div class="step__item item-step">
        <div class="container container--narrow">
            <div class="item-step__info step-info">
                <div class="h4 h4--green h4--dots">Это занятие будет на несколько минут дольше обычного. Надеемся, это не вызовет трудностей, ведь сегодня голос нашей Зои будет с вами большую часть медитации.</div>
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
                <h3 class="item-step__title h3">Техника медитации</h3>
            </div>
        </div>
        <div class="section section--white">
            <div class="container container--narrow">
                <div class="item-step__info step-info">
                    <p>Сначала сфокусируем внимание на кистях рук и посидим так до тех пор, пока энергия фиксации не истощится, при этом мы почувствуем ослабление концентрации, и к нам в сознание начнут проникать мысли.</p>
                    @agent('mobile')
                        <div class="step-info__video step-info__video--mob">
                            <video autoplay="autoplay" muted="muted" loop id="video-step-3-mob">
                                <source src="/assets/video/step3_mob.mp4" type="video/mp4">
                            </video>
                        </div>
                    @else
                        <div class="step-info__video step-info__video--desk">
                            <video autoplay="autoplay" muted="muted" loop id="video-step-3">
                                <source src="/assets/video/step3_desk.mp4" type="video/mp4">
                            </video>
                        </div>
                    @endagent
                    <p>Затем мы начнем перемещать его по кругу: кисти, локоть правой руки, правый плечевой сустав, середина груди, левый плечевой сустав, локоть левой руки и снова кисти рук.</p>
                </div>
            </div>
        </div>
        <div class="container container--narrow">
            <div class="item-stap__info step-info">
                <p>Опасны блуждания внимания во время медитации — они развивают рассеянность сознания и порождают хаотичность жизни. Лучше уж не медитировать вовсе, чем медитировать с блуждающим вниманием.</p>
                <p> <b>Поэтому вместо хаотичного блуждания по отвлечениям мы зададим нашему вниманию направление поступательного перемещения.</b></p>
                <div class="h4 h4--green h4--dots">Таким образом мы будем давать некоторое послабление нашему непоседливому уму, но одновременно будем учиться подчинять хаотическое мышление своей воле.</div>
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
                <h3 class="item-step__title h3">Воздействие телесных медитаций</h3>
            </div>
            <div class="item-step__info step-info">
                <p>Практика, связанная с телесной фокусировкой, акцентирует развитие психологической устойчивости. </p>
                <p>При освоении телесных медитаций человек все больше начинает основывать свою психику не на внешних явлениях и людях, а на себе самом.</p>
                <p> <b>Так постепенно обретается эмоциональная независимость от обстоятельств.</b></p>
                <p>Вполне возможно, что со временем вы по-новому увидите ситуации и людей, которые раньше вызывали всплеск раздражения и гнева. Причем это произойдет естественно, независимо от вашего желания. Вы станете свидетелем своего нового поведения, а не его «делателем».</p>
                <div class="step-info__recommend recommend">
                    <div class="recommend__avatar-wrap">
                        <div class="recommend__avatar">
                            @agent('mobile')<img src="/assets/img/Zoe_300.png" alt="image">@else<img src="/assets/img/Zoe_600.png" alt="image">@endagent
                        </div>
                    </div>
                    <div class="recommend__info">
                        <div class="recommend__title page-link">рекомендации зои</div>
                        <div class="recommend__text">
                            <p>На маршруте движения старайтесь сохранить непрерывность внимания, чтобы не возникало «белых пятен» — участков, где мы не чувствуем тело. Когда мое внимание стремится скачком перепрыгнуть к следующему пункту остановки, я притормаживаю его и прохожу этот участок пути сантиметр за сантиметром. </p>
                            <p>Также я помогаю дыханием перемещать “пятно” моего внимания. Со вдохом я как бы подтягиваю внимание вверх, когда прохожу участок по правой руке, при этом на выдохе я фиксирую его положение.</p>
                            <p>А когда пятно должно опускаться вниз по левой руке, то его движение “толкаю” на выдохе, при этом на вдохе удерживаю в фиксированном положении.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="step__item item-step">
        <div class="container container--narrow">
            <div class="item-step__top">
                <div class="item-step__number number-circle number-circle--center animation">
                    <svg class="icon icon-decor-11 ">
                        <use xlink:href="/assets/img/spritesvg.svg#decor-11"></use>
                    </svg>
                </div>
                <h3 class="item-step__title h3">Пришло время медитировать</h3>
            </div>
            <div class="item-step__info step-info">
                <div class="step-info__wrap">
                    <div class="step-info__item item-step-info">
                        <div class="item-step-info__icon-dots icon-dots">
                            <div class="item-step-info__icon-circles icon-circles">01</div>
                        </div>
                        <div class="item-step-info__text">Настройтесь на работу с вниманием</div>
                    </div>
                    <div class="step-info__item item-step-info">
                        <div class="item-step-info__icon-dots icon-dots">
                            <div class="item-step-info__icon-circles icon-circles">02</div>
                        </div>
                        <div class="item-step-info__text">Примите положение тела для медитации</div>
                    </div>
                    <div class="step-info__item item-step-info">
                        <div class="item-step-info__icon-dots icon-dots">
                            <div class="item-step-info__icon-circles icon-circles">03</div>
                        </div>
                        <div class="item-step-info__text">Включайте запись с голосом Зои</div>
                    </div>
                </div>
                <div class="step-info__audio audio">
                    <audio id="audio-player" src="/assets/audio/step_3.mp3"></audio>
                    <a class="audio__btn" href="javascript:void(0);"></a>
                    <div class="audio__progress"></div>
                    <div class="audio__time">
                        <span class="audio__current-time">00:00</span> / <span class="audio__total-time">13:51</span>
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
                    <h3 class="item-step__title h3">Поделитесь с нами</h3>
                </div>
                <div class="item-step__info step-info js-form-report">
                    <p>Удалось ли перемещать зону внимания без потери непрерывности в телесных ощущениях?</p>
                    <p>И, как обычно, в конце страницы вас ждет небольшой рассказ о практике.</p>

                    @includeWhen(($guard = Auth::guard('participant'))->check() && $guard->user()->isStepAvailable(3) && !$guard->user()->reportedAtStep(3), 'includes.steps.report')
                </div>

                @include('includes.steps.comments', ['step' => 3])
            </div>
        </div>
    </div>

    <div class="container container--narrow">
        <div class="step-questions">
            <div class="circle-line-light"></div>
            <h2 class="step-questions__title h2">Подробнее о саматха</h2>
            <div class="step-questions__text">
                <p>Практику медитации саматха мы делим на стадию концентрации внимания и стадию простого пребывания в тишине.</p>
                <p>Медитации с концентрацией внимания нужны для того, чтобы приучать ум не отвлекаться на посторонние мысли и явления.</p>
                <p>Стадия пребывания в тишине ума становится доступна, когда из упражнения на концентрацию мы убираем вещественный объект фокусировки с сохранением свойства внимания быть сконцентрированным. Таким образом объектом становится сама тишина сознания.</p>
                <p>Однако такого качественного скачка в медитации не произойдет за счет одной лишь практики саматха. Прежнее мышление, ошибочное мировоззрение будут держать и не пускать в высокую осознанную тишину. Необходимо освобождать себя от источников мыслей, наблюдать за пространством своих эмоций, учиться различать причины и следствия. Это практика випассаны.</p>
                <p>Можно сказать, что практика саматха готовит нас к практике випассаны, которая готовит нас к практике саматха и так далее по спирали духовного восхождения. Шаг за шагом спираль продвигает нас к восприятию непроявленной (пустотной, истинной, неизменной) сути явлений и мироздания.</p>
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
