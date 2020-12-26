@extends('layouts.master')

@section('title', 'Шаг 2 - Медитация на ладонях | ' . config('app.name'))
@section('description', 'Техники медитации для начинающих. Медитация на концентрацию внимания - телесно-ориентированная практика. Голосовое сопровождение, персональный куратор, советы для начинающих. Попробуйте вместе с нами!')
@section('keywords', 'телесно ориентированные практики, медитация техника')
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
            <h1 class="step__title h3">Медитация на ладонях</h1>
            <div class="step__text">
                <p>Удерживаем внимание на кистях рук. <br>При этом тело полностью неподвижно.</p>
            </div>
        </div>
    </div>

    <div class="step__item item-step">
        <div class="section section--white">
            <div class="container container--narrow">
                <div class="item-step__info step-info">
                    <div class="h4 h4--green h4--dots">При выполнении упражнения внимание может ускользать на посторонние мысли или перескакивать на другие части тела. Если это происходит, мягко возвращайте его обратно к заданию.
                        @agent('mobile')
                            <div class="step-info__video step-info__video--mob">
                                <video autoplay="autoplay" muted="muted" loop id="video-step-2-mob">
                                    <source src="/assets/video/step2_mob.mp4" type="video/mp4">
                                </video>
                            </div>
                        @else
                            <div class="step-info__video step-info__video--desk">
                                <video autoplay="autoplay" muted="muted" loop id="video-step-2">
                                    <source src="/assets/video/step2_desk.mp4" type="video/mp4">
                                </video>
                            </div>
                        @endagent
                    </div>
                    <p>Когда внимание полностью сосредоточено на кистях, то посторонних мыслей не возникнет. Ощущение кистей рук — единственное, что остается в сознании.</p>
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
                <h3 class="item-step__title h3">Возможные ошибки</h3>
            </div>
            <div class="item-step__info step-info">
                <p>Для некоторых вызов этого упражнения в том, чтобы уйти от мысли о руках и прийти именно к ощущению рук. Не нужно представлять ваши руки, как они лежат на ваших бедрах. Не нужно думать о ваших руках. Их нужно ощутить.</p>
                <p>Необходимо прорваться сквозь мыслеобраз, созданный в голове, непосредственно к вашим рукам и осязательно присутствовать в них своим «телесным вниманием».</p>
                <div class="step-info__recommend recommend">
                    <div class="recommend__avatar-wrap">
                        <div class="recommend__avatar">
                            @agent('mobile')<img src="/assets/img/Zoe_300.png" alt="image">@else<img src="/assets/img/Zoe_600.png" alt="image">@endagent
                        </div>
                    </div>
                    <div class="recommend__info">
                        <div class="recommend__title page-link">рекомендации зои</div>
                        <div class="recommend__text">
                            <p>Через некоторое время вы можете почувствовать в кистях тепло или отяжеление; сложенные вместе ладони могут ощущаться как одно целое, или может казаться, что они увеличиваются в размерах, приближаются к вам — это нормально для концентрации такого рода. </p>
                            <p>Может и не возникнуть никаких дополнительных ощущений, только руки — также продолжайте практику. Главное — не думать о руках, а чувстововать их.</p>
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
                    <svg class="icon icon-decor-6 ">
                        <use xlink:href="/assets/img/spritesvg.svg#decor-6"></use>
                    </svg>
                </div>
                <h3 class="item-step__title h3">Трудности</h3>
            </div>
            <div class="item-step__info step-info">
                <p>Если по прошествии какого-то времени вам становится совсем трудно удерживать внимание и шквал мыслей или эмоций затопляет ваше сознание, то лучше переключить внимание на наблюдение за дыханием, как мы делали вчера. </p>
                <p> <b>Не забывайте время от времени контролировать положение тела — спина ровная, мышцы расслаблены.</b></p>
                <p>Противопоказано находиться в медитации с отвлеченным вниманием, погруженным в суету мыслей и эмоций. Такая «медитация» будет вас ослаблять. </p>
                <div class="h4 h4--green h4--dots">Когда это упражнение начнет получаться, вы увидите, насколько это приятно, комфортно и увлекательно.</div>
                <p>Также вы можете столкнуться с тем, что тело не так легко удерживать в одном и том же положении. Неусидчивость и ноющее тело — первые препятствия входа в медитацию. Завтра мы поговорим об этом подробнее.</p>
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
                <h3 class="item-step__title h3">Медитируем 8 минут...</h3>
            </div>
            <div class="item-step__info step-info">
                <ul class="step-info__list list">
                    <li>Итак, сядьте с ровной спиной и вложите ладонь в ладонь на бедрах. </li>
                    <li>Пробегитесь вниманием по мышцам лица, а потом и по всему телу, почувствуйте позвоночник и положение головы. Макушка тянется вверх. </li>
                    <li>Сфокусируйте внимание на ладонях. Ощущайте ладони, пальцы, запястья — левую и правую кисти целиком.</li>
                </ul>
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
                    <audio id="audio-player" src="/assets/audio/step_2.mp3"></audio>
                    <a class="audio__btn" href="javascript:void(0);"></a>
                    <div class="audio__progress"></div>
                    <div class="audio__time">
                        <span class="audio__current-time">00:00</span> / <span class="audio__total-time">11:12</span>
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
                        <svg class="icon icon-decor-8 ">
                            <use xlink:href="/assets/img/spritesvg.svg#decor-8"></use>
                        </svg>
                    </div>
                    <h3 class="item-step__title h3">И пишем отчет!</h3>
                </div>
                <div class="item-step__info step-info js-form-report">
                    <p>Напишите здесь о своих ощущениях, что получалось, какие трудности возникали. </p>
                    <p>Также почитайте наш короткий рассказ о практике в конце этой страницы.</p>

                    @includeWhen(($guard = Auth::guard('participant'))->check() && $guard->user()->isStepAvailable(2) && !$guard->user()->reportedAtStep(2), 'includes.steps.report')
                </div>

                @include('includes.steps.comments', ['step' => 2])
            </div>
        </div>
    </div>

    <div class="container container--narrow">
        <div class="step-questions">
            <div class="circle-line-light"></div>
            <h2 class="step-questions__title h2">Что такое випассана?</h2>
            <div class="step-questions__text">
                <p>На странице предыдущего задания мы рассказали про медитацию успокоения ума — практику саматха.</p>
                <p>Випассана — это другая сторона практики медитации. Это развитие истинного восприятия.</p>
                <p>Техники випассаны нацелены на изменение мышления как такового. Одной лишь практики саматха (тишины ума) недостаточно для преобразования сознания. Необходимо менять сам процесс производства мыслей. Он влияет не только на восприятие событий, но и определяет сами события нашей жизни. Да, да, события не случайны.</p>
                <p>Випассану мы делим на техники аналитической медитации, техники самонаблюдения в действии, а также техники перепросмотра событий прошлого.</p>
                <p>На третьем шаге мы остановимся подробнее на стадиях саматха, а потом снова вернемся к методам випассаны.</p>
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
