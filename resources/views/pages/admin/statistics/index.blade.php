@extends('layouts.admin.master')

@section('title', 'Статистика кураторов / Участников')

@section('content')
    <div class="portlet light">
        <div class="portlet-body">
            <h4>Статистика кураторов</h4>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>Имя куратора</th>
                    <th>Всего</th>
                    <th>Шаг 1</th>
                    <th>Шаг 2</th>
                    <th>Шаг 3</th>
                    <th>Шаг 4</th>
                    <th>Шаг 5</th>
                    <th>Шаг 6</th>
                    <th>Шаг 7</th>
                    <th>Выпускники за год</th>
                </tr>
                </thead>
                <tbody>
                @if($curators)
                @foreach ($curators as $curator)
                    <tr>
                        <td>{{$curator->name}}</td>
                        <td>{{$curator->participants_count}}</td>
                        <td>{{$curator->step1}}</td>
                        <td>{{$curator->step2}}</td>
                        <td>{{$curator->step3}}</td>
                        <td>{{$curator->step4}}</td>
                        <td>{{$curator->step5}}</td>
                        <td>{{$curator->step6}}</td>
                        <td>{{$curator->step7}}</td>
                        <td>{{$curator->graduated}}</td>
                    </tr>
                @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
