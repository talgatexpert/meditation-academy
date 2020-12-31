@extends('layouts.master')

@section('title', 'Шаг 1 - Фундамент медитации | ' . config('app.name'))
@section('description', 'Как научиться медитировать, с чего начать? Рассказываем, какая правильная поза для медитации, сколько времени медитировать на начальных этапах. Первый урок - начало медитации. Попробуйте вместе с нами!')
@section('keywords', 'позы для медитация, курс медитации, онлайн медитация')
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
            <h1 class="step__title h3">Фундамент медитации</h1>
            <div class="step__text">
                <p>Фундамент медитации —<br>это правильное место и правильная поза</p>
            </div>
        </div>
    </div>

    <div class="step__item item-step">
        <div class="container container--narrow">
            <div class="item-step__top">
                <div class="item-step__number number-circle number-circle--center animation">01</div>
                <h3 class="item-step__title h3">Место для медитации</h3>
            </div>
            <div class="item-step__info step-info">
                <p>Определите в квартире место для медитации. Это не должно быть ваше рабочее место, по крайней мере перед вами не должно быть компьютера (даже выключенного).</p>
            </div>
        </div>
    </div>

    <div class="step__item item-step">
        <div class="container container--narrow">
            <div class="item-step__top">
                <div class="item-step__number number-circle number-circle--center animation">02</div>
                <h3 class="item-step__title h3">Поза для медитации</h3>
            </div>
            <div class="item-step__info step-info">
                <p>Поза лотоса — совсем не обязательный атрибут медитации. Например, в буддизме считается, что главное — это <b>правильное состояние ума. </b>Оно достигается через развитие навыка управления своим вниманием. Существуют  рекомендации, исполнение которых способствует этому.</p>
                <h4 class="h4 h4--green h4--dots">Медитация — это не расслабление, но и не напряжение.</h4>
                <p>Поза должна отвечать этому. Она должна быть не напряженной, но и не вялой. Правильная поза создает рабочее настроение и тонус сознания.</p>
                <img class="step-info__img" src="/assets/img/step-7.png" alt="image">
                <p>Для медитации необходимо вертикальное положение туловища с ровной спиной. Сидеть при этом лучше <b>на жесткой и ровной поверхности </b>— на табуретке, стуле или краешке дивана (если он жесткий).</p>
                <p><b>Даже если это будет неудобно, преодолейте это, выработайте привычку к правильной позе.</b></p>
                <img class="step-info__img step-info__img--left" src="/assets/img/step-1.png" alt="image">
                <ul class="step-info__list list">
                    <li>Другой вариант — сидя на <b>небольшой подушке </b>по-турецки или на коленках. Однако избегайте лишних перенапряжений в ногах.</li>
                    <li>На ретритах мы используем специальные <b>складные лавочки для медитации. </b>Они продаются в эзотерических магазинах и через Интернет. Если у вас уже есть такая — отлично.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="step__item item-step">
        <div class="container container--narrow">
            <div class="item-step__top">
                <div class="item-step__number number-circle number-circle--center animation">03</div>
                <h3 class="item-step__title h3">Правильное положение тела</h3>
            </div>
            <div class="item-step__info step-info">
                <p>Перед каждой медитацией проверяем положение тела:</p>
                <ul class="step-info__list list list--nomargin">
                    <li>Ровная спина, не сутулимся</li>
                    <li>Грудная клетка и плечи расправлены</li>
                    <li>Макушку тянем вверх, голову не запракидываем</li>
                    <li>Руки вложены ладонь в ладонь (правая сверху)</li>
                </ul>
                <h4 class="h4 h4--green h4--dots">Ровный позвоночник – важная составляющая успешной медитации</h4>
                <div class="step-info__recommend recommend">
                    <div class="recommend__avatar-wrap">
                        <div class="recommend__avatar">
                            @agent('mobile')<img src="/assets/img/Zoe_300.png" alt="image">@else<img src="/assets/img/Zoe_600.png" alt="image">@endagent
                        </div>
                    </div>
                    <div class="recommend__info">
                        <div class="recommend__title page-link">рекомендации зои</div>
                        <div class="recommend__text">
                            <p>Я много раз проверяла это на себе. Когда я в медитации замечала сутулость и выравнивала спину, тут же состояние углублялось как бы само собой, хотя я продолжала прикладывать ровно те же усилия в концентрации внимания.</p>
                            <p>Потом я стала замечать, что и в повседневной жизни прямая спина «выравнивает» мое состояние. В разгар рабочего дня это бывает очень кстати. Ежедневные медитации помогают помнить о прямой спине!</p>
                            <p>Так что нацеливаемся на то, чтобы время от времени внутренним взором проверять положение тела прямо во время медитации. Если заметили сутулость – выравнивайтесь! Такое отвлечение не ослабит медитацию, а наоборот, усилит ее.</p>
                        </div>
                    </div>
                </div>
                <div class="step-info__wrap">
                    <img class="step-info__img" src="/assets/img/step-2.svg" alt="image">
                    <img class="step-info__img" src="/assets/img/step-3.svg" alt="image">
                </div>
            </div>
        </div>
    </div>

    <div class="step__item item-step">
        <div class="container contaner--narrow">
            <div class="item-step__top">
                <div class="item-step__number number-circle number-circle--center animation">04</div>
                <h3 class="item-step__title h3">Когда медитировать</h3>
            </div>
            <div class="item-step__info step-info">
                <div class="step-info__recommend recommend">
                    <div class="recommend__avatar-wrap">
                        <div class="recommend__avatar">
                            @agent('mobile')<img src="/assets/img/Zoe_300.png" alt="image">@else<img src="/assets/img/Zoe_600.png" alt="image">@endagent
                        </div>
                    </div>
                    <div class="recommend__info">
                        <div class="recommend__title page-link">рекомендации зои</div>
                        <div class="recommend__text">
                            <p>Я советую медитировать по утрам — это лучше всего. Я сама медитирую дома перед выходом на работу. Приходится вставать чуть раньше, но это окупается. Если у вас получится медитировать так же — будет замечательно. По утрам мозг еще не утомлен и не вовлечен в суету. Наше сознание в утренние часы в наибольшей степени спокойно и полно сил. Поэтому медитация наиболее эффективна.</p>
                            <p>Если же по утрам у вас не получится выделять время для практики, то постарайтесь хотя бы выполнять наши задания не перед самым сном, а пораньше. Сразу после еды обучение также редко идет впрок.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="step__item item-step">
        <div class="container container--narrow">
            <div class="item-step__top">
                <div class="item-step__number number-circle number-circle--center animation">05</div>
                <h3 class="item-step__title h3">Начинаем занятие!</h3>
            </div>
            <div class="item-step__info step-info">
                <div class="step-info__wrap">
                    <div class="step-info__item item-step-info">
                        <div class="item-step-info__img"><img src="/assets/img/step-4.png" alt="image"></div>
                        <div class="item-step-info__text">Определите место для медитации</div>
                    </div>
                    <div class="step-info__item item-step-info">
                        <div class="item-step-info__img"><img src="/assets/img/step-5.png" alt="image"></div>
                        <div class="item-step-info__text">Выберите, на чем и как будете сидеть</div>
                    </div>
                    <div class="step-info__item item-step-info">
                        <div class="item-step-info__img"><img src="/assets/img/step-6.png" alt="image"></div>
                        <div class="item-step-info__text">Включайте запись с инструкциями</div>
                    </div>
                </div>
                <div class="step-info__audio audio">
                    <audio id="audio-player" src="/assets/audio/step_1.mp3"></audio>
                    <a class="audio__btn" href="javascript:void(0);"></a>
                    <div class="audio__progress"></div>
                    <div class="audio__time">
                        <span class="audio__current-time">00:00</span> / <span class="audio__total-time">09:25</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="step__item item-step">
        <div class="section section--white bg-blue-green">
            <div class="container container--narrow">
                <div class="item-step__top">
                    <div class="item-step__number number-circle number-circle--center animation">06</div>
                    <h3 class="item-step__title h3">Не забудьте про отчет</h3>
                </div>
                <div class="item-step__info step-info js-form-report">
                    <ul class="step-info__list list list--nomargin">
                        <li>Напишите нам, получилось ли выстроить расслабленное тело с прямой спиной?</li>
                        <li>Если возникли вопросы, обязательно задайте их в комментариях</li>
                        <li>Письмо с авторизацией на следующем задании придет после ответа куратора</li>
                    </ul>

                    @include('includes.steps.report')
                </div>

                @include('includes.steps.comments', ['step' => 1])
            </div>
        </div>
    </div>

    <div class="container container--narrow">
        <div class="step-questions">
            <div class="circle-line-light"></div>
            <h2 class="step-questions__title h2">Что такое медитация?</h2>
            <div class="step-questions__text">
                <p>Медитация - это обширный набор практик для преобразования сознания.</p>
                <p>Их можно разделить на два типа:<br><b>саматха </b>— акцент на успокоении непрерывной непроизвольной деятельность ума; <br><b>випассана </b>— основной упор на изучении и изменении нашего мышления.</p>
                <p>Такое деление условно. Оба типа техник являются двумя сторонами одной монеты и с углублением опыта медитации сходятся в единое целое.</p>
                <p>Большинство техник этого курса — медитации саматха. Они призваны сделать наш ум тихим, одновременно повышая его активность.</p>
                <p>Обычно ум затихает только в глубоком сне, при сильном истощении или шоке. Практика саматха рождает новый режим для ума — внутреннюю тишину при бодром сознании и остром восприятии.</p>
                <p>Мы продолжим этот разговор в следующих заданиях — в конце каждой страницы</p>
            </div>
            <div class="step-questions__big-circles big-circles">
                <div class="big-circle__icon-dots icon-dots">
                    <div class="big-circle__icon-circles icon-circles"></div>
                    <div class="big-circle__line lines lines--reverse"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
