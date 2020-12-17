$(document).ready(function () {
    const $form = $('#form');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.extend(true, $.fn.dataTable.defaults, {
        "language": {
            url: '/assets/admin/global/plugins/datatables/i18n/Russian.json'
        },
        "lengthMenu": [
            [10, 25, 50, 100],
            [10, 25, 50, 100]
        ],
        "pageLength": 25,
        "bStateSave": true,
        "order": [[0, "desc"]]
    });

    $.fn.extend({
        insertAtCaret: function (value) {
            this.each(function () {
                if (document.selection) {
                    this.focus();
                    const sel = document.selection.createRange();
                    sel.text = value;
                    this.focus();
                } else if (this.selectionStart || this.selectionStart === 0) {
                    const startPos = this.selectionStart;
                    const endPos = this.selectionEnd;
                    const scrollTop = this.scrollTop;
                    this.value = this.value.substring(0, startPos) + value + this.value.substring(endPos, this.value.length);
                    this.focus();
                    this.selectionStart = startPos + value.length;
                    this.selectionEnd = startPos + value.length;
                    this.scrollTop = scrollTop;
                } else {
                    this.value += value;
                    this.focus();
                }
            });
            return this;
        }
    });

    toastr.options = {
        "closeButton": false,
        "debug": false,
        "positionClass": "toast-top-right",
        "onclick": null,
        "showDuration": "250",
        "hideDuration": "250",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    // Выход из системы
    $('#logout').click(function (e) {
        e.preventDefault();
        $form.attr('action', $(this).attr('href'));
        $form.find('input[name=_method]').val('POST');
        $form.submit();
    });

    // Кнопка с подтверждением действия
    $(document).on('click', 'a.confirm-btn', function (e) {
        e.preventDefault();
        const $this = $(this);
        bootbox.dialog({
            message: "Вы действительно хотите выполнить это действие?",
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
                        const method = $this.data('method');
                        $form.attr('action', $this.attr('href'));
                        $form.find('input[name=_method]').val(method ? method : 'POST');
                        $form.submit();
                    }
                }
            }
        });
    });

    // Закрытие модального окна
    $("#modal").on("hidden.bs.modal", function () {
        $(this).find('.modal-content').html('<div class="modal-body"><div class="text-center"><img src="/assets/admin/global/img/loading-spinner-grey.gif" alt="" class="loading"><span> &nbsp;&nbsp;Загрузка... </span></div></div>');
    });

    // Быстрая вставка данных в текстовые поля
    $(document).on('click', 'a.hot-insert', function () {
        const $target = $($(this).data('target'));
        const value = '{' + $(this).data('var') + '}';
        const cm = $target.data('cm');
        if (cm) {
            const doc = cm.getDoc();
            doc.replaceSelection(value);
        } else {
            $target.insertAtCaret(value);
        }
    });
});
