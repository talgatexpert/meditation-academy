@extends('layouts.admin.master')

@section('title', 'Подпичсчики')

@section('content')
    <div class="portlet light">
{{--        <a href="{{ route('admin.subscribers.post') }}">Написать письмо</a>--}}
        <div class="portlet-body">
            <div class="load-pending-message">Загрузка...</div>

            <div class="load-pending-content">

                <table class="table table-striped table-bordered table-hover order-column">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Email</th>
                        <th>Создан</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr class="odd gradeX">
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>{{ $user->active ? 'Подписан' : 'Отписан' }}</td>
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
