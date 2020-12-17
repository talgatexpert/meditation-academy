@extends('layouts.admin.master')

@section('title', ($email ? 'Редактирование' : 'Создание') . ' шаблона письма')

@section('content')
<div class="portlet light">
    <div class="portlet-body form">
        {{ Form::model($email, ['route' => $email ? ['admin.templates.email.update', $email->id] : ['admin.templates.email.store'], 'method' => $email ? 'PATCH' : 'POST', 'role' => 'form', 'class' => 'horizontal-form']) }}
            <div class="form-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('name', 'Название шаблона') }}
                            {{ Form::select('name', $names, null, ['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('subject', 'Тема письма') }}
                            {{ Form::text('subject', null, ['class' => 'form-control', 'maxlength' => 128]) }}
                            @include('includes.admin.templates.email-vars', ['target' => '#subject'])
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('sender[email]', 'Email отправителя') }}
                            {{ Form::text('sender[email]', null, ['class' => 'form-control', 'maxlength' => 64]) }}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('sender[name]', 'Имя отправителя') }}
                            {{ Form::text('sender[name]', null, ['class' => 'form-control', 'maxlength' => 32]) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {{ Form::label('body', 'Тело письма') }}
                            {{ Form::textarea('body', null, ['class' => 'form-control']) }}
                            @include('includes.admin.templates.email-vars', ['target' => '#body'])
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn green-haze margin-right-10">Сохранить</button>
                <button class="btn yellow-haze margin-right-10" id="preview">Предпросмотр</button>
                <a href="{{ route('admin.templates.email.index') }}" class="btn default">Отмена</a>

                @if ($email)
                    <span class="font-yellow pull-right">Изменен: {{ $email->updated_at }}</span>
                @endif
            </div>
        {{ Form::close() }}
    </div>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    const cm = CodeMirror.fromTextArea(document.getElementById('body'), {
        indentUnit: 4,
        lineNumbers: true,
        lineWrapping: true,
        matchBrackets: true,
        mode: 'htmlmixed',
        scrollbarStyle: 'simple',
        selectionPointer: true,
        styleActiveLine: true,
        theme: 'elegant'
    });
    cm.setSize(null, 480);
    $('#body').data('cm', cm);

    // Предпросмотр шаблона письма
    $('#preview').click(function (e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: '{{ route('admin.templates.email.preview') }}',
            data: {
                subject: $('#subject').val(),
                body: $('#body').data('cm').getValue()
            }
        }).done(function (response) {
            const win = window.open(response, '_blank');
            win.focus();
        }).fail(function (xhr) {
            const response = $.parseJSON(xhr.responseText);
            toastr.error(response.message ? response.message : 'Случилась непредвиденная ошибка.');
        });
    });
});
</script>
@endpush
