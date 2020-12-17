@extends('layouts.admin.login')

@section('title', 'Сброс пароля')

@section('content')
{{ Form::open(['route' => 'admin.password.request', 'class' => 'forget-form', 'style' => 'display:block']) }}
    <h3 class="font-green">Сброс пароля</h3>

    @include('includes.admin.errors')

    <p>Введите свой email и укажите новый пароль.</p>

    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Email</label>
        {{ Form::text('email', $email, ['class' => 'form-control form-control-solid placeholder-no-fix', 'placeholder' => 'Email']) }}
    </div>

    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Пароль</label>
        {{ Form::password('password', ['class' => 'form-control form-control-solid placeholder-no-fix', 'placeholder' => 'Пароль']) }}
    </div>

    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Подтверждение пароля</label>
        {{ Form::password('password_confirmation', ['class' => 'form-control form-control-solid placeholder-no-fix', 'placeholder' => 'Подтверждение пароля']) }}
    </div>

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-actions">
        <a href="{{ route('admin.login') }}" class="btn green btn-outline">Отмена</a>
        <button type="submit" class="btn btn-success uppercase pull-right">Сменить пароль</button>
    </div>
{{ Form::close() }}
@endsection
