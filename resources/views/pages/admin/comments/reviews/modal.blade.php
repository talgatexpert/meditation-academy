<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"></button>
    <h4 class="modal-title">{{ isset($targetComment) ? 'Ответ в отчете №' . ($targetComment->isReport() ? $targetComment->id : $targetComment->parent_id) : 'Редактирование ' . ($comment->isReport() ? 'отчета' : 'комментария') . ' №' . $comment->id }}</h4>
</div>
<div class="modal-body">
    {{ Form::model(isset($targetComment) ? null : $comment, ['route' => isset($targetComment) ? ['admin.comments.reviews.store'] : ['admin.comments.reviews.update', $comment], 'method' => isset($targetComment) ? 'POST' : 'PATCH', 'role' => 'form', 'class' => 'horizontal-form']) }}
        <div class="form-body">
            @if (isset($targetComment))
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {{ Form::label('curator_id', 'Куратор') }}
                            {{ Form::select('curator_id', $curators, Auth::id(), ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>

                {{ Form::hidden('parent_id', $targetComment->isReport() ? $targetComment->id : $targetComment->parent_id) }}
            @endif

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        {{ Form::label('body', isset($targetComment) ? 'Ваш ответ' : ($comment->isReport() ? 'Отчет' : 'Комментарий')) }}
                        {{ Form::textarea('body', null, ['class' => 'form-control']) }}
                    </div>
                </div>
            </div>
        </div>
    {{ Form::close() }}
</div>
<div class="modal-footer">
    <button type="button" class="btn green-haze pull-left" id="modal-form-submit">Сохранить</button>
    <button type="button" class="btn default pull-left" data-dismiss="modal">Отмена</button>
</div>

<script>
$(document).ready(function() {
    $('#modal form').submit(function (e) {
        e.preventDefault();
        const $form = $(this);
        const button = $form.closest('.modal-dialog').find('#modal-form-submit');
        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: $form.serialize(),
            beforeSend: function () {
            button.prop('disabled', true);
            }
        }).done(function (response) {
            button.prop('disabled', false);
            if (response.status === 'OK') {
                $('#modal').modal('hide');
                if (response.redirect) {
                    window.location.replace(response.redirect);
                }
            } else {
                toastr.error(response.message ? response.message : 'Случилась непредвиденная ошибка.');
            }
        }).fail(function (xhr) {
            const response = $.parseJSON(xhr.responseText);
            toastr.error(response.message ? response.message : 'Случилась непредвиденная ошибка.');
            button.prop('disabled', false);
        });
    });

    $('#modal-form-submit').click(function () {
        $('#modal form').submit();
    });
});
</script>
