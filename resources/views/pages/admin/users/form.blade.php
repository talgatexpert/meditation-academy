@extends('layouts.admin.master')

@section('title', ($user ? 'Редактирование' : 'Создание') . ' пользователя')

@section('content')
<div class="portlet light">
    <div class="portlet-body form">
        {{ Form::model($user, ['route' => $user ? ['admin.users.update', $user->id] : ['admin.users.store'], 'method' => $user ? 'PATCH' : 'POST', 'role' => 'form', 'class' => 'horizontal-form']) }}
            <div class="form-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::text('email', null, ['class' => 'form-control', 'maxlength' => 64]) }}
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            {{ Form::label('name', 'Имя') }}
                            {{ Form::text('name', null, ['class' => 'form-control', 'maxlength' => 32]) }}
                        </div>
                    </div>

                    @if (!$user || ($user && !$user->isSuperAdmin() && $user->id !== Auth::id()))
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('role', 'Роль') }}
                                {{ Form::select('role', $roles, null, ['class' => 'form-control']) }}
                            </div>
                        </div>
                    @endif
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            {{ Form::label('password', 'Пароль') }}
                            {{ Form::password('password', ['class' => 'form-control', 'autocomplete' => 'off']) }}
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            {{ Form::label('password_confirmation', 'Подтверждение пароля') }}
                            {{ Form::password('password_confirmation', ['class' => 'form-control', 'autocomplete' => 'off']) }}
                        </div>
                    </div>

                    @if (!$user || ($user && !$user->isSuperAdmin() && $user->id !== Auth::id()))
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('active', 'Статус') }}
                                <div class="clearfix"></div>
                                {{ Form::checkbox('active', 1, !$user ? true : null, ['class' => 'make-switch', 'data-on-text' => 'Вкл', 'data-off-text' => 'Выкл', 'data-on-color' => 'success', 'data-off-color' => 'danger']) }}
                            </div>
                        </div>
                    @endif
                    @if(session('error'))
                    @if (!$user || ($user && !$user->isSuperAdmin() && $user->id !== Auth::id()))
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('role', 'Выберите активного куратора на которого хотите заменить') }}
                                {{ Form::select('curators', $curators, null, ['class' => 'form-control']) }}
                            </div>
                        </div>
                    @endif
                        @endif
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn green-haze margin-right-10">Сохранить</button>
                <a href="{{ route('admin.users.index') }}" class="btn default">Отмена</a>

                @if ($user)
                    <span class="font-yellow pull-right">Изменен: {{ $user->updated_at }}</span>
                @endif
            </div>
        {{ Form::close() }}
    </div>
</div>
@endsection

@push('scripts')
@endpush
