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
                        <h1>Створити нову рубрику</h1>
                        <span>Заповніть форму, натисніть зберегти.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title"> Створити нову рубрику</h5>
                        </div>

                        <div class="card-body">
                            <p class="card-description">Додати  <strong>нову </strong> рубрику</p>
                            <div class="example-container">
                                <div class="example-content">

                                    <form class="row g-3" action="{{route('admin.rubrics.store')}}" method="post">
                                        @csrf
                                        <div class="col-12">
                                            <label for="inputTitle" class="form-label">Назва</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{old('name')}}" placeholder="Введіть назву">
                                            @error('name')
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
