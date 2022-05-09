@extends('admin.layouts.layout')
@section('title')
    {{$title}} - @parent
@endsection
@section('link')
    @parent
<link href="/admin/assets/plugins/highlight/styles/github-gist.css" rel="stylesheet">
<link href="/admin/assets/plugins/dropzone/min/dropzone.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Створити новий запис блогу</h1>
                        <span>Заповніть форму, натисніть зберегти.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title"> Створити новий запис блогу</h5>
                        </div>

                        <div class="card-body">
                            <p class="card-description">Додати  <strong>новину </strong> або запис блогу.</p>
                            <div class="example-container">
                                <div class="example-content">

                                    <form class="row g-3" action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-12">
                                            <label for="inputTitle" class="form-label">Назва</label>
                                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="Title" value="{{old('title')}}" placeholder="Введіть назву">
                                            @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputContent" class="form-label">Контент</label>
                                            <textarea type="text" class="form-control @error('content') is-invalid @enderror" name="content" id="Content" value="{{old('content')}}" rows="5">
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
                                                    @if(old('rubric_id')==$k) selected @endif
                                                    >{{$v}}</option>
                                                    @endforeach
                                            </select>
                                            @error('rubric_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputContent" class="form-label">Оберіть зображення:  </label>
                                            <div class="input-group mb-3">
{{--                                                <span class="input-group-text" id="basic-addon1">Изображение</span>--}}
                                                <input type="file" class="form-control-file" placeholder="Загрузить изображение" aria-label="Загрузить изображение" aria-describedby="basic-addon1" name="image">
{{--                                        <button type="button" class="btn btn-primary btn-sm">Выбрать изображение</button>--}}
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Зберегти</button>
                                        </div>
                                    </form>
{{--                                    <div class="row">--}}
{{--                                        <div class="col-12">--}}
{{--                                            <div class="card">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <div id="dropzone">--}}
{{--                                                        <form action="/upload" class="dropzone needsclick" id="demo-upload">--}}
{{--                                                            <div class="dz-message needsclick">--}}
{{--                                                                <button type="button" class="dz-button">Drop files here or click to upload.</button><br />--}}
{{--                                                                <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>--}}
{{--                                                            </div>--}}
{{--                                                        </form>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

    <script src="/admin/assets/plugins/dropzone/min/dropzone.min.js"></script>

@endsection


