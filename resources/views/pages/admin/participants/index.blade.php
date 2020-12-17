    @extends('layouts.admin.master')

@section('title', 'Участники' . ($curator ? ' куратора "' . $curator->name . '"' : ''))

@section('content')
<div class="portlet light">
    <div class="portlet-body">
        <div class="load-pending-message">Загрузка...</div>

        <div class="load-pending-content">
            <table class="table table-striped table-bordered table-hover order-column">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Имя</th>
                        <th>Email</th>
                        <th>Соц. сеть</th>
                        <th>Зарегистрирован</th>
                        <th>Куратор</th>
                        <th>Шаг №</th>
                        <th>На текущем шаге</th>
                        <th>Ожидает ответ</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($participants as $participant)
                        <tr class="odd gradeX">
                            <td>{{ $participant->id }}</td>
                            <td>{{ $participant->name }}</td>
                            <td>{{ $participant->email }}</td>
                            <td>{!! $participant->getSocialIcon() !!}</td>
                            <td>{{ $participant->getVerificationDateTime() }}</td>
                            <td>
                                @if ($participant->curator)
                                    <a href="{{ route('admin.participants.edit', [$participant->id]) }}" title="Назначить участнику нового куратора" data-target="#modal" data-toggle="modal">{{ $participant->curator->name }}</a><br>
                                    {{ $participant->getCuratorAssignmentDate() }}
                                @elseif ($participant->isVerified())
                                    <a href="{{ route('admin.participants.edit', [$participant->id]) }}" title="Назначить участнику куратора" data-target="#modal" data-toggle="modal">Назначить</a>
                                @endif
                            </td>
                            <td>{{ $participant->step > 0 ? $participant->step : '' }}</td>
                            <td>{{ $participant->getCurrentStepTime() }}</td>
                            <td>{{ $participant->getCurrentStepReportTime() }}</td>
                            <td>
                                @if (!$participant->isVerified())
                                    <a href="{{ route('admin.participants.verify', [$participant->id]) }}" data-method="POST" class="btn btn-outline btn-xs green confirm-btn" title="Подтвердить участника"><i class="fa fa-check"></i></a>
                                @endif
                                <a href="{{ route('admin.participants.destroy', [$participant->id]) }}" data-method="DELETE" class="btn btn-outline btn-xs red confirm-btn" title="Архивировать участника"><i class="fa fa-trash"></i></a>
                                @if($participant->step && $participant->step == 7 && !$participant->graduate)
                                <a href="{{ route('admin.participants.graduate', [$participant->id]) }}" data-method="POST" class="btn btn-outline btn-xs green confirm-btn" title="Переместить в таблицу выпускников и архивировать участника"><i class="fa fa-check"></i></a>
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
    const participantsTable = $('.table').dataTable({
        columns: [
            {"orderable": true, "searchable": true},
            {"orderable": true, "searchable": true},
            {"orderable": true, "searchable": true},
            {"orderable": true, "searchable": true},
            {"orderable": true, "searchable": true},
            {"orderable": true, "searchable": true},
            {"orderable": true, "searchable": true},
            {"orderable": true, "searchable": true},
            {"orderable": true, "searchable": true},
            {"orderable": false, "searchable": false}
        ],
        pagingType: "bootstrap_full_number",
        dom: "<'row'<'col-md-6 col-sm-6'l><'col-md-6 col-sm-6'f>r><'row'<'col-md-5 col-sm-5'<'dt-filter-curator'>><'col-md-7 col-sm-7'p>><'table-scrollable't><'row'<'col-md-5 col-sm-5'i><'col-md-7 col-sm-7'p>>",
        initComplete: function(settings, json) {
            // Инициализируем фильтр куратора
            $('<label>Куратор: <select class="form-control input-sm input-inline"></select></label>').appendTo('.dt-filter-curator');
            @foreach ($curators as $curatorId => $curatorName)
                $('<option value="{{ $curatorId }}"{{ $curator && $curatorId == $curator->id ? ' selected' : '' }}>{{ $curatorName }}</option>').appendTo('.dt-filter-curator select');
            @endforeach
            $('.dt-filter-curator select').change(function (e, value) {
                const curator = $(this).val();
                window.location.href = '{{ route('admin.participants.index') }}' + (curator !== '' ? '?curator=' + curator : '');
            });

            // Инициализируем кнопку очистки для поля с поиском
            $('.dataTables_filter input').after($('<a href="javascript:void(0);" class="dt-filter-clear" title="Очистить поле"><i class="fa fa-times"></i></a>').on('click', function () {if (participantsTable) { participantsTable.fnFilter(''); }}));

            @if (!empty($modal = request('modal')))
                // Инициализируем модальную форму назначения участнику куратора
                $('#modal').modal('show').find('.modal-body').load('{!! $modal !!}');
            @endif

            $('.load-pending-message').hide();
            $('.load-pending-content').show();
        }
    });
});
</script>
@endpush
