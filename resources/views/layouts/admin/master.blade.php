<!DOCTYPE html>
<!--[if IE 8]> <html lang="ru" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="ru" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>@include('includes.admin.title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/global/plugins/codemirror/lib/codemirror.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/global/plugins/codemirror/addon/scroll/simplescrollbars.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/global/plugins/codemirror/theme/elegant.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/global/css/components-md.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/layouts/layout3/css/custom.min.css?v4" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="/favicon.ico" />
</head>
<body class="page-container-bg-solid page-md">
<div class="page-wrapper">
    <div class="page-wrapper-row">
        <div class="page-wrapper-top">
            <div class="page-header">
                <div class="page-header-top">
                    <div class="container-fluid">
                        <div class="page-logo">
                            <a href="{{ route('admin.dashboard') }}">
                                <img src="/assets/admin/layouts/layout3/img/logo-default.png" alt="logo" class="logo-default">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="menu-toggler"></a>

                        <div class="top-menu">
                            <ul class="nav navbar-nav pull-right">
                                <li class="dropdown dropdown-user dropdown-dark">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <img alt="" class="img-circle" src="/assets/admin/layouts/layout3/img/avatar.png">
                                        <span class="username username-hide-mobile">{{ Auth::user()->name }}</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-default">
                                        {{--
                                        <li>
                                            <a href="{{ route('admin.profile') }}"><i class="icon-user"></i> Профиль </a>
                                        </li>
                                        --}}
                                        <li>
                                            <a href="{{ route('admin.logout') }}" id="logout"><i class="icon-key"></i> Выйти </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="page-header-menu">
                    <div class="container-fluid">
                        <div class="hor-menu">
                            <ul class="nav navbar-nav">
                                @canany([\App\Models\User::ABILITY_ADMIN, \App\Models\User::ABILITY_MANAGER, \App\Models\User::ABILITY_CURATOR])
                                    <li class="menu-dropdown classic-menu-dropdown{{ request()->is('admin/participants', 'admin/participants/archive') ? ' active' : '' }}">
                                        <a href="{{ route('admin.participants.index') }}"> Участники <span class="arrow"></span></a>
                                        <ul class="dropdown-menu pull-left">
                                            <li class="{{ request()->is('admin/participants/archive') ? 'active' : '' }}">
                                                <a href="{{ route('admin.participants.archive') }}"> Архив </a>
                                            </li>
                                            <li class="{{ request()->is('admin/participants/graduates') ? 'active' : '' }}">
                                                <a href="{{ route('admin.participants.graduates') }}">Выпускники</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-dropdown classic-menu-dropdown {{ request()->is('admin/comments/*') ? 'active' : '' }}">
                                        <a href="javascript:void(0);"> Комментарии <span class="arrow"></span></a>
                                        <ul class="dropdown-menu pull-left">
                                            <li class="{{ request()->is('admin/comments/steps', 'admin/comments/steps/*') ? 'active' : '' }}">
                                                <a href="{{ route('admin.comments.steps.index') }}"> Страницы заданий </a>
                                            </li>
                                            <li class="{{ request()->is('admin/comments/reviews', 'admin/comments/reviews/*') ? 'active' : '' }}">
                                                <a href="{{ route('admin.comments.reviews.index') }}">Отзывы</a>
                                            </li>
                                        </ul>
                                    </li>
                                @endcanany

                                @canany([\App\Models\User::ABILITY_ADMIN, \App\Models\User::ABILITY_MANAGER])
                                    <li class="{{ request()->is('admin/blacklist', 'admin/blacklist/*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.blacklist.index') }}"> Черный список </a>
                                    </li>

                                    <li class="{{ request()->is('admin/polls') ? 'active' : '' }}">
                                        <a href="{{ route('admin.polls.index') }}"> Статистика опросов </a>
                                    </li>
                                        <li class="{{ request()->is('admin/curator-statistics') ? 'active' : '' }}">
                                            <a href="{{ route('admin.curator.statistics') }}"> Статистика кураторов </a>
                                        </li>


                                        <li class="menu-dropdown classic-menu-dropdown {{ request()->is('admin/templates/*') ? 'active' : '' }}">
                                        <a href="javascript:void(0);"> Шаблоны <span class="arrow"></span></a>
                                        <ul class="dropdown-menu pull-left">
                                            <li class="{{ request()->is('admin/templates/email', 'admin/templates/email/*') ? 'active' : '' }}">
                                                <a href="{{ route('admin.templates.email.index') }}"> Письма </a>
                                            </li>

                                            <li class="{{ request()->is('admin/templates/message', 'admin/templates/message/*') ? 'active' : '' }}">
                                                <a href="{{ route('admin.templates.message.index') }}"> Сообщения </a>
                                            </li>
                                        </ul>
                                    </li>
                                @endcanany

                                @can([\App\Models\User::ABILITY_ADMIN, \App\Models\User::ABILITY_MANAGER, \App\Models\User::ABILITY_CURATOR])
                                    <li class="{{ request()->is('admin/subscribers', 'admin/subscribers/*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.subscribers.index') }}"> Подписчики </a>
                                    </li>
                                @endcan
                                    @can(\App\Models\User::ABILITY_ADMIN)
                                        <li class="{{ request()->is('admin/users', 'admin/users/*') ? 'active' : '' }}">
                                            <a href="{{ route('admin.users.index') }}"> Пользователи </a>
                                        </li>
                                    @endcan
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-wrapper-row full-height">
        <div class="page-wrapper-middle">
            <div class="page-container">
                <div class="page-content-wrapper">
                    <div class="page-head">
                        <div class="container-fluid">
                            <div class="page-title">
                                <h1>@yield('title')</h1>
                            </div>
                        </div>
                    </div>

                    <div class="page-content">
                        <div class="container-fluid">
                            <div class="page-content-inner">
                                @include('includes.admin.status')
                                @include('includes.admin.error')
                                @include('includes.admin.errors')

                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-wrapper-row">
        <div class="page-wrapper-bottom">
            <div class="page-footer">
                <div class="container-fluid">
                    @include('includes.admin.copyright')
                </div>
            </div>

            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
    </div>
</div>

<form method="POST" id="form">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="">
</form>

<div class="modal fade" id="modal" role="basic" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <img src="/assets/admin/global/img/loading-spinner-grey.gif" alt="" class="loading">
                    <span> &nbsp;&nbsp;Загрузка... </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!--[if lt IE 9]>
<script src="/assets/admin/global/plugins/respond.min.js"></script>
<script src="/assets/admin/global/plugins/excanvas.min.js"></script>
<script src="/assets/admin/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<script src="/assets/admin/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/assets/admin/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="/assets/admin/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/admin/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/assets/admin/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="/assets/admin/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
<script src="/assets/admin/global/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
<script src="/assets/admin/global/plugins/codemirror/lib/codemirror.js" type="text/javascript"></script>
<script src="/assets/admin/global/plugins/codemirror/addon/edit/matchbrackets.js" type="text/javascript"></script>
<script src="/assets/admin/global/plugins/codemirror/addon/selection/active-line.js" type="text/javascript"></script>
<script src="/assets/admin/global/plugins/codemirror/addon/selection/selection-pointer.js" type="text/javascript"></script>
<script src="/assets/admin/global/plugins/codemirror/addon/scroll/simplescrollbars.js" type="text/javascript"></script>
<script src="/assets/admin/global/plugins/codemirror/mode/css/css.js" type="text/javascript"></script>
<script src="/assets/admin/global/plugins/codemirror/mode/htmlmixed/htmlmixed.js" type="text/javascript"></script>
<script src="/assets/admin/global/plugins/codemirror/mode/javascript/javascript.js" type="text/javascript"></script>
<script src="/assets/admin/global/plugins/codemirror/mode/xml/xml.js" type="text/javascript"></script>
<script src="/assets/admin/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="/assets/admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<script src="/assets/admin/global/scripts/app.min.js" type="text/javascript"></script>
<script src="/assets/admin/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
<script src="/assets/admin/layouts/layout3/scripts/custom.min.js?v4" type="text/javascript"></script>
@stack('scripts')
</body>
</html>
