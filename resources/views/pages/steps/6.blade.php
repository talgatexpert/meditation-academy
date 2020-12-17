@extends('layouts.master')

@section('title', 'Шаг 6 - Счет и внутренняя дисциплина | ' . config('app.name'))
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

    @include('includes.steps.pagination')
</div>
@endsection

@section('additional_content')
<div class="step">
    <div class="container container--narrow">
        <div class="long-line-1"></div>
        <div class="step__intro">
            <div class="dashes"></div>
            <h1 class="step__title h3">Счет и внутренняя дисциплина</h1>
            <div class="step__text">
                <p>Если вы добрались до шестого шага, значит, вы упорный человек!</p>
            </div>
        </div>
    </div>
    <div class="step__item item-step">
        <div class="container container--narrow">
            <div class="item-step__info step-info">
                <div class="h4 h4--green h4--dots">Поэтому мы запланировали для вас 15 минут медитации. Будем считать вдохи и выдохи от одного до четырех без отвлечений на другие мысли и образы.</div>
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
                    <p>Сядьте в позу для медитации, расслабьте тело.</p>
                    @agent('mobile')
                        <div class="step-info__video step-info__video--mob">
                            <video autoplay="autoplay" muted="muted" loop id="video-step-6-mob">
                                <source src="/assets/video/step6_mob.mp4" type="video/mp4">
                            </video>
                        </div>
                    @else
                        <div class="step-info__video step-info__video--desk">
                            <video autoplay="autoplay" muted="muted" loop id="video-step-6">
                                <source src="/assets/video/step6_desk.mp4" type="video/mp4">
                            </video>
                        </div>
                    @endagent
                    <p>На вдохе произносите про себя очередную цифру (начиная с «1»), и на выдохе произносите ее же.</p>
                </div>
            </div>
        </div>
        <div class="container container--narrow">
            <div class="item-step__info step-info">
                <p>Цель счета — не допускать промежуточных мыслей между цифрами, также следует добиться того, чтобы после цифры «4» всегда следовала цифра «1». При правильном ходе упражнения мозг переходит в особое состояние, и счет цифр как бы «густеет», заполняет собой наше внутреннее пространство. Цифры вытесняют собой хаотичное мышление.</p>
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
                <h3 class="item-step__title h3">К чему стремиться…</h3>
            </div>
            <div class="item-step__info step-info">
                <p>В пределе концентрации в этом упражнении появляется удивительное состояние, когда цифры в уме меняются сами по себе в ритме дыхания, а мы лишь с удивлением свидетельствуем этот процесс как внешний наблюдатель. </p>
                <div class="h4 h4--green h4--dots">Может быть, наше чистое «я» — не мысль и не эмоция, а восприятие?</div>
            </div>
        </div>
    </div>

    <div class="step__item item-step">
        <div class="container container--narrow">
            <div class="item-step__top">
                <div class="item-step__number number-circle number-circle--center animation">
                    <svg class="icon icon-decor-7 ">
                        <use xlink:href="/assets/img/spritesvg.svg#decor-7"></use>
                    </svg>
                </div>
                <h3 class="item-step__title h3">Устраивайтесь поудобнее</h3>
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
                    <audio id="audio-player" src="/assets/audio/step_6.mp3"></audio>
                    <a class="audio__btn" href="javascript:void(0);"></a>
                    <div class="audio__progress"></div>
                    <div class="audio__time">
                        <span class="audio__current-time">00:00</span> / <span class="audio__total-time">19:45</span>
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
                        <svg class="icon icon-decor-12">
                            <use xlink:href="/assets/img/spritesvg.svg#decor-12"></use>
                        </svg>
                    </div>
                    <h3 class="item-step__title h3">Поделитесь с нами</h3>
                </div>
                <div class="item-step__info step-info js-form-report">
                    <p>По нашему опыту, у некоторых практикующих эта медитация не получается совсем, а у других — открывает дверь к тишине ума. </p>
                    <p>К какому типу относитесь вы? </p>
                    <p>Удалось ли вам подружиться с цифрами?</p>

                    @includeWhen(($guard = Auth::guard('participant'))->check() && $guard->user()->isStepAvailable(6) && !$guard->user()->reportedAtStep(6), 'includes.steps.report')
                </div>

                @include('includes.steps.comments', ['step' => 6])
            </div>
        </div>
    </div>

    <div class="container container--narrow">
        <div class="step-questions">
            <div class="circle-line-light"></div>
            <h2 class="step-questions__title h2">Закон кармы без эзотеризма</h2>
            <div class="step-questions__text">
                <p>Тема сложная, но разговор был бы не полным, если бы мы хотя бы коротко не упомянули про карму.</p>
                <p>Закон кармы устанавливает связь между поступками, которые мы совершали в прошлом и событиями, которые происходят с нами в настоящем.</p>
                <p>Тот факт, что мы не помним наших поступков или считаем себя идеальным мерилом мировой справедливости не влияет на работу этого глобального закона. Состояние сознания, когда мы считаем себя началом отсчета, называется заблуждением или невежеством. Это есть подлинная причина страданий, а вовсе не внешний мир. </p>
                <p>Внешний мир отражает состояния нашего сознания, нашей души. Он как идеальное зеркало, в котором мы сталкиваемся со своим отражением. В это трудно поверить, ведь мы такие пушистые, а мир такой жестокий (гадкий, несправедливый и т.д.).</p>
                <p>Увы, мы пожинаем лишь то, что посеяли сами. Признать это, понять это — многого стоит. Пожалуй, это половина пути, если во всех ситуациях человек начинает находить отражения своего невежества, своих несовершенств. Это уже начало настоящей истории успеха.</p>
                <p>Карма — клубок нитей. На них нанизаны все события нашего прошлого. Наша типовая реакция в событиях одного рода поддерживает и упрочняет конкретную нить кармы. Каждая такая нить формирует свою событийную цепочку в нашем настоящем, притягивая определенные события в нашу жизнь. Из всего многообразия событий к нам притягиваются лишь те, которые мы притягиваем сами. Нам лишь кажется, что эти события случайны. Мы — есть причина.</p>
                <p>Практика медитации уменьшает размеры этого клубка. Начиная с первых усилий по преодолению ноющего тела. Завтра мы поговорим об элементах, которые ведут к снижению новых кармических отягощений. Мы отрабатываем прежние неблаговидные поступки, но останавливаем себя от производства новых. Карма — это бассейн с двумя кранами. Через один вода наливается, через другой выливается. Наша задача правильно использовать вентили. Это процесс не быстрый, но единственно верный.</p>
                <p>Страдания очищают душу, а когда мы понимаем, что винить в них просто некого, то мы начинаем отрабатывать карму. Она постепенно становится все прозрачнее, проясняя для нас все скрытые причины и следствия.</p>
                <p>Если вы видите, что ходите по кругу, значит пришло ваше время разорвать этот чертов круг!</p>
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
