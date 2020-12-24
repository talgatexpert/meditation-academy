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
                    <th><a href="{{route('steps.1')}}">Шаг 1</a></th>
                    <th><a href="{{route('steps.2')}}">Шаг 2</a></th>
                    <th><a href="{{route('steps.3')}}">Шаг 3</a></th>
                    <th><a href="{{route('steps.4')}}">Шаг 4</a></th>
                    <th><a href="{{route('steps.5')}}">Шаг 5</a></th>
                    <th><a href="{{route('steps.6')}}">Шаг 6</a></th>
                    <th><a href="{{route('steps.7')}}">Шаг 7</a></th>
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
                            <td>{{$curator->graduate}}</td>
                        </tr>
                    @endforeach
                    @if($total)
                        <tr>
                            <td><b>Всего</b></td>
                            <td>{{ $total->participants }}</td>
                            <td>{{ $total->step1 }}</td>
                            <td>{{ $total->step2 }}</td>
                            <td>{{ $total->step3 }}</td>
                            <td>{{ $total->step4 }}</td>
                            <td>{{ $total->step5 }}</td>
                            <td>{{ $total->step6 }}</td>
                            <td>{{ $total->step7 }}</td>
                            <td>{{ $total->graduate }}</td>
                        </tr>
                    @endif
                @else
                    <tr class="odd">
                        <td valign="top" colspan="10" class="dataTables_empty text-center">Записи отсутствуют.</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
