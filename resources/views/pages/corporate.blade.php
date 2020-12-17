@extends('layouts.master')

@section('title', 'Корпоративный курс медитации | ' . config('app.name'))
@section('description', 'Корпоративный курс обучения практике майндфулнесс. Формирование экологии психического поля компании через управление личностным ростом и благополучием сотрудников. Создание бесконфликтной среды, повышение эффективности персонала.')
@section('keywords', 'корпоративная медитация, практика осознанности в офисе, майндфулнесс, well-being, эмпатия')
@section('class', 'bg-green-red-yellow bg-green-red-yellow--top')

@section('content')
<div class="container container--narrow">
    <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
            <a class="breadcrumbs__link" href="{{ route('home') }}">Главная</a>
        </li>
        <li class="breadcrumbs__item">
            <span class="breadcrumbs__text">Корпоративным клиентам</span>
        </li>
    </ul>
    <h1 class="h2">Корпоративным <br>клиентам</h1>
</div>

<div class="container container--narrow">
    <div class="dashes"></div>
    <div class="about">
        <div class="circle-line-light"></div>
        <div class="about__top">
            <div class="decor decor--line-3"></div>
            <h3 class="about__title h3">Мы знаем ваши потребности</h3>
            <div class="about__text">
                <p>Мы, авторы курса, — менеджеры крупных международных компаний. Мы видим, как трансформируется бизнес с десятилетиями, мы знаем потребности бизнеса будущего.</p>
                <p>Наш корпоративный курс включает в себя как программу личностного роста каждого сотрудника, так и элементы восстановления экологии психического поля компании.</p>
                <p>Некоторые упражнения выполняются прямо в течение рабочего дня, в ординарном общении с коллегами, руководством, подчиненными.</p>
                <p>Крайне желательно, чтобы в курсе участвовал топ-менеджмент компании.</p>
            </div>
        </div>
        <div class="about__big-circles big-circles">
            <div class="big-circle__icon-dots icon-dots">
                <div class="big-circle__icon-circles icon-circles"></div>
                <div class="big-circle__line lines lines--reverse"></div>
            </div>
        </div>
    </div>
</div>

<section class="section section--white">
    <div class="container container--narrow">
        <h2 class="section__title h2">Мы спешим <br>на помощь</h2>
        <ul class="help">
            <li class="help__item">Повышение психической устойчивости сотрудников</li>
            <li class="help__item">Снижение напряженности в отношениях между коллегами</li>
            <li class="help__item">Повышение личной эмпатии и жизнерадостности </li>
            <li class="help__item">Высвобождение потенциала для решения рабочих задач</li>
            <li class="help__item">Осознанное поведение на уровне понимания причин и последствий своих поступков</li>
            <li class="help__item">Раскрытие лидерского и организационного потенциалов</li>
        </ul>
    </div>
</section>

<section class="section bg-blue-green-repeat">
    <div class="container container--narrow">
        <h2 class="section__title h2">Мы <br>предлагаем</h2>
        <div class="offers">
            <ul class="offers__list number-list">
                <li class="number-list__item">
                    <div class="number-list__number number-circle animation">01</div>
                    <div class="number-list__text">Вводную и заключительную лекции с выездом нашего сотрудника в ваш офис </div>
                </li>
                <li class="number-list__item">
                    <div class="number-list__number number-circle animation">02</div>
                    <div class="number-list__text">Программа, продолжительностью 4 недели, три упражнения каждую неделю</div>
                </li>
                <li class="number-list__item">
                    <div class="number-list__number number-circle animation">03</div>
                    <div class="number-list__text">Обособленное закрытое рабочее пространство курса, полную анонимность для сотрудников</div>
                </li>
                <li class="number-list__item">
                    <div class="number-list__number number-circle animation">04</div>
                    <div class="number-list__text">Квалифицированных кураторов с опытом преподавания и медитации более 6 лет</div>
                </li>
                <li class="number-list__item">
                    <div class="number-list__number number-circle animation">05</div>
                    <div class="number-list__text">Индивидуальное сопровождение в нашем чате: проверка отчетов, обсуждение результатов заданий, консультации</div>
                </li>
            </ul>
            <div class="offers__big-circles big-circles">
                <div class="big-circle__icon-dots icon-dots">
                    <div class="big-circle__icon-circles icon-circles"></div>
                    <div class="big-circle__line long-line"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section--white">
    <div class="container container--narrow">
        <div class="cost">
            <div class="circle-lines"></div>
            <div class="cost__left">
                <h3 class="cost__title h3">Стоимость услуг</h3>
                <div class="cost__items">
                    <div class="cost__item item-cost">
                        <div class="item-cost__title">80<span>тыс. руб.</span></div>
                        <div class="item-cost__text">фиксированная часть</div>
                    </div>
                    <div class="cost__item item-cost">
                        <div class="item-cost__title">+2<span>тыс. руб.</span></div>
                        <div class="item-cost__text">за каждого сотрудника</div>
                    </div>
                </div><a class="cost__btn btn js-call" href="javascript:void(0);"><span>обратный звонок</span></a>
            </div>
            <div class="cost__right">
                <div class="cost__team-member team-member team-member--small">
                    <div class="team-member__photo">
                        @agent('mobile')<img src="/assets/img/Ksenia_300.png" alt="photo">@else<img src="/assets/img/Ksenia_400.png" alt="photo">@endagent
                    </div>
                    <div class="team-member__descr">
                        <div class="team-member__name h5">Ксения Кабасевич</div>
                        <div class="team-member__position">Менеджер по работе <br>с корпоративными клиентами</div>
                        <div class="team-member__text">
                            <p>«Я практикую и преподаю йогу и медитацию более 10 лет. С удовольствием пообщаюсь, отвечу на вопросы, приеду в ваш офис, расскажу про медитацию и наш корпоративный курс».</p>
                        </div>
                        <a class="team-member__contact page-link page-link--gray" href="mailto:happy@meditationacademy.ru">happy@meditationacademy.ru</a>
                        <a class="team-member__contact page-link page-link--gray" href="tel:+79161673643">+7 916 167 36 43</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('popup')
<div class="popup js-popup js-popup-ajax" id="popup-callback">
    <a class="popup__close js-popup-close" href="javascript:void(0);">
        <svg class="icon icon-close">
            <use xlink:href="/assets/img/spritesvg.svg#close"></use>
        </svg>
    </a>
    <div class="popup__title h3">Контактная информация</div>
    <form action="{{ route('corporate.callback') }}" method="POST" class="popup__form form">
        <div class="form__group">
            <div class="form__field field">
                <input class="field__input" type="text" name="name" maxlength="128">
                <div class="field__label">Как вас зовут</div>
            </div>
            <div class="form__field field">
                <input class="field__input" type="text" name="company" maxlength="128">
                <div class="field__label">Название компании</div>
            </div>
            <div class="form__field field">
                <input class="field__input" type="text" name="tel" maxlength="14">
                <div class="field__label">Номер телефона</div>
            </div>
            <div class="form__field field">
                <input class="field__input" type="text" name="email" maxlength="128">
                <div class="field__label">E-mail</div>
            </div>
        </div>
        <button type="submit" class="form__btn btn"> <span>Отправить</span></button>
    </form>
</div>
@endsection
