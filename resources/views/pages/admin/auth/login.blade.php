@extends('layouts.admin.login')

@section('title', 'Авторизация')

@section('content')
{{ Form::open(['route' => 'admin.login', 'class' => 'login-form']) }}
    <h3 class="form-title font-green">Авторизация</h3>

    @include('includes.admin.errors')

    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Email</label>
        {{ Form::text('email', null, ['class' => 'form-control form-control-solid placeholder-no-fix', 'placeholder' => 'Email']) }}
    </div>

    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Пароль</label>
        {{ Form::password('password', ['class' => 'form-control form-control-solid placeholder-no-fix', 'placeholder' => 'Пароль']) }}
    </div>

    <div class="form-actions">
        <button type="submit" class="btn green uppercase">Войти</button>

        <label class="rememberme check mt-checkbox mt-checkbox-outline">
            {{ Form::checkbox('remember') }} Запомнить меня
            <span></span>
        </label>
    </div>

    <div class="create-account">
        <p>
            <a href="{{ route('admin.password.request') }}" class="uppercase">Забыли пароль?</a>
        </p>
    </div>
{{ Form::close() }}
@endsection
