@extends('layouts.admin.master')

@section('title', 'Комментарии на страницах заданий')

@section('content')
<div class="portlet light">
    <div class="portlet-body">
        <div class="load-pending-message">Загрузка...</div>

        <div class="load-pending-content">
            <table class="table table-striped table-bordered table-hover order-column">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Автор</th>
                        <th>Коментарий</th>
                        <th>Лайки</th>
                        <th>Страница</th>
                        <th>Создан</th>
                        <th>Действия</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
    <script src="{{asset('assets/js/translations/ru.js')}}"></script>
<script>
$(document).ready(function() {
    const commentsTable = $('.table').dataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{route('admin.comments.steps.ajax')}}",
            type: "POST",
        },
        order: [0, "desc"],
        orderMulti: false,
        autoWidth: false,
        columns: [
            {"orderable": true, "searchable": false, "name": "id", "data": "id"},
            {"orderable": true, "searchable": true, "name": "author", "data": "author"},
            {"orderable": true, "searchable": true, "name": "body", "data": "body"},
            {"orderable": true, "searchable": false, "name": "likes", "data": "likes"},
            {"orderable": true, "searchable": true, "name": "step", "data": "step"},
            {"orderable": true, "searchable": true, "name": "created_at", "data": "created_at"},
            {"orderable": false, "searchable": false, "name": "actions", "data": "actions", "width": "110px"}
        ],
        pagingType: "bootstrap_full_number",
        dom: "<'row'<'col-md-6 col-sm-6'l><'col-md-6 col-sm-6'<'dt-filter-hint'>f>r><'row'<'col-md-5 col-sm-5'><'col-md-7 col-sm-7'p>><'table-scrollable't><'row'<'col-md-5 col-sm-5'i><'col-md-7 col-sm-7'p>>",
        initComplete: function(settings, json) {
            // Инициализируем кнопку очистки для поля с поиском
            $('.dataTables_filter input').after($('<a href="javascript:void(0);" class="dt-filter-clear" title="Очистить поле"><i class="fa fa-times"></i></a>').on('click', function () {if (commentsTable) { commentsTable.fnFilter(''); }}));

            // Инициализируем всплывающую подсказку для поля с поиском
            $('<a href="javascript:void(0);" class="popovers" data-container="body" data-trigger="hover" data-placement="bottom" data-html="true" data-content="- По id можно искать только с помощью специального синтаксиса: &quot;№123&quot; или &quot;#123&quot;.<br>- Автора можно искать как по имени, так и по email.<br>- По комментарию поиск стандартный, а по лайкам искать нельзя.<br>- Страницу можно искать либо для конкретного шага, например &quot;step 1&quot; или &quot;step 2&quot;, либо комбинируя части, например &quot;posture breathing&quot;, тогда будут найдены комментарии на шагах 1 и 4, либо используя общую часть &quot;meditation&quot;, тогда будут найдены комментарии на первых трех шагах.<br>- По дате можно искать в любом формате, даже частичном, например &quot;09.2020&quot;, т.е. все комментарии за сентябрь 2020."><i class="fa fa-question-circle"></i></a>').appendTo('.dt-filter-hint');
            $('.dt-filter-hint .popovers').popover();

            $('.load-pending-message').hide();
            $('.load-pending-content').show();
        }
    });
});
</script>
@endpush
