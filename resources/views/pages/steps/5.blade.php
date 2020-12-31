@extends('layouts.master')

@section('title', 'Шаг 5 - День осознанности | ' . config('app.name'))
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
            <h1 class="step__title h3">«День осознанности»</h1>
            <div class="step__text">
                <p>Подойдите к этой практике ответственно,<br>ведь это, пожалуй, самое важное упражнение нашего курса!</p>
            </div>
        </div>
    </div>
    <div class="step__item item-step">
        <div class="container container--narrow">
            <div class="item-step__info step-info">
                <div class="h4 h4--green h4--dots">«День осознанности» преследует не только цели личностного развития, но и значительно способствует духовному росту в самом высоком смысле — постижению природы своего «я».</div>
                <p>Медитация в отрыве от жизни мертва ☠. И сегодня мы будем имплементировать наши навыки медитации в жизнь. Мы будем учиться создавать «островки осознанности» в течение дня.</p>
            </div>
        </div>
    </div>

    <div class="step__item item-step">
        <div class="container container--narrow">
            <div class="item-step__top">
                <div class="item-step__number number-circle number-circle--center animation">
                    <svg class="icon icon-decor-3 ">
                        <use xlink:href="/assets/img/spritesvg.svg#decor-3"></use>
                    </svg>
                </div>
                <h3 class="item-step__title h3">Блиц-медитации</h3>
            </div>
            <div class="item-step__info step-info">
                <p>Вам нужно заранее обозначить для себя время в вашем рабочем графике, когда вы сможете уделять внимание блиц-медитациям. Поставьте ремайндеры в свой планировщик. Желательно, чтобы таких пауз за день было как минимум пять.</p>
                <h4 class="h4--green h4--dots">Блиц-медитация может проходить так: сядьте с ровной спиной, закройте глаза, положите руки на колени или переднюю поверхность бедер. Почувствуйте свое дыхание, движение грудной клетки, ощутите потоки воздуха внутри носоглотки.</h4>
            </div>
        </div>
        <div class="section section--white">
            <div class="container container--narrow">
                <div class="item-step__info step-info">
                    <p>Цель этого блиц-сосредоточения — выйти из круговорота событий, отключиться от текущих задач, «выпасть из обоймы». В целом свете остается только дыхание и больше ничего. Остановите мир на несколько минут!</p>
                    @agent('mobile')
                        <div class="step-info__video step-info__video--mob">
                            <video autoplay="autoplay" muted="muted" loop id="video-step-5-mob">
                                <source src="/assets/video/step5_mob.mp4" type="video/mp4">
                            </video>
                        </div>
                    @else
                        <div class="step-info__video step-info__video--desk">
                            <video autoplay="autoplay" muted="muted" loop id="video-step-5">
                                <source src="/assets/video/step5_desk.mp4" type="video/mp4">
                            </video>
                        </div>
                    @endagent
                    <p>Можно применять другие виды сосредоточения (на кистях или «поплавок»), если они у вас получаются лучше.</p>
                </div>
            </div>
        </div>
        <div class="container container--narrow">
            <div class="item-step__info step-info">
                <p> <b>В конце этой паузы до того, как откроете глаза, нужно постараться внутренне улыбнуться, почувствовать радость внутри себя, почувствовать, что Вселенная смотрит на вас, что вы ее часть, а не винтик в механизме вашей компании. </b></p>
                <p>Со временем это ощущение можно пробуждать в себе на более ранних стадиях блиц-медитации. Наполняйте себя «внутренней улыбкой» и одновременно фокусируйтесь на дыхании или руках.</p>
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
                <h3 class="item-step__title h3">Эффект регулярности</h3>
            </div>
            <div class="item-step__info step-info">
                <p>Поставьте себе задачу выполнять это упражнение <b>каждый день в течение месяца. </b>Вы удивитесь эффективности столь небольших усилий. Медитация будет вплетаться в вашу повседневную жизнь, успокаивать разрушительные эмоции внутри вас. Подталкивать к осознанности и легкости в течение дня — в поступках, эмоциях и желаниях.</p>
                <div class="h4 h4--green h4--dots">Так однажды вы обнаружите, что отчитываетесь перед советом директоров или делаете презентацию у сложного клиента, но не теряете себя, не растворяетесь в потоке чужих требований, нетерпимости или раздражения. </div>
                <p>Вы сможете оставаться в равновесии и находить лучшие решения даже в условиях стресса. Это будет проявление новой силы внутри вас, дающей опору и уверенность. Оппонент подсознательно почувствует эту внутреннюю силу, и его поведение будет меняться.</p>
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
                <h3 class="item-step__title h3">Как проводить выходные?</h3>
            </div>
            <div class="item-step__info step-info">
                <p>Не употребляйте алкоголь. В этом совете нет эзотерики или морали. Алкоголь разрушает результаты наших усилий, оказывает деградирующее воздействие на навыки фокусировки.</p>
                <p> <b>«А как же нам расслабляться после трудовой недели?»</b></p>
                <div class="h4 h4--green h4--dots">Мы с вами учимся не напрягаться, чтобы не приходилось «расслабляться». Однако на время обучения необходимо отказаться от приема алкоголя, иначе не научимся.</div>
                <p>Выходные — отличное время для <b>«островков осознанности». </b>Тренируйтесь переключать себя во время отдыха и развлечений. Это еще более сложная задача — отвернуться от удовольствий ради микро-медитации. Это по силам только <b>истинным искателям свободы!</b></p>
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
                    <h3 class="item-step__title h3">Напишите отчет</h3>
                </div>
                <div class="item-step__info step-info js-form-report">
                    <p>Напишите нам, удалось ли вспомнить про наше задание в течение дня?</p>
                    <p>Если ничего не получилось, попробуйте завтра.</p>
                    <p>Если не получится и завтра, напишите об этом, <b>мы все равно откроем вам доступ </b>к следующему шагу.</p>

                    @include('includes.steps.report')
                </div>

                @include('includes.steps.comments', ['step' => 5])
            </div>
        </div>
    </div>

    <div class="container container--narrow">
        <div class="step-questions">
            <div class="circle-line-light"></div>
            <h2 class="step-questions__title h2">Перепросмотр прошлого</h2>
            <div class="step-questions__text">
                <p>Ревизия нашего прошлого преследует две цели:</p>
                <ul class="step-questions__list list">
                    <li>Освобождение от травмирующих событий, которые сформировали наше мышление. Можно сказать, что это уровень психотерапии.</li>
                    <li>Объективное рассмотрение наших собственных поступков — с точки зрения закона кармы, а не частных суждений о «личной справедливости».</li>
                </ul>
                <p>Например, если в порыве раздражения или обиды мы совершили плохой поступок, то мы часто оправдываем себя, говоря «он меня вынудил так поступить». Однако с точки зрения закона кармы нет никаких оправдательных обстоятельств.</p>
                <p>Эта практика дает видение реальных причин неприятностей и страданий, которые приходят в нашу жизнь из окружающего мира.</p>
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
