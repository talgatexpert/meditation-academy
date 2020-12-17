@extends('layouts.admin.master')

@section('title', 'Пользователи')

@section('content')
<div class="portlet light">
    <div class="portlet-body">
        <div class="load-pending-message">Загрузка...</div>

        <div class="load-pending-content">
            <div class="table-toolbar">
                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group">
                            <a href="{{ route('admin.users.create') }}" class="btn green-haze">
                                <i class="fa fa-plus"></i> Создать пользователя
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
                        <th>Имя</th>
                        <th>Роль</th>
                        <th>Статус</th>
                        <th>Создан</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="odd gradeX">
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{!! $user->isSuperAdmin() ? '<span class="font-green-dark">Супер-админ</span>' : $user->role_name !!}</td>
                            <td>{!! $user->isActive() ? '<span class="font-green-dark">Вкл</span>' : '<span class="font-red">Выкл</span>' !!}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                @if (!$user->isSuperAdmin() || Auth::user()->isSuperAdmin())
                                    <a href="{{ route('admin.users.edit', [$user->id]) }}" class="btn btn-outline btn-xs yellow" title="Редактировать пользователя"><i class="fa fa-edit"></i></a>
                                @else
                                    <a href="javascript:void(0);" class="btn btn-outline btn-xs grey" title="Вы не можете редактировать этого пользователя"><i class="fa fa-edit"></i></a>
                                @endif

                                @if (!$user->isSuperAdmin())
                                    <a href="{{ route('admin.users.destroy', [$user->id]) }}" data-method="DELETE" class="btn btn-outline btn-xs red confirm-btn" title="Удалить пользователя"><i class="fa fa-trash"></i></a>
                                @else
                                    <a href="javascript:void(0);" class="btn btn-outline btn-xs grey" title="Вы не можете удалить этого пользователя"><i class="fa fa-trash"></i></a>
                                @endif
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
    const usersTable = $('.table').dataTable({
        "columns": [
            {"orderable": true, "searchable": true},
            {"orderable": true, "searchable": true},
            {"orderable": true, "searchable": true},
            {"orderable": true, "searchable": true},
            {"orderable": true, "searchable": true},
            {"orderable": true, "searchable": true},
            {"orderable": false, "searchable": false}
        ],
        initComplete: function(settings, json) {
            // Инициализируем кнопку очистки для поля с поиском
            $('.dataTables_filter input').after($('<a href="javascript:void(0);" class="dt-filter-clear" title="Очистить поле"><i class="fa fa-times"></i></a>').on('click', function () {if (usersTable) { usersTable.fnFilter(''); }}));

            $('.load-pending-message').hide();
            $('.load-pending-content').show();
        }
    });
});
</script>
@endpush
