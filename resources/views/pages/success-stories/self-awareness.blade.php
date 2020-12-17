@extends('layouts.master')

@section('title', 'Истории успеха участников - духовный рост | ' . config('app.name'))
@section('description', 'Отзывы выпускников курса ' . config('app.name') . ' о том, как практика медитации помогла получить инсайты для дальнейшего личностного роста, сделать шаги в духовном развитии.')
@section('keywords', 'практика осознанности, техники духовного развития, личностный рост')
@section('class', 'bg-blue-green-repeat')

@section('content')
<div class="container container--narrow">
    <ul class="breadcrumbs">
        <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="{{ route('home') }}">Главная</a></li>
        <li class="breadcrumbs__item"><span class="breadcrumbs__text">Истории успеха: духовный рост</span></li>
    </ul>
    <h1 class="h2">Участники курса о повышении осознанности и <br>инсайтах для саморазвития</h1>
</div>

<div class="container container--wide">
    <div class="reviews">
        <div class="reviews__items">
            <div class="reviews__item item-review item-review--bg">
                <div class="item-review__avatar"><img src="/assets/img/avatar-10.svg" alt="avatar"></div>
                <div class="item-review__info">
                    <div class="item-review__name h5">Константин7steps</div>
                    <div class="item-review__date"></div>
                    <div class="item-review__text">
                        <p>Благодарю вас за новый для меня опыт и полезные навыки! Конечно не всё получилось , но многое из того, что искал. Как всегда, при познании нового, у меня возникает ещё больше вопросов, ещё интереснее жить! Ваше дело, считаю, правильное и природосообразное! Не просите обмена, просто делаете лучшее что можете. Молодцы!</p>
                    </div>
                </div>
            </div>

            <div class="reviews__item item-review item-review--bg">
                <div class="item-review__avatar"><img src="/assets/img/avatar-6.svg" alt="avatar"></div>
                <div class="item-review__info">
                    <div class="item-review__name h5">Нюмба</div>
                    <div class="item-review__date"></div>
                    <div class="item-review__text">
                        <p>Спасибо огромное за техники, моя жизнь реально изменилась. Каждый день нахожу по 10 минут чтоб медитировать, какие-то изменения в сознании происходят каждый день! Спасибо огромное за все!!!</p>
                    </div>
                </div>
            </div>

            <div class="reviews__item item-review item-review--bg">
                <div class="item-review__avatar"><img src="/assets/img/avatar-14.svg" alt="avatar"></div>
                <div class="item-review__info">
                    <div class="item-review__name h5">Людмила</div>
                    <div class="item-review__date"></div>
                    <div class="item-review__text">
                        <p>Пришло понимание того, что нужно уже заняться собой, своими мыслями... буду дальше продолжать медитировать., так как приехать на ретрит не смогу, хотела бы хоть иногда получать от вас поддержку!</p>
                        <p>Спасибо за всё!</p>
                    </div>
                </div>
            </div>

            <div class="reviews__item item-review item-review--bg">
                <div class="item-review__avatar"><img src="/assets/img/avatar-20.svg" alt="avatar"></div>
                <div class="item-review__info">
                    <div class="item-review__name h5">Б.Светлана</div>
                    <div class="item-review__date"></div>
                    <div class="item-review__text">
                        <p>Курс очень Понравился. Были предложены практические приёмы расслабления, фокусирования внимания, и сохранение осознанности. Приёмы со счётом и дыханием, концентрация на руки или на ноги, блиц-медитации - просто супер, лайфхаки в нашей жизни. Я их уже применяю в течения дня и замечаю повышение осознанности в разных делах. Благодарю за этот курс, он помог мне продвинуться в практике медитации. Практикую с удовольствием и утром и вечером 15-20мин.</p>
                    </div>
                </div>
            </div>

            <div class="reviews__item item-review item-review--bg">
                <div class="item-review__avatar"><img src="/assets/img/avatar-22.svg" alt="avatar"></div>
                <div class="item-review__info">
                    <div class="item-review__name h5">Аня</div>
                    <div class="item-review__date"></div>
                    <div class="item-review__text">
                        <p>За время медитации заметила как прошло желание часто есть, до этого была какая-то ненасытность. Больше предпочитаю есть фрукты и овощи, пить простой сок на утро а не кофе. Благодарю Вас за изменения. Не хочу потерять это чувство и желание медитировать! Всего Вам хорошего?</p>
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
