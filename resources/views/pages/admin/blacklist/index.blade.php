@extends('layouts.admin.master')

@section('title', 'Черный список участников')

@section('content')
<div class="portlet light">
    <div class="portlet-body">
        <div class="load-pending-message">Загрузка...</div>

        <div class="load-pending-content">
            <div class="table-toolbar">
                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group">
                            <a href="{{ route('admin.blacklist.create') }}" class="btn green-haze">
                                <i class="fa fa-plus"></i> Добавить участника
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-striped table-bordered table-hover order-column">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Email</th>
                        <th>Создан</th>
                        <th>Изменен</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blacklist as $item)
                        <tr class="odd gradeX">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td>
                                <a href="{{ route('admin.blacklist.edit', [$item->id]) }}" class="btn btn-outline btn-xs yellow" title="Редактировать участника"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('admin.blacklist.destroy', [$item->id]) }}" data-method="DELETE" class="btn btn-outline btn-xs red confirm-btn" title="Удалить участника"><i class="fa fa-trash"></i></a>
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
    const blacklistTable = $('.table').dataTable({
        "columns": [
            {"orderable": true, "searchable": true},
            {"orderable": true, "searchable": true},
            {"orderable": true, "searchable": true},
            {"orderable": true, "searchable": true},
            {"orderable": false, "searchable": false}
        ],
        initComplete: function(settings, json) {
            // Инициализируем кнопку очистки для поля с поиском
            $('.dataTables_filter input').after($('<a href="javascript:void(0);" class="dt-filter-clear" title="Очистить поле"><i class="fa fa-times"></i></a>').on('click', function () {if (blacklistTable) { blacklistTable.fnFilter(''); }}));

            $('.load-pending-message').hide();
            $('.load-pending-content').show();
        }
    });
});
</script>
@endpush
