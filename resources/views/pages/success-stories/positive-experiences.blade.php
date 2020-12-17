@extends('layouts.master')

@section('title', 'Истории успеха участников - жизнь в позитиве | ' . config('app.name'))
@section('description', 'Отзывы выпускников курса ' . config('app.name') . ' о том, как практика медитации помогла повысить самооценку, стать увереннее, энергичнее,  изменить взгляд на мир и стать позитивнее.')
@section('keywords', 'как повысить самооценку, как повысить уверенность в себе, мыслим позитивно')
@section('class', 'bg-blue-green-repeat')

@section('content')
<div class="container container--narrow">
    <ul class="breadcrumbs">
        <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="{{ route('home') }}">Главная</a></li>
        <li class="breadcrumbs__item"><span class="breadcrumbs__text">Истории успеха: жизнь в позитиве</span></li>
    </ul>
    <h1 class="h2">Участники курса об улучшении настроения и <br>новых красках в жизни</h1>
</div>

<div class="container container--wide">
    <div class="reviews">
        <div class="reviews__items">
            <div class="reviews__item item-review item-review--bg">
                <div class="item-review__avatar"><img src="/assets/img/avatar-4.svg" alt="avatar"></div>
                <div class="item-review__info">
                    <div class="item-review__name h5">Ирина</div>
                    <div class="item-review__date"></div>
                    <div class="item-review__text">
                        <p>После медитации я чувствую себе особенно хорошо. И этот настрой - почти на весь день. Спасибо большое за уроки! Буду практиковаться дальше. Глядишь - и 25 минут высижу.</p>
                    </div>
                </div>
            </div>

            <div class="reviews__item item-review item-review--bg">
                <div class="item-review__avatar"><img src="/assets/img/avatar-8.svg" alt="avatar"></div>
                <div class="item-review__info">
                    <div class="item-review__name h5">Вейглер</div>
                    <div class="item-review__date"></div>
                    <div class="item-review__text">
                        <p>В конце медитации очень хорошо получилось сформировать внутри слова благодарности и нужных пожеланий себе и другим. Мне очень это понравилось.</p>
                        <p>Благодарю вас за эту возможность и желаю вам новых осознание и успехов на Пути!</p>
                    </div>
                </div>
            </div>

            <div class="reviews__item item-review item-review--bg">
                <div class="item-review__avatar"><img src="/assets/img/avatar-17.svg" alt="avatar"></div>
                <div class="item-review__info">
                    <div class="item-review__name h5">Gulya</div>
                    <div class="item-review__date"></div>
                    <div class="item-review__text">
                        <p>После упражнения "поплавок" с внутренней улыбкой в оставшие дни курса в течение дня удается вспоминать об улыбке и улыбаться. И все становиться как-то по другому, светлее, интереснее.</p>
                        <p>Спасибо всей вашей команде огромное за это курс!</p>
                        <p>Рада, что я наконец нашла время его проийти. Пояснения техник делали упражения понятными и выполнимыми. Мягкая поддержка Татьяны побуждала продолжать, а ее советы корректировать технику выполнения заданий.</p>
                        <p>Спасибо за материалы внизу страниц, они интерсные и дополняют курс полезной информацией.</p>
                    </div>
                </div>
            </div>

            <div class="reviews__item item-review item-review--bg">
                <div class="item-review__avatar"><img src="/assets/img/avatar-24.svg" alt="avatar"></div>
                <div class="item-review__info">
                    <div class="item-review__name h5">Светлана Аносова</div>
                    <div class="item-review__date"></div>
                    <div class="item-review__text">
                        <p>Добрый день.</p>
                        <p>За время этого курса каким- то необычным образом события в моей жизни и вокруг меня начали меняться. Стало интересней жить.</p>
                        <p>Буду и дальше практиковать медитации.</p>
                        <p>Спасибо Вам большое.</p>
                    </div>
                </div>
            </div>

            <div class="reviews__item item-review item-review--bg">
                <div class="item-review__avatar"><img src="/assets/img/avatar-1.svg" alt="avatar"></div>
                <div class="item-review__info">
                    <div class="item-review__name h5">Tatiana</div>
                    <div class="item-review__date"></div>
                    <div class="item-review__text">
                        <p>Спасибо Вам за волшебный курс, за поддержку на протяжении всего времени и за все положительные изменения благодаря урокам. Вы делаете этот мир лучше!:) Теперь мои дни стали более счастливыми и осознанными. Буду продолжать заниматься самостоятельно. Благодарю!</p>
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
