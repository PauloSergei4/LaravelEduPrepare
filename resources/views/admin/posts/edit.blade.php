@extends('admin.layouts.layout')
@section('title')
    {{$title}} - @parent
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Оновити запис блогу</h1>
                        <span>Заповніть форму, натисніть зберегти.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title"> Оновити запис блогу</h5>
                        </div>

                        <div class="card-body">
                            <p class="card-description">Оновити  <strong>новину </strong>"{{$post->title}}"</p>
                            <div class="example-container">
                                <div class="example-content">

                                    <form class="row g-3" action="{{route('admin.posts.update', $post->id)}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="col-12">
                                            <label for="inputTitle" class="form-label">Назва</label>
                                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="Title" value="{{$post->title}}" placeholder="Введіть назву">
                                            @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputContent" class="form-label">Контент</label>
                                            <textarea type="text" class="form-control @error('content') is-invalid @enderror" name="content" id="Content" rows="5">{{$post->content}}
                                            </textarea>
                                            @error('content')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputContent" class="form-label">Оберіть рубрику зі списку: </label>
                                            {{--                                            <select type="text" class="js-states form-control @error('rubric_id') is-invalid @enderror" tabindex="-1" name="rubric_id" id="rubric_id style="display: none; width: 100%">--}}
                                            <select type="text" class="form-control @error('rubric_id') is-invalid @enderror" name="rubric_id" id="rubric_id">
                                                <option>Оберіть рубрику зі списку: </option>
                                                @foreach($rubrics as $k=>$v)
                                                    <option value="{{$k}}"
                                                            @if($post->rubric_id==$k) selected @endif
                                                    >{{$v}}</option>
                                                @endforeach
                                            </select>
                                            @error('rubric_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Зберегти</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
