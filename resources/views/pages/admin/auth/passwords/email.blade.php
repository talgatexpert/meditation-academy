@extends('layouts.admin.login')

@section('title', 'Сброс пароля')

@section('content')
{{ Form::open(['route' => 'admin.password.email', 'class' => 'forget-form', 'style' => 'display:block']) }}
    <h3 class="font-green">Сброс пароля</h3>

    @include('includes.admin.status')
    @include('includes.admin.errors')

    <p>Введите адрес своей электронной почты, чтобы сбросить пароль.</p>

    <div class="form-group">
        {{ Form::text('email', null, ['class' => 'form-control placeholder-no-fix', 'placeholder' => 'Email']) }}
    </div>

    <div class="form-actions">
        <a href="{{ route('admin.login') }}" class="btn green btn-outline">Назад</a>
        <button type="submit" class="btn btn-success uppercase pull-right">Отправить</button>
    </div>
{{ Form::close() }}
@endsection
