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
                        <h1>Змінити рубрику</h1>
                        <span>Заповніть форму, натисніть зберегти.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title"> Змінити рубрику</h5>
                        </div>

                        <div class="card-body">
                            <p class="card-description">Змінити  <strong>рубрику </strong> </p>
                            <div class="example-container">
                                <div class="example-content">

                                    <form class="row g-3" action="{{route('admin.rubricstore')}}" method="post">
                                        @csrf
                                        <div class="col-12">
                                            <label for="inputTitle" class="form-label">Назва</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{old('name')}}" placeholder="Введіть назву">
                                            @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        {{--                                        <div class="col-12">--}}
                                        {{--                                            <label for="inputContent" class="form-label">Контент</label>--}}
                                        {{--                                            <textarea type="text" class="form-control @error('content') is-invalid @enderror" name="content" id="Content" value="{{old('content')}}" rows="5">--}}
                                        {{--                                            </textarea>--}}
                                        {{--                                            @error('content')--}}
                                        {{--                                            <div class="invalid-feedback">{{ $message }}</div>--}}
                                        {{--                                            @enderror--}}
                                        {{--                                        </div>--}}
                                        {{--                                        <div class="col-12">--}}
                                        {{--                                            <label for="inputContent" class="form-label">Оберіть рубрику зі списку: </label>--}}
                                        {{--                                            --}}{{--                                            <select type="text" class="js-states form-control @error('rubric_id') is-invalid @enderror" tabindex="-1" name="rubric_id" id="rubric_id style="display: none; width: 100%">--}}
                                        {{--                                            <select type="text" class="form-control @error('rubric_id') is-invalid @enderror" name="rubric_id" id="rubric_id">--}}
                                        {{--                                                <option>Оберіть рубрику зі списку: </option>--}}
                                        {{--                                                @foreach($rubrics as $k=>$v)--}}
                                        {{--                                                    <option value="{{$k}}"--}}
                                        {{--                                                            @if(old('rubric_id')==$k) selected @endif--}}
                                        {{--                                                    >{{$v}}</option>--}}
                                        {{--                                                @endforeach--}}
                                        {{--                                            </select>--}}
                                        {{--                                            @error('rubric_id')--}}
                                        {{--                                            <div class="invalid-feedback">{{ $message }}</div>--}}
                                        {{--                                            @enderror--}}
                                        {{--                                        </div>--}}
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
