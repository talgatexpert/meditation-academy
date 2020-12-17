@extends('layouts.admin.master')

@section('title', 'Статистика опросов')

@section('content')
<div class="portlet light">
    <div class="portlet-body">
        <h4>Истории успеха участников курса</h4>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Кол-во голосов</th>
                    <th>Процент голосов</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($polls['reasons'] as $poll)
                    <tr>
                        <td>{{ $poll['name'] }}</td>
                        <td>{{ $poll['count'] }}</td>
                        <td>{{ $poll['percent'] }}%</td>
                    </tr>
                @endforeach
                <tr>
                    <td class="bold">Итого</td>
                    <td class="bold">{{ $total['reasons'] }}</td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <h4>Страницы заданий</h4>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Кол-во голосов</th>
                    <th>Процент голосов</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($polls['steps'] as $poll)
                    <tr>
                        <td>{{ $poll['name'] }}</td>
                        <td>{{ $poll['count'] }}</td>
                        <td>{{ $poll['percent'] }}%</td>
                    </tr>
                @endforeach
                <tr>
                    <td class="bold">Итого</td>
                    <td class="bold">{{ $total['steps'] }}</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
