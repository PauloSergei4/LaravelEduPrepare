@extends('admin.layouts.layout')
@section('title')
    {{$title}} - @parent
@endsectionі
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Перелік записів блогу</h1>
                        <span>Всі записи блогу.</span>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-dark">
                                <tr>
                                    <th scope="col">№</th>
                                    <th scope="col">Назва рубріки</th>
                                  <th scope="col">Дата зміни</th>
                                    <th scope="col">Змінити</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($rubrics as $rubric)
                                    <tr>
                                        <th scope="row">{{$rubric->id}}</th>
                                        <td>{{$rubric->name}}</td>
{{--                                        <td>{{Str::limit($post->content, 30)}}</td>--}}
{{--                                        <td>{{$post->$rubric->name}}</td>--}}
                                        <td>{{$rubric->getRubricDate()}}</td>
                                        <td><a href="#">Змінити</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
