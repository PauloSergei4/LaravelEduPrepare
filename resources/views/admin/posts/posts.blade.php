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
                                <th scope="col">Назва</th>
                                <th scope="col">Контент</th>
                                <th scope="col">Рубріка</th>
                                <th scope="col">Дата зміни</th>
                                <th scope="col">Змінити</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <th scope="row">{{$post->id}}</th>
                                <td>{{$post->title}}</td>
                                <td>{{Str::limit($post->content, 30)}}</td>
                                <td>{{$post->rubric->name}}</td>
                                <td>{{$post->getPostDate()}}</td>
                                <td><a href="{{route('admin.posts.edit', $post->id)}}"><button type="button" class="btn btn-primary btn-burger"><i class="material-icons">edit</i></button></a>
                                <a href="{{route('admin.posts.delete', $post->id)}}"><button type="button" class="btn btn-danger btn-burger"><i class="material-icons">delete_outline</i></button></a></td>
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
