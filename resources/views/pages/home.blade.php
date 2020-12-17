@extends('layouts.master')

@section('title', 'Медитация для начинающих. Онлайн-курс | ' . config('app.name'))
@section('description', 'Медитация - с чего начать? На курсе: подробные инструкции, голосовое сопровождение занятий, личный куратор, гибкий график. Повышение осознанности помогает стать эффективнее, укрепить эмоциональную стабильность, жить в позитиве и развиваться духовно.')
@section('keywords', 'как научиться медитировать, техники медитации, медитация онлайн, медитация для начинающих, бесплатно')
@section('class', 'bg-blue-green-repeat')

@section('content')
<ul class="section-nav js-anchors">
    <li class="section-nav__item">
        <a class="section-nav__link active" href="#start">
            <div class="section-nav__title">В начало</div>
        </a>
    </li>
    <li class="section-nav__item">
        <a class="section-nav__link" href="#reasons">
            <div class="section-nav__title">Истории успеха участников курса</div>
        </a>
    </li>
    <li class="section-nav__item">
        <a class="section-nav__link" href="#course">
            <div class="section-nav__title">Преимущества курса</div>
        </a>
    </li>
    <li class="section-nav__item">
        <a class="section-nav__link" href="#classes">
            <div class="section-nav__title">Содержание занятий</div>
        </a>
    </li>
    <li class="section-nav__item">
        <a class="section-nav__link" href="#team">
            <div class="section-nav__title">С вами будут заниматься</div>
        </a>
    </li>
    @if($comments)


    <li class="section-nav__item">
        <a class="section-nav__link" href="#reviews">
            <div class="section-nav__title">Отзывы участников</div>
        </a>
    </li>
    @endif
    <li class="section-nav__item">
        <a class="section-nav__link" href="#interview">
            <div class="section-nav__title">Интервью с выпускниками</div>
        </a>
    </li>
</ul>

<section class="section" id="start">
    <div class="container">
        <div class="dashes"></div>
        <div class="intro">
            <h1 class="intro__title h1">7 шагов <br>к медитации</h1>
            <div class="intro__text">
                <p>Медитация для начинающих<br>Онлайн курс от мастеров медитации</p>
            </div>
            <div class="intro__big-circles big-circles">
                <div class="big-circle__icon-dots icon-dots">
                    <div class="big-circle__icon-circles icon-circles"></div>
                    <div class="big-circle__line short-line"></div>
                </div>
            </div>
            <div class="intro__items">
                <div class="intro__item item-intro">
                    <div class="item-intro__title">Основан</div>
                    <div class="item-intro__text h5">2018</div>
                </div>
                <div class="intro__item item-intro">
                    <div class="item-intro__title">Эксперты курса</div>
                    <div class="item-intro__text h5">{{$curatorsCount}}</div>
                </div>
                <div class="intro__item item-intro">
                    <div class="item-intro__title">Выпускников</div>
                    <div class="item-intro__text h5">{{ $graduatedParticipantsCount ? $graduatedParticipantsCount: 0 }}</div>
                </div>
                <div class="intro__item item-intro">
                    <div class="item-intro__title">Участие в 2020 году</div>
                    <div class="item-intro__text h5">Бесплатно</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section--white" id="reasons">
    <div class="container">
        <h2 class="section__title h2">Истории успеха участников курса</h2>
        <div class="reasons" data-poll-url="{{ route('poll') }}">
            <div class="reasons__items">
                <div class="reasons__item item-reason js-reason">
                    <a class="item-reason__icon-dots icon-dots js-poll" href="{{ route('success-stories.effectiveness') }}" data-poll-name="reasons" data-poll-option="effectiveness">
                        <div class="item-reason__icon-circles icon-circles animation"></div>
                    </a>
                    <div class="item-reason__group">
                        <h5 class="item-reason__title h5"><a href="{{ route('success-stories.effectiveness') }}" class="js-poll" data-poll-name="reasons" data-poll-option="effectiveness">Повышение <br>эффективности</a></h5>
                        <ul class="item-reason__list list">
                            <li>Концентрация на задаче</li>
                            <li>Лидерский потенциал</li>
                            <li>Эмпатия и интуиция</li>
                            <li>Не выгорание на работе</li>
                        </ul>
                    </div>
                </div>
                <div class="reasons__item item-reason js-reason">
                    <a class="item-reason__icon-dots icon-dots js-poll" href="{{ route('success-stories.emotional-stability') }}" data-poll-name="reasons" data-poll-option="emotional_stability">
                        <div class="item-reason__icon-circles icon-circles animation"></div>
                    </a>
                    <div class="item-reason__group">
                        <h5 class="item-reason__title h5"><a href="{{ route('success-stories.emotional-stability') }}" class="js-poll" data-poll-name="reasons" data-poll-option="emotional_stability">Контроль <br>эмоций</a></h5>
                        <ul class="item-reason__list list">
                            <li>Панические атаки</li>
                            <li>Иммунитет к стрессу</li>
                            <li>Обиды и раздражение</li>
                            <li>Страх и тревожность</li>
                        </ul>
                    </div>
                </div>
                <div class="reasons__item item-reason js-reason">
                    <a class="item-reason__icon-dots icon-dots js-poll" href="{{ route('success-stories.positive-experiences') }}" data-poll-name="reasons" data-poll-option="positive_experiences">
                        <div class="item-reason__icon-circles icon-circles animation"></div>
                    </a>
                    <div class="item-reason__group">
                        <h5 class="item-reason__title h5"><a href="{{ route('success-stories.positive-experiences') }}" class="js-poll" data-poll-name="reasons" data-poll-option="positive_experiences">Жизнь <br>в позитиве</a></h5>
                        <ul class="item-reason__list list">
                            <li>Повысить самооценку</li>
                            <li>Уверенность в себе</li>
                            <li>В каждом дне - радость</li>
                            <li>Чудеса случаются!</li>
                        </ul>
                    </div>
                </div>
                <div class="reasons__item item-reason js-reason">
                    <a class="item-reason__icon-dots icon-dots js-poll" href="{{ route('success-stories.self-awareness') }}" data-poll-name="reasons" data-poll-option="self_awareness">
                        <div class="item-reason__icon-circles icon-circles animation"></div>
                    </a>
                    <div class="item-reason__group">
                        <h5 class="item-reason__title h5"><a href="{{ route('success-stories.self-awareness') }}" class="js-poll" data-poll-name="reasons" data-poll-option="self_awareness">Духовный <br>рост</a></h5>
                        <ul class="item-reason__list list">
                            <li>Осознанное поведение</li>
                            <li>Личностный рост</li>
                            <li>Тишина ума</li>
                            <li>Осознание смысла жизни</li>
                        </ul>
                        {{--<a class="item-reason__link page-link page-link--border" href="javascript:void(0);">Истории успеха участников </a>--}}
                    </div>
                </div>
            </div>

            <a class="reasons__btn btn {{ Auth::guard('participant')->check() ? '' : 'js-registration' }}"  href="{{ Auth::guard('participant')->check() ? '/messages' : 'js-javascript:void(0);' }}"> <span>{{Auth::guard('participant')->check() ? 'Перейти к курсу' : 'Записаться'}}</span></a>
        </div>
    </div>
</section>

<section class="section bg-blue-green" id="course">
    <div class="container">
        <h2 class="section__title h2">Преимущества<br>курса</h2>
        <div class="course">
            <ul class="course__list number-list">
                <li class="number-list__item">
                    <div class="number-list__number number-circle">01</div>
                    <div class="number-list__text">Персональный куратор</div>
                </li>
                <li class="number-list__item">
                    <div class="number-list__number number-circle">02</div>
                    <div class="number-list__text">Гибкий график</div>
                </li>
                <li class="number-list__item">
                    <div class="number-list__number number-circle">03</div>
                    <div class="number-list__text">Семь занятий</div>
                </li>
                <li class="number-list__item">
                    <div class="number-list__number number-circle">04</div>
                    <div class="number-list__text">Голосовое <br>сопровождение медитаций</div>
                </li>
            </ul>
            <div class="course__big-circles big-circles animation">
                <div class="big-circles__icon-dots icon-dots">
                    <div class="big-circles__icon-circles icon-circles animation">
                        <a class="big-circle__icon-play icon-play" href="#video-main" data-fancybox>
                            <svg class="icon icon-play ">
                                <use xlink:href="/assets/img/spritesvg.svg#play"></use>
                            </svg>
                        </a>
                        <a class="big-circle__icon-play icon-play icon-play--mob" href="#video-main-mob" data-fancybox>
                            <svg class="icon icon-play ">
                                <use xlink:href="/assets/img/spritesvg.svg#play"></use>
                            </svg>
                        </a>
                        @agent('mobile')
                            <video id="video-main-mob" width="640" height="320" controls="" style="display:none;">
                                <source src="/assets/video/7shagov_v7_mob.mp4" type="video/mp4">
                            </video>
                        @else
                            <video id="video-main" width="1920" height="1080" controls="" style="display:none;">
                                <source src="/assets/video/7shagov_v7_desk.mp4" type="video/mp4">
                            </video>
                        @endagent
                    </div>
                    <div class="big-circle__line long-line"></div>
                </div>
                <div class="big-circles__text">О курсе <br>за 1 минуту</div>
            </div>
        </div>
        <h2 class="section__title h2 h2--center">Участие бесплатное!</h2>
        <div class="free js-accordion">
            <a class="free__link page-link page-link--gray js-accordion-link" href="javascript:void(0);">Зачем это нам?
                <svg class="icon icon-arrow ">
                    <use xlink:href="/assets/img/spritesvg.svg#arrow"></use>
                </svg>
            </a>
            <div class="free__text js-accordion-drop">
                <ul class="free__list list">
                    <li>Нести медитацию в общество — почетная обязанность каждого практикующего.</li>
                    <li>Ваше участие способствует продвижению нашей платной корпоративной программы.</li>
                </ul>
            </div>
            <div class="free__btn-wrap btn-wrap">
                <div class="btn-wrap__big-circles big-circles animation"></div>
                <a class="btn-wrap__btn btn  {{ Auth::guard('participant')->check() ? '' : 'js-registration' }}"  href="{{ Auth::guard('participant')->check() ? '/messages' : 'js-javascript:void(0);' }}"> <span>{{Auth::guard('participant')->check() ? 'Перейти к курсу' : 'Записаться'}}</span></a>
            </div>
        </div>
    </div>
</section>

<section class="section section--padding-tablet bg-blue-green">
    <div class="container">
        <h2 class="section__title h2">Процесс <br>обучения</h2>
        <div class="training">
            <div class="training__wrap">
                <div class="training__items">
                    <div class="training__item item-training">
                        <div class="item-training__icon-dots icon-dots">
                            <div class="item-training__icon-circles icon-circles">
                                <svg class="icon icon-decor-1 ">
                                    <use xlink:href="/assets/img/spritesvg.svg#decor-1"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="item-training__group">
                            <div class="item-training__title h5">Вы</div>
                            <ul class="item-training__list list">
                                <li>Получаете инструкции</li>
                                <li>Выполняете задание </li>
                                <li>Пишете отчет</li>
                            </ul>
                        </div>
                    </div>
                    <div class="training__item item-training">
                        <div class="item-training__icon-dots icon-dots">
                            <div class="item-training__icon-circles icon-circles">
                                <svg class="icon icon-decor-2 ">
                                    <use xlink:href="/assets/img/spritesvg.svg#decor-2"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="item-training__group">
                            <div class="item-training__title h5">Куратор</div>
                            <ul class="item-training__list list">
                                <li>Изучает отчет</li>
                                <li>Дает советы</li>
                                <li>Открывает доступ <br>к следующему шагу</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="training__img"><img src="/assets/img/phone.png" alt="image"></div>
            </div>
        </div>
    </div>
</section>

<section class="section section--white" id="classes">
    <div class="section__wrap">
        <div class="wave wave--classes"></div>
    </div>
    <div class="container">
        <h2 class="section__title section__title--top h2">Содержание <br>занятий</h2>
        <div class="classes">
            <div class="classes__items owl-carousel js-classes-slider">
                <div class="classes__item item-classes">
                    <div class="item-classes__number">01</div>
                    <div class="item-classes__info">
                        <h5 class="item-classes__title h5">Фундамент медитации </h5>
                        <div class="item-classes__text">
                            <ul class="item-classes__list list">
                                <li>Каким должно быть место?</li>
                                <li>Какая правильная поза?</li>
                                <li>Что существенно, а что неважно</li>
                            </ul>
                            <p>Мы проведем с вами первую короткую медитацию с голосовым сопровождением.</p>
                        </div>
                        <a class="item-classes__btn secondary-btn" href="{{ route('steps.1') }}"> <span>Посмотреть задание</span></a>
                    </div>
                </div>
                <div class="classes__item item-classes">
                    <div class="item-classes__number">02</div>
                    <div class="item-classes__info">
                        <h5 class="item-classes__title h5">Медитация на ладонях</h5>
                        <div class="item-classes__text">
                            <p>Пробуждает телесное внимание, развивает плотную энергию устойчивости.</p>
                            <p>Эта медитация безопасна даже тех, кто склонен к попаданию в прострацию из-за неправильного обучения медитации. </p>
                        </div>
                        <a class="item-classes__btn secondary-btn" href="{{ route('steps.2') }}"> <span>Посмотреть задание</span></a>
                    </div>
                </div>
                <div class="classes__item item-classes">
                    <div class="item-classes__number">03</div>
                    <div class="item-classes__info">
                        <h5 class="item-classes__title h5">«Динамическая» медитация</h5>
                        <div class="item-classes__text">
                            <p>Еще одна телесно-ориентированная техника. </p>
                            <p>Мы приобретаем иммунитет к тревожности и паническим атакам. Стабилизируем эмоциональную сферу.</p>
                        </div>
                        <a class="item-classes__btn secondary-btn" href="{{ route('steps.3') }}"> <span>Посмотреть задание</span></a>
                    </div>
                </div>
                <div class="classes__item item-classes">
                    <div class="item-classes__number">04</div>
                    <div class="item-classes__info">
                        <h5 class="item-classes__title h5">Еще четыре шага</h5>
                        <div class="item-classes__text">
                            <p>Блестящая подборка традиционных медитаций.</p>
                            <p>Полюс одно занятие мы посвятим приложению навыков медитации в повседневную жизнь.</p>
                        </div>
                        <a class="item-classes__btn btn {{ Auth::guard('participant')->check() ? '' : 'js-registration' }}"  href="{{ Auth::guard('participant')->check() ? '/messages' : 'js-javascript:void(0);' }}"> <span>{{Auth::guard('participant')->check() ? 'Перейти к курсу' : 'Записаться на курс'}}</span></a>
                    </div>
                </div>
                <div class="classes__item item-classes">
                    <div class="item-classes__number">05</div>
                    <div class="item-classes__info">
                        <h5 class="item-classes__title h5">Лучшие практики</h5>
                        <div class="item-classes__text">
                            <p>Все наши кураторы имеют внушительный личный опыт практики медитации в суровых условиях Ретритов. </p>
                            <p>Они с радостью будут делиться с вами наработками. Мы ждем вас!</p>
                        </div>
                        <a class="item-classes__btn btn {{ Auth::guard('participant')->check() ? '' : 'js-registration' }}"  href="{{ Auth::guard('participant')->check() ? '/messages' : 'js-javascript:void(0);' }}"> <span>{{Auth::guard('participant')->check() ? 'Перейти к курсу' : 'Записаться на курс'}}</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-green-red-yellow" id="team">
    <div class="wave wave--team"></div>
    <div class="container">
        <h2 class="section__title section__title--nav h2">С вами будут заниматься</h2>
        <div class="team">
            <div class="team__items owl-carousel js-team-slider">
                <div class="team__item team-member">
                    <div class="team-member__left">
                        <div class="team-member__photo-wrap">
                            <div class="team-member__photo">
                                @agent('mobile')<img src="/assets/img/Zoe_300.png" alt="image">@else<img src="/assets/img/Zoe_600.png" alt="image">@endagent
                            </div>
                            <div class="team-member__video">
                                <div class="team-member__video-img"><img src="/assets/img/video-preview.png" alt="image"></div>
                                <div class="team-member__icon-circles icon-circles animation">
                                    <a class="team-member__icon-play icon-play" href="#video-team" data-fancybox>
                                        <svg class="icon icon-play ">
                                            <use xlink:href="/assets/img/spritesvg.svg#play"></use>
                                        </svg>
                                    </a>
                                    <a class="team-member__icon-play icon-play icon-play--mob" href="#video-team-mob" data-fancybox>
                                        <svg class="icon icon-play ">
                                            <use xlink:href="/assets/img/spritesvg.svg#play"></use>
                                        </svg>
                                    </a>
                                </div>
                                <div class="team-member__video-title">Видео <br>про нас</div>
                            </div>
                        </div>
                        {{--<a class="team-member__link page-link page-link--gray" href="javascript:void(0);">Мой блог--}}
                            {{--<svg class="icon icon-arrow ">--}}
                                {{--<use xlink:href="/assets/img/spritesvg.svg#arrow"></use>--}}
                            {{--</svg>--}}
                        {{--</a>--}}
                    </div>
                    <div class="team-member__descr">
                        <div class="team-member__name h3">Зои</div>
                        <div class="team-member__position">Менеджер курса</div>
                        <div class="team-member__subtitle">Жизненное кредо</div>
                        <div class="team-member__text">
                            <p>Что и как я делаю сегодня важно, потому что я меняю на это день своей жизни</p>
                        </div>
                        <div class="team-member__subtitle">Главный принцип</div>
                        <div class="team-member__text">
                            <p>Опираться на себя и думать о других – это приятнее, чем опираться на других и думать о себе</p>
                        </div>
                        <div class="team-member__subtitle">Любит - Ценит - Стремится</div>
                        <div class="team-member__text">
                            <p>Воду, хлеб и оливки – Честность, юмор и интеллект – Становиться лучше</p>
                        </div>
                        <div class="team-member__info-group">
                            <div class="team-member__info member-info">
                                <div class="member-info__title">1997</div>
                                <div class="member-info__text">Год начала <br>практики</div>
                            </div>
                            <div class="team-member__info member-info">
                                <div class="member-info__title">20</div>
                                <div class="member-info__text">Ретритов <br>пройдено</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team__item team-member">
                    <div class="team-member__left">
                        <div class="team-member__photo-wrap">
                            <div class="team-member__photo">
                                @agent('mobile')<img src="/assets/img/Kostik_300.png" alt="image">@else<img src="/assets/img/Kostik_600.png" alt="image">@endagent
                            </div>
                            <div class="team-member__video">
                                <div class="team-member__video-img"><img src="/assets/img/video-preview.png" alt="image"></div>
                                <div class="team-member__icon-circles icon-circles animation">
                                    <a class="team-member__icon-play icon-play" href="#video-team" data-fancybox>
                                        <svg class="icon icon-play ">
                                            <use xlink:href="/assets/img/spritesvg.svg#play"></use>
                                        </svg>
                                    </a>
                                    <a class="team-member__icon-play icon-play icon-play--mob" href="#video-team-mob" data-fancybox>
                                        <svg class="icon icon-play ">
                                            <use xlink:href="/assets/img/spritesvg.svg#play"></use>
                                        </svg>
                                    </a>
                                </div>
                                <div class="team-member__video-title">Видео <br>про нас</div>
                            </div>
                        </div>
                        {{--<a class="team-member__link page-link page-link--gray" href="javascript:void(0);">Мой блог--}}
                            {{--<svg class="icon icon-arrow ">--}}
                                {{--<use xlink:href="/assets/img/spritesvg.svg#arrow"></use>--}}
                            {{--</svg>--}}
                        {{--</a>--}}
                    </div>
                    <div class="team-member__descr">
                        <div class="team-member__name h3">Костя</div>
                        <div class="team-member__position">Куратор курса</div>
                        <div class="team-member__subtitle">Главный принцип</div>
                        <div class="team-member__text">
                            <p>Все временно: Вселенная, наша жизнь и любые трудности</p>
                        </div>
                        <div class="team-member__subtitle">Жизненное кредо</div>
                        <div class="team-member__text">
                            <p>Будьте добрее к себе и другим, когда это возможно. А это возможно всегда.</p>
                        </div>
                        <div class="team-member__subtitle">Увлечение</div>
                        <div class="team-member__text">
                            <p>Автоматизация и программирование, фотография, наука и технологии, трекинги</p>
                        </div>
                        <div class="team-member__info-group">
                            <div class="team-member__info member-info">
                                <div class="member-info__title">1997</div>
                                <div class="member-info__text">Год начала <br>практики</div>
                            </div>
                            <div class="team-member__info member-info">
                                <div class="member-info__title">20</div>
                                <div class="member-info__text">Ретритов <br>пройдено</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team__item team-member">
                    <div class="team-member__left">
                        <div class="team-member__photo-wrap">
                            <div class="team-member__photo">
                                @agent('mobile')<img src="/assets/img/Shura_300.png" alt="image">@else<img src="/assets/img/Shura_600.png" alt="image">@endagent
                            </div>
                            <div class="team-member__video">
                                <div class="team-member__video-img"><img src="/assets/img/video-preview.png" alt="image"></div>
                                <div class="team-member__icon-circles icon-circles animation">
                                    <a class="team-member__icon-play icon-play" href="#video-team" data-fancybox>
                                        <svg class="icon icon-play ">
                                            <use xlink:href="/assets/img/spritesvg.svg#play"></use>
                                        </svg>
                                    </a>
                                    <a class="team-member__icon-play icon-play icon-play--mob" href="#video-team-mob" data-fancybox>
                                        <svg class="icon icon-play ">
                                            <use xlink:href="/assets/img/spritesvg.svg#play"></use>
                                        </svg>
                                    </a>
                                </div>
                                <div class="team-member__video-title">Видео <br>про нас</div>
                            </div>
                        </div>
                        {{--<a class="team-member__link page-link page-link--gray" href="javascript:void(0);">Мой блог--}}
                            {{--<svg class="icon icon-arrow ">--}}
                                {{--<use xlink:href="/assets/img/spritesvg.svg#arrow"></use>--}}
                            {{--</svg>--}}
                        {{--</a>--}}
                    </div>
                    <div class="team-member__descr">
                        <div class="team-member__name h3">Шура</div>
                        <div class="team-member__position">Куратор курса</div>
                        <div class="team-member__subtitle">Жизненное кредо</div>
                        <div class="team-member__text">
                            <p>И здесь найдется что-то прекрасное!</p>
                        </div>
                        <div class="team-member__subtitle">Идеальное путешествие</div>
                        <div class="team-member__text">
                            <p>Дикий лес, палатка, море</p>
                        </div>
                        <div class="team-member__subtitle">Увлечение</div>
                        <div class="team-member__text">
                            <p>Йога разминки, путешествия, велопрогулки, конные прогулки</p>
                        </div>
                        <div class="team-member__info-group">
                            <div class="team-member__info member-info">
                                <div class="member-info__title">1997</div>
                                <div class="member-info__text">Год начала <br>практики</div>
                            </div>
                            <div class="team-member__info member-info">
                                <div class="member-info__title">20</div>
                                <div class="member-info__text">Ретритов <br>пройдено</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team__item team-member">
                    <div class="team-member__left">
                        <div class="team-member__photo-wrap">
                            <div class="team-member__photo">
                                @agent('mobile')<img src="/assets/img/Serg_300.png" alt="image">@else<img src="/assets/img/Serg_600.png" alt="image">@endagent
                            </div>
                            <div class="team-member__video">
                                <div class="team-member__video-img"><img src="/assets/img/video-preview.png" alt="image"></div>
                                <div class="team-member__icon-circles icon-circles animation">
                                    <a class="team-member__icon-play icon-play" href="#video-team" data-fancybox>
                                        <svg class="icon icon-play ">
                                            <use xlink:href="/assets/img/spritesvg.svg#play"></use>
                                        </svg>
                                    </a>
                                    <a class="team-member__icon-play icon-play icon-play--mob" href="#video-team-mob" data-fancybox>
                                        <svg class="icon icon-play ">
                                            <use xlink:href="/assets/img/spritesvg.svg#play"></use>
                                        </svg>
                                    </a>
                                </div>
                                <div class="team-member__video-title">Видео <br>про нас</div>
                            </div>
                        </div>
                        {{--<a class="team-member__link page-link page-link--gray" href="javascript:void(0);">Мой блог--}}
                            {{--<svg class="icon icon-arrow ">--}}
                                {{--<use xlink:href="/assets/img/spritesvg.svg#arrow"></use>--}}
                            {{--</svg>--}}
                        {{--</a>--}}
                    </div>
                    <div class="team-member__descr">
                        <div class="team-member__name h3">Сергей</div>
                        <div class="team-member__position">Куратор курса</div>
                        <div class="team-member__subtitle">Что бесит</div>
                        <div class="team-member__text">
                            <p>Терпеть не могу опаздывать, а также ненавижу автомобильные пробки</p>
                        </div>
                        <div class="team-member__subtitle">Идеальное путешествие</div>
                        <div class="team-member__text">
                            <p>В хорошей компании</p>
                        </div>
                        <div class="team-member__subtitle">Любимый герой</div>
                        <div class="team-member__text">
                            <p>Барон Мюнхгаузен в исполнении О. Янковского и Утилизатор из "Револьвера"</p>
                        </div>
                        <div class="team-member__info-group">
                            <div class="team-member__info member-info">
                                <div class="member-info__title">1997</div>
                                <div class="member-info__text">Год начала <br>практики</div>
                            </div>
                            <div class="team-member__info member-info">
                                <div class="member-info__title">20</div>
                                <div class="member-info__text">Ретритов <br>пройдено</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team__item team-member">
                    <div class="team-member__left">
                        <div class="team-member__photo-wrap">
                            <div class="team-member__photo">
                                @agent('mobile')<img src="/assets/img/Tanya_300.png" alt="image">@else<img src="/assets/img/Tanya_600.png" alt="image">@endagent
                            </div>
                            <div class="team-member__video">
                                <div class="team-member__video-img"><img src="/assets/img/video-preview.png" alt="image"></div>
                                <div class="team-member__icon-circles icon-circles animation">
                                    <a class="team-member__icon-play icon-play" href="#video-team" data-fancybox>
                                        <svg class="icon icon-play ">
                                            <use xlink:href="/assets/img/spritesvg.svg#play"></use>
                                        </svg>
                                    </a>
                                    <a class="team-member__icon-play icon-play icon-play--mob" href="#video-team-mob" data-fancybox>
                                        <svg class="icon icon-play ">
                                            <use xlink:href="/assets/img/spritesvg.svg#play"></use>
                                        </svg>
                                    </a>
                                </div>
                                <div class="team-member__video-title">Видео <br>про нас</div>
                            </div>
                        </div>
                        {{--<a class="team-member__link page-link page-link--gray" href="javascript:void(0);">Мой блог--}}
                            {{--<svg class="icon icon-arrow ">--}}
                                {{--<use xlink:href="/assets/img/spritesvg.svg#arrow"></use>--}}
                            {{--</svg>--}}
                        {{--</a>--}}
                    </div>
                    <div class="team-member__descr">
                        <div class="team-member__name h3">Таня</div>
                        <div class="team-member__position">Куратор курса</div>
                        <div class="team-member__subtitle">Жизненное кредо</div>
                        <div class="team-member__text">
                            <p>Что и как я делаю сегодня важно, потому что я меняю на это день своей жизни</p>
                        </div>
                        <div class="team-member__subtitle">Любит – Ценит – Стремится</div>
                        <div class="team-member__text">
                            <p>Улыбка и стремление любить помогают</p>
                        </div>
                        <div class="team-member__info-group">
                            <div class="team-member__info member-info">
                                <div class="member-info__title">1997</div>
                                <div class="member-info__text">Год начала <br>практики</div>
                            </div>
                            <div class="team-member__info member-info">
                                <div class="member-info__title">20</div>
                                <div class="member-info__text">Ретритов <br>пройдено</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@if($comments)

<section class="section section--white" id="reviews">
    <div class="section__wrap">
        <div class="wave wave--reviews"></div>
    </div>
    <div class="container">
        <h2 class="section__title section__title--nav h2">Отзывы участников</h2>
        <div class="reviews">
            <div class="reviews__items owl-carousel js-reviews-slider">
                    @foreach($comments as $comment)
                <div class="reviews__item item-review">
                    <div class="item-review__avatar"><img src="{{$comment->participant->avatar}}" alt="avatar"></div>
                    <div class="item-review__info">
                        <div class="item-review__name h5">{{$comment->participant->name}}</div>
                        <div class="item-review__date">{{$comment->created_at->isoFormat('DD MMMM, YYYY')}}</div>
                        <div class="item-review__text">
                            <p>{{ \Illuminate\Support\Str::words($comment->body ,30) }}</p>
                        </div>
                        <a class="item-review__link page-link page-link--gray" href="{{route('reviews')}}">Показать больше
                            <svg class="icon icon-arrow ">
                                <use xlink:href="/assets/img/spritesvg.svg#arrow"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </div>
</section>
@endif
<section class="section bg-blue-green bg-blue-green--center">
    <div class="container">
        <div class="enroll">
            <h2 class="enroll__title h2">Запишитесь <br>на курс</h2>
            <div class="enroll__btn-wrap btn-wrap">
                <div class="btn-wrap__big-circles big-circles animation"></div>
                <a class="enroll__btn btn {{ Auth::guard('participant')->check() ? 'js-profile' : 'js-registration' }}" href="javascript:void(0);"><span>{{Auth::guard('participant')->check() ? 'Перейти в профиль' : 'Записаться'}}</span></a>
            </div>
            <div class="enroll__big-circles big-circles">
                <div class="big-circle__icon-dots icon-dots">
                    <div class="big-circle__icon-circles icon-circles"></div>
                    <div class="big-circle__line lines"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-green-red-yellow">
    <div class="wave wave--result"></div>
    <div class="result">
        <div class="container container--padding-mob">
            <h2 class="result__title h2">К нам приходят<br>такими</h2>
            <div class="result__item item-result">
                <div class="item-result__photo-wrap">
                    <div class="item-result__animation">
                        <video autoplay="autoplay" muted="muted" loop id="video-angry">
                            @agent('mobile')
                                <source src="/assets/video/Angry_girl_mob.mp4" type="video/mp4">
                            @else
                                <source src="/assets/video/Angry_girl.mp4" type="video/mp4">
                            @endagent
                        </video>
                    </div>
                </div>
                <div class="item-result__descr">
                    <div class="item-result__text">
                        <ul class="item-result__list list">
                            <li>Стало сложно вставать по утрам. На работе - апатия и подавленность.</li>
                            <li>Вечером хватает сил только на то, чтобы поужинать, потупить в фейсбуке и вырубиться… </li>
                            <li>Постоянно раздражаюсь по пустякам. Прямо все бесит! Часто срываюсь на близких, а потом жалею.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section--white">
    <div class="container">
        <h2 class="section__title h2">Воздействие упражнений курса</h2>
        <div class="advantages">
            <div class="advantages__items">
                <div class="advantagess__item item-advantages">
                    <div class="item-advantages__icon-dots icon-dots">
                        <div class="item-advantages__icon-circles icon-circles">
                            <svg class="icon icon-decor-3 ">
                                <use xlink:href="/assets/img/spritesvg.svg#decor-3"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="item-advantages__group">
                        <h5 class="item-advantages__title h5 h5--green">Эффективность</h5>
                        <div class="item-advantages__text">
                            <p>Медитация активизирует процессы <b>торможения и возбуждения коры мозга </b>— вы сможете быстрее восстанавливаться и эффективнее решать задачи. За счет тренировки ума усиливается способность концентрироваться на задаче.</p>
                        </div>
                    </div>
                </div>
                <div class="advantagess__item item-advantages">
                    <div class="item-advantages__icon-dots icon-dots">
                        <div class="item-advantages__icon-circles icon-circles">
                            <svg class="icon icon-decor-4 ">
                                <use xlink:href="/assets/img/spritesvg.svg#decor-4"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="item-advantages__group">
                        <h5 class="item-advantages__title h5 h5--green">Контроль эмоций</h5>
                        <div class="item-advantages__text">
                            <p>Медитация меняет наши нейронные связи – ослабляет влияние одних нейронных цепочек и активизирует другие. Это свойство мозга называется <b>нейропластичность. </b>Мы забываем наше прежнее “я” и становимся другими людьми, а вернее, собой.</p>
                        </div>
                    </div>
                </div>
                <div class="advantagess__item item-advantages">
                    <div class="item-advantages__icon-dots icon-dots">
                        <div class="item-advantages__icon-circles icon-circles">
                            <svg class="icon icon-decor-15 ">
                                <use xlink:href="/assets/img/spritesvg.svg#decor-15"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="item-advantages__group">
                        <h5 class="item-advantages__title h5 h5--green">Больше позитива!</h5>
                        <div class="item-advantages__text">
                            <p>Наше прошлое определяет наше будущее. Медитация – способ стереть наше прошлое. Так мы возвращаем себе потерянную в прошлом <b>жизненную силу, </b>освобождаемся от шаблонов, которые не позволяют нам быть просто собой.</p>
                        </div>
                    </div>
                </div>
                <div class="advantagess__item item-advantages">
                    <div class="item-advantages__icon-dots icon-dots">
                        <div class="item-advantages__icon-circles icon-circles">
                            <svg class="icon icon-decor-2 ">
                                <use xlink:href="/assets/img/spritesvg.svg#decor-2"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="item-advantages__group">
                        <h5 class="item-advantages__title h5 h5--green">Духовный рост</h5>
                        <div class="item-advantages__text">
                            <p> <b>Медитация – инструмент воспитания </b>ума. Это отказ от соблазнов и деструкции, это направление к высокой осознанности, это умение ценить то, что есть. Познайте всю Вселенную через познание своего “я”.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section bg-green-red-yellow">
    <div class="wave wave--result"></div>
    <div class="result">
        <div class="container container--padding-mob">
            <h2 class="result__title h2">А через неделю...</h2>
            <div class="result__item item-result item-result--reverse">
                <div class="item-result__photo-wrap">
                    <div class="item-result__animation">
                        <video autoplay="autoplay" muted="muted" loop id="video-happy">
                            @agent('mobile')
                                <source src="/assets/video/Happy_girl_mob.mp4" type="video/mp4">
                            @else
                                <source src="/assets/video/Happy_girl.mp4" type="video/mp4">
                            @endagent
                        </video>
                    </div>
                </div>
                <div class="item-result__descr">
                    <div class="item-result__text">
                        <ul class="item-result__list list">
                            <li>Стала более дисциплинирована и собрана, теперь рабочий день проходит более плодотворно</li>
                            <li>Раздражение уменьшилось, а радости стало больше. Близкие заметили это!</li>
                            <li>Из обид выхожу быстрее благодаря умению сосредоточиться на внутреннем пространстве.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <a class="result__btn page-link js-result" href="javascript:void(0);">Хочу такой результат
                <svg class="icon icon-arrow ">
                    <use xlink:href="/assets/img/spritesvg.svg#arrow"></use>
                </svg>
            </a>
            <div class="result__hidden result__hidden--center js-result-hidden">
                <div class="result__title h5">Вы знаете, что нужно делать!</div><a class="result__btn btn {{ Auth::guard('participant')->check() ? '' : 'js-registration' }}"  href="{{ Auth::guard('participant')->check() ? '/messages' : 'js-javascript:void(0);' }}"> <span>{{Auth::guard('participant')->check() ? 'Перейти к курсу' : 'Записаться'}}</span></a>
            </div>
        </div>
    </div>
</section>

<section class="section section--white" id="interview">
    <div class="section__wrap">
        <div class="wave wave--interview"></div>
    </div>
    <div class="container">
        <h2 class="section__title section__title--top h2">Интервью <br>с выпускниками</h2>
        <div class="interview">
            <div class="interview__items owl-carousel js-interview-slider">
                <div class="interview__item item-interview">
                    <div class="item-interview__img">
                        @agent('mobile')<img src="/assets/img/interviews/Sasha_200.png" alt="photo">@else<img src="/assets/img/interviews/Sasha_360.png" alt="photo">@endagent
                    </div>
                    <div class="item-interview__info">
                        <div class="item-interview__position page-link">Программист</div>
                        <div class="item-interview__name h3">Саша, 30 лет</div>
                        <div class="item-interview__text">
                            <p>В какой-то момент я опешил от мысли, что все необходимое для жизни у меня уже есть. Я не понимал, что дальше делать, куда идти… А главное – зачем? Курс дал инструменты настройки своего внутреннего состояния. Мне стало доступно чуть больше радости, спокойствия и понимания, что выход есть!</p>
                        </div>
                        <a class="item-interview__btn secondary-btn" href="{{ route('interviews') }}#sasha"><span>Читать полностью</span></a>
                    </div>
                </div>
                <div class="interview__item item-interview">
                    <div class="item-interview__img">
                        @agent('mobile')<img src="/assets/img/interviews/Igor_200.png" alt="photo">@else<img src="/assets/img/interviews/Igor_360.png" alt="photo">@endagent
                    </div>
                    <div class="item-interview__info">
                        <div class="item-interview__position page-link">PR-специалист</div>
                        <div class="item-interview__name h3">Игорь, 36 лет</div>
                        <div class="item-interview__text">
                            <p>Медитировать для меня – это способ вырваться из насыщенной событиями жизни. В результате курса я получил практический опыт простых, но эффективных упражнений по занятию медитацией, которые стараюсь делать каждый день. Можно сказать, я получил полезную привычку медитировать.</p>
                        </div>
                        <a class="item-interview__btn secondary-btn" href="{{ route('interviews') }}#igor"><span>Читать полностью</span></a>
                    </div>
                </div>
                <div class="interview__item item-interview">
                    <div class="item-interview__img">
                        @agent('mobile')<img src="/assets/img/interviews/Natasha_200.png" alt="photo">@else<img src="/assets/img/interviews/Natasha_360.png" alt="photo">@endagent
                    </div>
                    <div class="item-interview__info">
                        <div class="item-interview__position page-link">Менеджер по контекстной рекламе</div>
                        <div class="item-interview__name h3">Наташа, 28 лет</div>
                        <div class="item-interview__text">
                            <p>Я занималась йогой и интересовалась улучшением концентрации внимания, усилением осознанности, тренировкой воли. Медитация казалась органичным продолжением практики, когда йога будто бы исчерпала себя.</p>
                        </div>
                        <a class="item-interview__btn secondary-btn" href="{{ route('interviews') }}#natasha"><span>Читать полностью</span></a>
                    </div>
                </div>
                <div class="interview__item item-interview">
                    <div class="item-interview__img">
                        @agent('mobile')<img src="/assets/img/interviews/Max_200.png" alt="photo">@else<img src="/assets/img/interviews/Max_360.png" alt="photo">@endagent
                    </div>
                    <div class="item-interview__info">
                        <div class="item-interview__position page-link">Управление недвижимостью</div>
                        <div class="item-interview__name h3">Максим, 39 лет</div>
                        <div class="item-interview__text">
                            <p>Медитация для меня стала путём к освобождению от колеса обыденности. Сначала это был шаг в неизвестность, затем упорный труд над собой, своими привычками, убеждениями и правилами. Всё это стало сливаться с единым полем, где нет ни правил, ни программ, описывающих чётко мое "Я".</p>
                        </div>
                        <a class="item-interview__btn secondary-btn" href="{{ route('interviews') }}#max"><span>Читать полностью</span></a>
                    </div>
                </div>
                <div class="interview__item item-interview">
                    <div class="item-interview__img">
                        @agent('mobile')<img src="/assets/img/interviews/Irina_200.png" alt="photo">@else<img src="/assets/img/interviews/Irina_360.png" alt="photo">@endagent
                    </div>
                    <div class="item-interview__info">
                        <div class="item-interview__position page-link">Инженер</div>
                        <div class="item-interview__name h3">Ирина, 37 лет</div>
                        <div class="item-interview__text">
                            <p>Мой трудовой день очень насыщенный и эмоционально, и интеллектуально, связан с решением многих задач в кратчайшие сроки. В какой-то момент я поняла, что не справляюсь, что я истощена и от перегруза стала раздражительной, нервной, настроение плохое. Я решила попробовать медитацию.</p>
                        </div>
                        <a class="item-interview__btn secondary-btn" href="{{ route('interviews') }}#irina"><span>Читать полностью</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container container--narrow">
        <div class="wave-subscribe"></div>
        <div class="subscribe">
            <h2 class="subscribe__title h2">Дайджест блога <br>кураторов</h2>
            <div class="subscribe__text">У нас происходит много интересного. <br>Будем рады быть полезными для вас. </div>
            <form class="subscribe__form js-valid js-subscribe" data-subscribe-url="{{route('subscribe')}}">
                <div class="subscribe__field">
                    <input class="subscribe__input" id="email-subscribe" type="email" name="email" required>
                    <div class="subscribe__field-label">Ваш e-mail</div>
                </div>
                <div class="subscribe__btn-wrap btn-wrap">
                    <div class="btn-wrap__big-circles big-circles animation"></div>
                    <button class="btn-wrap__btn btn"><span>Подписаться</span></button>
                </div>
            </form>
        </div>
    </div>
</section>

@agent('mobile')
    <video id="video-team-mob" width="1920" height="1080" controls="" style="display:none;">
        <source src="/assets/video/7steps_Curators_mob.mp4" type="video/mp4">
    </video>
@else
    <video id="video-team" width="1920" height="1080" controls="" style="display:none;">
        <source src="/assets/video/7steps_Curators_desk.mp4" type="video/mp4">
    </video>
@endagent
@endsection
