@extends('layouts.admin.master')

@section('title', $blacklist ? 'Редактирование участника в черном списке' : 'Добавление участника в черный список')

@section('content')
<div class="portlet light">
    <div class="portlet-body form">
        {{ Form::model($blacklist, ['route' => $blacklist ? ['admin.blacklist.update', $blacklist->id] : ['admin.blacklist.store'], 'method' => $blacklist ? 'PATCH' : 'POST', 'role' => 'form', 'class' => 'horizontal-form']) }}
            <div class="form-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::text('email', null, ['class' => 'form-control', 'maxlength' => 128]) }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn green-haze margin-right-10">Сохранить</button>
                <a href="{{ route('admin.blacklist.index') }}" class="btn default">Отмена</a>

                @if ($blacklist)
                    <span class="font-yellow pull-right">Изменен: {{ $blacklist->updated_at }}</span>
                @endif
            </div>
        {{ Form::close() }}
    </div>
</div>
@endsection

@push('scripts')
@endpush
