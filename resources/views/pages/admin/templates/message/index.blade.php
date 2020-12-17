@extends('layouts.admin.master')

@section('title', 'Шаблоны сообщений')

@section('content')
<div class="portlet light">
    <div class="portlet-body">
        <div class="load-pending-message">Загрузка...</div>

        <div class="load-pending-content">
            <div class="table-toolbar">
                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group">
                            <a href="{{ route('admin.templates.message.create') }}" class="btn green-haze">
                                <i class="fa fa-plus"></i> Создать шаблон сообщения
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-striped table-bordered table-hover order-column">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Название шаблона</th>
                        <th>Заголовок сообщения</th>
                        <th>Изменен</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($templates as $template)
                        <tr class="odd gradeX">
                            <td>{{ $template->id }}</td>
                            <td>{{ $template->full_name }}</td>
                            <td>{{ $template->title }}</td>
                            <td>{{ $template->updated_at }}</td>
                            <td>
                                <a href="{{ route('admin.templates.message.show', [$template->id]) }}" target="_blank" class="btn btn-outline btn-xs green" title="Посмотреть шаблон сообщения в новом окне"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.templates.message.edit', [$template->id]) }}" class="btn btn-outline btn-xs yellow" title="Редактировать шаблон сообщения"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('admin.templates.message.destroy', [$template->id]) }}" data-method="DELETE" class="btn btn-outline btn-xs red confirm-btn" title="Удалить шаблон сообщения"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    const templatesTable = $('.table').dataTable({
        "columns": [
            {"orderable": true, "searchable": true},
            {"orderable": true, "searchable": true},
            {"orderable": true, "searchable": true},
            {"orderable": true, "searchable": true},
            {"orderable": false, "searchable": false}
        ],
        initComplete: function(settings, json) {
            // Инициализируем кнопку очистки для поля с поиском
            $('.dataTables_filter input').after($('<a href="javascript:void(0);" class="dt-filter-clear" title="Очистить поле"><i class="fa fa-times"></i></a>').on('click', function () {if (templatesTable) { templatesTable.fnFilter(''); }}));

            $('.load-pending-message').hide();
            $('.load-pending-content').show();
        }
    });
});
</script>
@endpush
