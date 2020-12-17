<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"></button>
    <h4 class="modal-title">Назначение участнику {{ !is_null($participant->curator_id) ? 'нового ' : '' }}куратора</h4>
</div>
<div class="modal-body">
    {{ Form::model($participant, ['route' => ['admin.participants.update', $participant->id], 'method' => 'PATCH', 'role' => 'form', 'class' => 'horizontal-form']) }}
        <div class="form-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        {{ Form::label('curator_id', 'Куратор') }}
                        {{ Form::select('curator_id', $curators, null, ['class' => 'form-control']) }}
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
    function ajaxForm ($form) {

        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: $form.serialize()
        }).done(function (response) {
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
        });
    }

    $('#modal form').submit(function (e) {
        e.preventDefault();
        const $this = $(this);
        const curatorId = '{{ $participant->curator_id }}';
        const newCuratorId = $('#curator_id').val();

        if (curatorId && newCuratorId && curatorId !== newCuratorId) {
            bootbox.dialog({
                message: "Участнику уже назначен куратор, вы действительно хотите назначить нового?",
                title: "Внимание!",
                onEscape: true,
                backdrop: true,
                buttons: {
                    cancel: {
                        label: "Нет",
                        className: "default"
                    },
                    confirm: {
                        label: "Да",
                        className: "red",
                        callback: function () {
                            ajaxForm($this);
                        }
                    }
                }
            });
        } else {
            ajaxForm($this);
        }
    });

    $('#modal-form-submit').click(function () {
        $('#modal form').submit();
    });
});
</script>
