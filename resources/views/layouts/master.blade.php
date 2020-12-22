<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/assets/img/favicon.svg" type="image/svg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="theme-color" content="#28C48B">
    <link href="/assets/css/main.min.css?v6" rel="stylesheet">
</head>
<body>
<div class="page-wrap">
    <div class="page-content @yield('class')">
        <header class="header js-header">
            <div class="container container--wide">
                <div class="header__wrap">
                    <a class="header__logo" href="{{ route('home') }}">
                        <svg preserveAspectRatio="xMidYMid slice" viewBox="0 0 78 78" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.0723 64.1764L9.31454 74.7277H7.7733L12.464 64.5103H6.29907V63.3082H14.0723V64.1764ZM20.7733 72.524C20.7733 72.1233 20.6393 71.8562 20.3042 71.589C20.0362 71.3887 19.5001 71.1884 18.763 71.0548C18.0259 70.9212 17.4228 70.7209 17.0207 70.5206C16.6187 70.3202 16.2836 70.0531 16.0826 69.7192C15.8815 69.3853 15.7475 69.0514 15.7475 68.6507C15.7475 67.9829 16.0156 67.3819 16.6187 66.9144C17.2218 66.4469 17.9589 66.1798 18.897 66.1798C19.8352 66.1798 20.6393 66.4469 21.2424 66.9144C21.8455 67.3819 22.1135 68.0497 22.1135 68.7843H20.6393C20.6393 68.3836 20.4382 68.0497 20.1032 67.7825C19.7681 67.5154 19.3661 67.3819 18.83 67.3819C18.2939 67.3819 17.8919 67.5154 17.5568 67.7158C17.2888 67.9161 17.0877 68.25 17.0877 68.5839C17.0877 68.9178 17.2218 69.1849 17.4898 69.3853C17.7578 69.5856 18.2939 69.7192 18.964 69.9195C19.7011 70.0531 20.3042 70.2534 20.7063 70.5206C21.1754 70.7209 21.5104 70.988 21.7114 71.3219C21.9125 71.6558 22.0465 71.9897 22.0465 72.4572C22.0465 73.1918 21.7114 73.7928 21.1083 74.2603C20.5053 74.7277 19.7011 74.9281 18.763 74.9281C18.0929 74.9281 17.4898 74.7945 16.9537 74.5942C16.4176 74.3271 16.0156 73.9932 15.7475 73.5925C15.4795 73.1918 15.2785 72.7243 15.2785 72.1901H16.7527C16.7527 72.6575 16.9537 73.0582 17.3558 73.3253C17.6908 73.5925 18.2269 73.726 18.763 73.726C19.2991 73.726 19.7681 73.5925 20.1032 73.3921C20.6393 73.1918 20.7733 72.8579 20.7733 72.524ZM26.1341 64.2432V66.3134H27.7424V67.4486H26.1341V72.7243C26.1341 73.0582 26.2011 73.3253 26.3352 73.4589C26.4692 73.6593 26.7372 73.726 27.0723 73.726C27.2733 73.726 27.4743 73.726 27.7424 73.6593V74.8613C27.3403 74.9949 27.0053 74.9949 26.6032 74.9949C25.9331 74.9949 25.464 74.7945 25.129 74.3938C24.7939 73.9932 24.6599 73.4589 24.6599 72.7243V67.4486H23.1187V66.3134H24.6599V64.2432H26.1341ZM32.9022 74.9281C31.763 74.9281 30.8248 74.5274 30.0877 73.7928C29.3506 73.0582 29.0156 72.0565 29.0156 70.7877V70.5206C29.0156 69.6524 29.1496 68.9178 29.4846 68.25C29.8197 67.5822 30.2888 67.048 30.8248 66.714C31.4279 66.3134 32.031 66.1798 32.7011 66.1798C33.7733 66.1798 34.6444 66.5137 35.2475 67.2483C35.8506 67.9829 36.1857 68.9846 36.1857 70.387V70.988H30.4228C30.4228 71.7894 30.6908 72.524 31.1599 72.9914C31.629 73.5257 32.2321 73.7928 32.9692 73.7928C33.5053 73.7928 33.9073 73.6593 34.2424 73.4589C34.5774 73.2586 34.9125 72.9914 35.1805 72.6575L36.0516 73.3253C35.3815 74.3938 34.3094 74.9281 32.9022 74.9281ZM32.7681 67.3151C32.165 67.3151 31.696 67.5154 31.2939 67.9829C30.8919 68.3836 30.6238 68.9846 30.5568 69.786H34.8455V69.6524C34.7785 68.9178 34.5774 68.3168 34.2424 67.9161C33.8403 67.5154 33.3712 67.3151 32.7681 67.3151ZM45.098 70.5873C45.098 71.8562 44.83 72.9247 44.2269 73.726C43.6238 74.5274 42.8197 74.9281 41.8145 74.9281C40.8094 74.9281 40.0053 74.5942 39.4022 73.9264V78H37.9279V66.3134H39.2681L39.3352 67.2483C39.9382 66.5137 40.7424 66.1798 41.8145 66.1798C42.8197 66.1798 43.6238 66.5805 44.2269 67.3151C44.83 68.0497 45.098 69.1182 45.098 70.5206V70.5873ZM43.6238 70.4538C43.6238 69.5188 43.4228 68.7175 43.0207 68.1832C42.6187 67.649 42.0826 67.3819 41.3455 67.3819C40.4743 67.3819 39.8042 67.7825 39.3352 68.5171V72.5908C39.7372 73.3921 40.4073 73.726 41.3455 73.726C42.0156 73.726 42.6187 73.4589 43.0207 72.9247C43.4228 72.3236 43.6238 71.5223 43.6238 70.4538ZM51.8661 72.524C51.8661 72.1233 51.7321 71.8562 51.397 71.589C51.129 71.3887 50.5929 71.1884 49.8558 71.0548C49.1187 70.9212 48.5156 70.7209 48.1135 70.5206C47.7114 70.3202 47.3764 70.0531 47.1754 69.7192C46.9743 69.3853 46.8403 69.0514 46.8403 68.6507C46.8403 67.9829 47.1083 67.3819 47.7114 66.9144C48.3145 66.4469 49.0516 66.1798 49.9898 66.1798C50.9279 66.1798 51.7321 66.4469 52.3351 66.9144C52.9382 67.3819 53.2063 68.0497 53.2063 68.7843H51.7321C51.7321 68.3836 51.531 68.0497 51.196 67.7825C50.8609 67.5154 50.4589 67.3819 49.9228 67.3819C49.3867 67.3819 48.9846 67.5154 48.6496 67.7158C48.3815 67.9161 48.1805 68.25 48.1805 68.5839C48.1805 68.9178 48.3145 69.1849 48.5826 69.3853C48.8506 69.5856 49.3867 69.7192 50.0568 69.9195C50.7939 70.0531 51.397 70.2534 51.7991 70.5206C52.2681 70.7209 52.6032 70.988 52.8042 71.3219C53.0053 71.6558 53.1393 71.9897 53.1393 72.4572C53.1393 73.1918 52.8042 73.7928 52.2011 74.2603C51.598 74.7277 50.7939 74.9281 49.8558 74.9281C49.1857 74.9281 48.5826 74.7945 48.0465 74.5942C47.5104 74.3271 47.1083 73.9932 46.8403 73.5925C46.5723 73.1918 46.3712 72.7243 46.3712 72.1901H47.8455C47.8455 72.6575 48.0465 73.0582 48.4486 73.3253C48.7836 73.5925 49.3197 73.726 49.8558 73.726C50.3918 73.726 50.8609 73.5925 51.196 73.3921C51.7321 73.1918 51.8661 72.8579 51.8661 72.524ZM55.2836 73.9932C55.2836 73.726 55.3506 73.5257 55.4846 73.3921C55.6187 73.2586 55.8867 73.125 56.1547 73.125C56.4228 73.125 56.6908 73.1918 56.8248 73.3921C56.9589 73.5925 57.0259 73.7928 57.0259 73.9932C57.0259 74.2603 56.9589 74.4606 56.8248 74.5942C56.6908 74.7277 56.4228 74.8613 56.1547 74.8613C55.8867 74.8613 55.6187 74.7945 55.4846 74.5942C55.3506 74.4606 55.2836 74.2603 55.2836 73.9932ZM63.5929 67.5822C63.3918 67.5154 63.1238 67.5154 62.8558 67.5154C61.9176 67.5154 61.2475 67.9161 60.9125 68.7175V74.7277H59.4382V66.3134H60.8455V67.3151C61.3145 66.5805 61.9846 66.1798 62.8558 66.1798C63.1238 66.1798 63.3248 66.2466 63.5259 66.3134V67.5822H63.5929ZM70.1599 73.9264C69.6238 74.5942 68.7527 74.9281 67.6805 74.9281C66.7424 74.9281 66.0723 74.661 65.6032 74.1267C65.1341 73.5925 64.8661 72.8579 64.8661 71.7894V66.3134H66.3403V71.7894C66.3403 73.0582 66.8764 73.726 67.8815 73.726C69.0207 73.726 69.7578 73.3253 70.0929 72.524V66.3801H71.5671V74.8613H70.1599V73.9264Z"></path>
                            <path
                                d="M64.1289 39.3339C69.0876 36.9966 73.7784 33.9914 78 30.3185L70.8969 22.3048C66.9433 25.7774 62.5206 28.5154 57.7629 30.5188C51.933 21.1027 47.5773 10.8853 45.0309 0H32.9691C30.4227 10.8853 26.134 21.1027 20.2371 30.4521C15.4794 28.4486 11.0567 25.7106 7.10309 22.238L0 30.3185C4.22165 33.9914 8.91237 37.0634 13.8711 39.3339C10.7887 43.2072 7.43814 46.8134 3.81959 50.2192L11.1907 58.0325C16.1495 53.4247 20.5722 48.4161 24.5258 43.0736C29.2165 44.2757 34.1082 44.8767 39 44.8767C43.8918 44.8767 48.7835 44.2757 53.4742 43.0736C57.4278 48.4161 61.9175 53.3579 66.8093 58.0325L74.1804 50.2192C70.5619 46.8134 67.2113 43.2072 64.1289 39.3339ZM39 34.2586C36.2526 34.2586 33.5722 33.9914 30.8918 33.5908C34.0412 28.2483 36.7887 22.6387 39 16.8955C41.2113 22.7055 43.9588 28.3151 47.1082 33.5908C44.4278 33.9914 41.7474 34.2586 39 34.2586Z"></path>
                        </svg>
                    </a>
                    <div class="header__info">
                        <div class="header__menu-group js-mobile-nav">
                            <nav class="header__menu menu">
                                <ul class="menu__list">
                                    <li class="menu__item">
                                        <a class="menu__link" href="{{ route('about') }}">О проекте</a>
                                    </li>
                                    <li class="menu__item">
                                        <a class="menu__link" href="{{ route('corporate') }}">Корпоративным клиентам</a>
                                    </li>
                                    {{--<li class="menu__item">--}}
                                    {{--<a class="menu__link" href="javascript:void(0);">Блог кураторов</a>--}}
                                    {{--</li>--}}
                                </ul>
                            </nav>
                            <ul class="header__social social">
                                <li class="social__item">
                                    <a class="social__link" href="https://vk.com/meditationacademy_ru" target="_blank"
                                       title="vkontakte">
                                        <svg class="icon icon-vk">
                                            <use xlink:href="/assets/img/spritesvg.svg#vk"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="https://www.facebook.com/groups/meditationacademy"
                                       target="_blank" title="facebook">
                                        <svg class="icon icon-fb">
                                            <use xlink:href="/assets/img/spritesvg.svg#fb"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="https://www.instagram.com/meditationacademy"
                                       target="_blank" title="instagram">
                                        <svg class="icon icon-inst">
                                            <use xlink:href="/assets/img/spritesvg.svg#inst"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="https://t.me/meditator_life" target="_blank"
                                       title="telegram">
                                        <svg class="icon icon-teleg">
                                            <use xlink:href="/assets/img/spritesvg.svg#teleg"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>


                        @auth('participant')
                            <a class="header__user user" href="{{ route('messages.index') }}" title="Письма">
                                <div class="user__avatar-wrap">
                                    <div class="user__avatar">
                                        <svg class="icon icon-mail">
                                            <use xlink:href="/assets/img/spritesvg.svg#mail"></use>
                                        </svg>
                                    </div>
                                    @if (($newMessages = Auth::guard('participant')->user()->getNewMessages()) > 0)
                                        <span class="user__number">{{ $newMessages }}</span>
                                    @endif
                                </div>
                            </a>

                            <a class="header__user user js-profile" href="javascript:void(0);"
                               title="Редактировать профиль" style="margin-left: 0">
                                <div
                                    class="user__name user__name--green">{{ Auth::guard('participant')->user()->name }}</div>
                            </a>
                        @else
                        @canany([\App\Models\User::ABILITY_ADMIN, \App\Models\User::ABILITY_MANAGER, \App\Models\User::ABILITY_CURATOR])
                            <a class="header__link page-link" href="{{route('admin.dashboard')}}">Перейти в админ панель</a>
                        @else
                            <a class="header__link page-link js-registration" href="javascript:void(0);">Вход и регистрация</a>
                        @endcanany
                        @endauth

                        <a class="header__hamb hamb js-hamb"
                           href="javascript:void(0);"><span> </span><span></span><span></span></a>
                    </div>
                </div>
            </div>
        </header>
        <main class="main-content">
            @yield('content')
        </main>
        @yield('additional_content')
    </div>
    <footer class="footer">
        <div class="container container--wide">
            <div class="footer__wrap">
                <a class="footer__logo" href="{{ route('home') }}">
                    <svg preserveAspectRatio="xMidYMid slice" viewBox="0 0 78 78" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.0723 64.1764L9.31454 74.7277H7.7733L12.464 64.5103H6.29907V63.3082H14.0723V64.1764ZM20.7733 72.524C20.7733 72.1233 20.6393 71.8562 20.3042 71.589C20.0362 71.3887 19.5001 71.1884 18.763 71.0548C18.0259 70.9212 17.4228 70.7209 17.0207 70.5206C16.6187 70.3202 16.2836 70.0531 16.0826 69.7192C15.8815 69.3853 15.7475 69.0514 15.7475 68.6507C15.7475 67.9829 16.0156 67.3819 16.6187 66.9144C17.2218 66.4469 17.9589 66.1798 18.897 66.1798C19.8352 66.1798 20.6393 66.4469 21.2424 66.9144C21.8455 67.3819 22.1135 68.0497 22.1135 68.7843H20.6393C20.6393 68.3836 20.4382 68.0497 20.1032 67.7825C19.7681 67.5154 19.3661 67.3819 18.83 67.3819C18.2939 67.3819 17.8919 67.5154 17.5568 67.7158C17.2888 67.9161 17.0877 68.25 17.0877 68.5839C17.0877 68.9178 17.2218 69.1849 17.4898 69.3853C17.7578 69.5856 18.2939 69.7192 18.964 69.9195C19.7011 70.0531 20.3042 70.2534 20.7063 70.5206C21.1754 70.7209 21.5104 70.988 21.7114 71.3219C21.9125 71.6558 22.0465 71.9897 22.0465 72.4572C22.0465 73.1918 21.7114 73.7928 21.1083 74.2603C20.5053 74.7277 19.7011 74.9281 18.763 74.9281C18.0929 74.9281 17.4898 74.7945 16.9537 74.5942C16.4176 74.3271 16.0156 73.9932 15.7475 73.5925C15.4795 73.1918 15.2785 72.7243 15.2785 72.1901H16.7527C16.7527 72.6575 16.9537 73.0582 17.3558 73.3253C17.6908 73.5925 18.2269 73.726 18.763 73.726C19.2991 73.726 19.7681 73.5925 20.1032 73.3921C20.6393 73.1918 20.7733 72.8579 20.7733 72.524ZM26.1341 64.2432V66.3134H27.7424V67.4486H26.1341V72.7243C26.1341 73.0582 26.2011 73.3253 26.3352 73.4589C26.4692 73.6593 26.7372 73.726 27.0723 73.726C27.2733 73.726 27.4743 73.726 27.7424 73.6593V74.8613C27.3403 74.9949 27.0053 74.9949 26.6032 74.9949C25.9331 74.9949 25.464 74.7945 25.129 74.3938C24.7939 73.9932 24.6599 73.4589 24.6599 72.7243V67.4486H23.1187V66.3134H24.6599V64.2432H26.1341ZM32.9022 74.9281C31.763 74.9281 30.8248 74.5274 30.0877 73.7928C29.3506 73.0582 29.0156 72.0565 29.0156 70.7877V70.5206C29.0156 69.6524 29.1496 68.9178 29.4846 68.25C29.8197 67.5822 30.2888 67.048 30.8248 66.714C31.4279 66.3134 32.031 66.1798 32.7011 66.1798C33.7733 66.1798 34.6444 66.5137 35.2475 67.2483C35.8506 67.9829 36.1857 68.9846 36.1857 70.387V70.988H30.4228C30.4228 71.7894 30.6908 72.524 31.1599 72.9914C31.629 73.5257 32.2321 73.7928 32.9692 73.7928C33.5053 73.7928 33.9073 73.6593 34.2424 73.4589C34.5774 73.2586 34.9125 72.9914 35.1805 72.6575L36.0516 73.3253C35.3815 74.3938 34.3094 74.9281 32.9022 74.9281ZM32.7681 67.3151C32.165 67.3151 31.696 67.5154 31.2939 67.9829C30.8919 68.3836 30.6238 68.9846 30.5568 69.786H34.8455V69.6524C34.7785 68.9178 34.5774 68.3168 34.2424 67.9161C33.8403 67.5154 33.3712 67.3151 32.7681 67.3151ZM45.098 70.5873C45.098 71.8562 44.83 72.9247 44.2269 73.726C43.6238 74.5274 42.8197 74.9281 41.8145 74.9281C40.8094 74.9281 40.0053 74.5942 39.4022 73.9264V78H37.9279V66.3134H39.2681L39.3352 67.2483C39.9382 66.5137 40.7424 66.1798 41.8145 66.1798C42.8197 66.1798 43.6238 66.5805 44.2269 67.3151C44.83 68.0497 45.098 69.1182 45.098 70.5206V70.5873ZM43.6238 70.4538C43.6238 69.5188 43.4228 68.7175 43.0207 68.1832C42.6187 67.649 42.0826 67.3819 41.3455 67.3819C40.4743 67.3819 39.8042 67.7825 39.3352 68.5171V72.5908C39.7372 73.3921 40.4073 73.726 41.3455 73.726C42.0156 73.726 42.6187 73.4589 43.0207 72.9247C43.4228 72.3236 43.6238 71.5223 43.6238 70.4538ZM51.8661 72.524C51.8661 72.1233 51.7321 71.8562 51.397 71.589C51.129 71.3887 50.5929 71.1884 49.8558 71.0548C49.1187 70.9212 48.5156 70.7209 48.1135 70.5206C47.7114 70.3202 47.3764 70.0531 47.1754 69.7192C46.9743 69.3853 46.8403 69.0514 46.8403 68.6507C46.8403 67.9829 47.1083 67.3819 47.7114 66.9144C48.3145 66.4469 49.0516 66.1798 49.9898 66.1798C50.9279 66.1798 51.7321 66.4469 52.3351 66.9144C52.9382 67.3819 53.2063 68.0497 53.2063 68.7843H51.7321C51.7321 68.3836 51.531 68.0497 51.196 67.7825C50.8609 67.5154 50.4589 67.3819 49.9228 67.3819C49.3867 67.3819 48.9846 67.5154 48.6496 67.7158C48.3815 67.9161 48.1805 68.25 48.1805 68.5839C48.1805 68.9178 48.3145 69.1849 48.5826 69.3853C48.8506 69.5856 49.3867 69.7192 50.0568 69.9195C50.7939 70.0531 51.397 70.2534 51.7991 70.5206C52.2681 70.7209 52.6032 70.988 52.8042 71.3219C53.0053 71.6558 53.1393 71.9897 53.1393 72.4572C53.1393 73.1918 52.8042 73.7928 52.2011 74.2603C51.598 74.7277 50.7939 74.9281 49.8558 74.9281C49.1857 74.9281 48.5826 74.7945 48.0465 74.5942C47.5104 74.3271 47.1083 73.9932 46.8403 73.5925C46.5723 73.1918 46.3712 72.7243 46.3712 72.1901H47.8455C47.8455 72.6575 48.0465 73.0582 48.4486 73.3253C48.7836 73.5925 49.3197 73.726 49.8558 73.726C50.3918 73.726 50.8609 73.5925 51.196 73.3921C51.7321 73.1918 51.8661 72.8579 51.8661 72.524ZM55.2836 73.9932C55.2836 73.726 55.3506 73.5257 55.4846 73.3921C55.6187 73.2586 55.8867 73.125 56.1547 73.125C56.4228 73.125 56.6908 73.1918 56.8248 73.3921C56.9589 73.5925 57.0259 73.7928 57.0259 73.9932C57.0259 74.2603 56.9589 74.4606 56.8248 74.5942C56.6908 74.7277 56.4228 74.8613 56.1547 74.8613C55.8867 74.8613 55.6187 74.7945 55.4846 74.5942C55.3506 74.4606 55.2836 74.2603 55.2836 73.9932ZM63.5929 67.5822C63.3918 67.5154 63.1238 67.5154 62.8558 67.5154C61.9176 67.5154 61.2475 67.9161 60.9125 68.7175V74.7277H59.4382V66.3134H60.8455V67.3151C61.3145 66.5805 61.9846 66.1798 62.8558 66.1798C63.1238 66.1798 63.3248 66.2466 63.5259 66.3134V67.5822H63.5929ZM70.1599 73.9264C69.6238 74.5942 68.7527 74.9281 67.6805 74.9281C66.7424 74.9281 66.0723 74.661 65.6032 74.1267C65.1341 73.5925 64.8661 72.8579 64.8661 71.7894V66.3134H66.3403V71.7894C66.3403 73.0582 66.8764 73.726 67.8815 73.726C69.0207 73.726 69.7578 73.3253 70.0929 72.524V66.3801H71.5671V74.8613H70.1599V73.9264Z"></path>
                        <path
                            d="M64.1289 39.3339C69.0876 36.9966 73.7784 33.9914 78 30.3185L70.8969 22.3048C66.9433 25.7774 62.5206 28.5154 57.7629 30.5188C51.933 21.1027 47.5773 10.8853 45.0309 0H32.9691C30.4227 10.8853 26.134 21.1027 20.2371 30.4521C15.4794 28.4486 11.0567 25.7106 7.10309 22.238L0 30.3185C4.22165 33.9914 8.91237 37.0634 13.8711 39.3339C10.7887 43.2072 7.43814 46.8134 3.81959 50.2192L11.1907 58.0325C16.1495 53.4247 20.5722 48.4161 24.5258 43.0736C29.2165 44.2757 34.1082 44.8767 39 44.8767C43.8918 44.8767 48.7835 44.2757 53.4742 43.0736C57.4278 48.4161 61.9175 53.3579 66.8093 58.0325L74.1804 50.2192C70.5619 46.8134 67.2113 43.2072 64.1289 39.3339ZM39 34.2586C36.2526 34.2586 33.5722 33.9914 30.8918 33.5908C34.0412 28.2483 36.7887 22.6387 39 16.8955C41.2113 22.7055 43.9588 28.3151 47.1082 33.5908C44.4278 33.9914 41.7474 34.2586 39 34.2586Z"></path>
                    </svg>
                </a>
                <div class="footer__copyright">
                    @include('includes.copyright')
                </div>
                <div class="footer__contacts">
                    <a class="footer__contacts-item" href="mailto:7steps@7steps.ru">7steps@7steps.ru</a>
                    <div class="footer__contacts-item">Москва</div>
                    <a class="footer__contacts-item" href="tel:+79164758281">+7 916 475 82 81 </a>
                </div>
            </div>
        </div>
    </footer>

    <div class="popup-bg js-popup-bg">
        @guest('participant')
            <div class="popup js-popup js-popup-ajax" id="popup-registration">
                <a class="popup__close js-popup-close" href="javascript:void(0);">
                    <svg class="icon icon-close">
                        <use xlink:href="/assets/img/spritesvg.svg#close"></use>
                    </svg>
                </a>
                <form action="{{ route('login') }}" method="POST" class="popup__form form">
                    <div class="form__title h3">Вход и регистрация</div>
                    <div class="form__group">
                        <div class="form__field field">
                            <input class="field__input" type="text" name="name" maxlength="20">
                            <div class="field__label">Как к Вам обращаться?</div>
                        </div>
                        <div class="form__field field">
                            <input class="field__input" type="text" name="email" maxlength="128">
                            <div class="field__label">Ваш e-mail</div>
                        </div>
                    </div>
                    {{--<div class="form__title h3">Авторизация</div>--}}
                    {{--<div class="form__social social social--round-white social--center">--}}
                    {{--<li class="social__item">--}}
                    {{--<a class="social__link" href="javascript:void(0);" title="facebook">--}}
                    {{--<svg class="icon icon-fb">--}}
                    {{--<use xlink:href="/assets/img/spritesvg.svg#fb"></use>--}}
                    {{--</svg>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="social__item">--}}
                    {{--<a class="social__link" href="javascript:void(0);" title="vkontakte">--}}
                    {{--<svg class="icon icon-vk">--}}
                    {{--<use xlink:href="/assets/img/spritesvg.svg#vk"></use>--}}
                    {{--</svg>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="social__item">--}}
                    {{--<a class="social__link" href="javascript:void(0);" title="google">--}}
                    {{--<svg class="icon icon-google">--}}
                    {{--<use xlink:href="/assets/img/spritesvg.svg#google"></use>--}}
                    {{--</svg>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="social__item">--}}
                    {{--<a class="social__link" href="javascript:void(0);" title="yandex">--}}
                    {{--<svg class="icon icon-yandex">--}}
                    {{--<use xlink:href="/assets/img/spritesvg.svg#yandex"></use>--}}
                    {{--</svg>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--</div>--}}
                    <button type="submit" class="form__btn btn"><span>Начать медитировать!</span></button>

                </form>
            </div>
        @endguest

        @auth('participant')
            <div class="popup js-popup js-popup-profile">
                <a class="popup__close js-popup-close" href="javascript:void(0);">
                    <svg class="icon icon-close">
                        <use xlink:href="/assets/img/spritesvg.svg#close"></use>
                    </svg>
                </a>
                <div class="popup__title h3">Редактировать профиль</div>
                <form class="popup__form form js-valid js-user-update"
                      data-user-update-url="{{ route('user.update') }}">
                    <div class="form__profile profile">
                        <div class="profile__avatar profile__avatar--big js-current-avatar">
                            <img src="{{ Auth::guard('participant')->user()->avatar }}" image="avatar">
                        </div>
                        <a class="profile__edit page-link page-link--gray js-change-avatar" href="javascript:void(0);">Сменить
                            аватар
                            <svg class="icon icon-edit">
                                <use xlink:href="/assets/img/spritesvg.svg#edit"></use>
                            </svg>
                        </a>
                        <div class="profile__dropdown js-avatars-dropdown">
                            <div class="profile__avatars js-avatars">
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-1.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-2.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-3.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-4.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-5.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-6.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-7.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-8.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-9.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-10.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-11.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-12.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-13.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-14.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-15.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-16.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-17.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-18.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-19.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-20.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-21.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-22.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-23.svg" image="avatar"></a>
                                <a class="profile__avatar" href="javascript:void(0);"><img
                                        src="/assets/img/avatar-24.svg" image="avatar"></a>
                            </div>
                            <div class="profile__links">
                                <a class="profile__save page-link page-link--gray js-save-avatar"
                                   href="javascript:void(0);">Сохранить
                                    <svg class="icon icon-check">
                                        <use xlink:href="/assets/img/spritesvg.svg#check"></use>
                                    </svg>
                                </a>
                                <a class="profile__cancel page-link page-link--gray js-cancel-avatar"
                                   href="javascript:void(0);">Отменить
                                    <svg class="icon icon-close">
                                        <use xlink:href="/assets/img/spritesvg.svg#close"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form__group">
                        <div class="form__field field">
                            <input class="field__input value  js-user-name" type="text" name="name"
                                   value="{{ Auth::guard('participant')->user()->name }}" required>
                            <div class="field__label">Имя пользователя</div>
                        </div>
                        <label class="form__checkbox checkbox">
                            <input type="checkbox" @if( Auth::guard('participant')->user()->comment_visible) checked
                                   @endif class="js-comment-visible" name="consect">Мои комментарии видны
                            незарегистрированным
                            пользователям с целью демонстрации работы курса
                        </label>
                    </div>
                    <button class="form__btn btn"><span>Сохранить и закрыть</span></button>
                </form>
            </div>
        @endauth

        @yield('popup')


        <div class="popup js-popup" id="popup-message">
            <a class="popup__close js-popup-close" href="javascript:void(0);">
                <svg class="icon icon-close">
                    <use xlink:href="/assets/img/spritesvg.svg#close"></use>
                </svg>
            </a>
            <div class="popup__title h3">{!! session('popup.title') !!}</div>
            <div class="popup__text">{!! session('popup.text') !!}</div>
            <a class="popup__btn btn js-popup-close" href="javascript:void(0);"> <span>Продолжить</span></a>
        </div>
    </div>

    <a class="up nav-btn js-up" href="javascript:void(0);">Наверх
        <svg class="icon icon-arrow">
            <use xlink:href="/assets/img/spritesvg.svg#arrow"></use>
        </svg>
    </a>
</div>



<script src="{{mix('assets/js/libs.min.js')}}"></script>
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js"></script>

@auth('participant')
    <script>

            window.OneSignal = window.OneSignal || [];
            OneSignal.push(function () {
                OneSignal.init({
                    appId: "{{env('ONE_SIGNAL_APP_KEY')}}",
                    safari_web_id: "{{env('ONE_SIGNAL_SAFARI_WEB_ID')}}",
                    notifyButton: {
                        enable: false,
                    },
                    welcomeNotification: {
                        disable: true
                    }
                });

                OneSignal.showSlidedownPrompt()

            });
    </script>
@endauth
<script src="{{mix('assets/js/main.min.js')}}"></script>



@include('includes.scripts.popup')
@stack('script')
</body>
</html>
