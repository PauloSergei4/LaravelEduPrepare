@extends('layouts.layout')
@section('title')
{{$title ?? 'Персональний блог' }} - @parent
@endsection
@section('links')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection
@section('content')

<h1>{{$exception->getMessage()}}</h1>
<div class="app app-error align-content-stretch d-flex flex-wrap">
    <div class="app-error-info">
        <h5>Вибачте!</h5>
        <span>Такої сторінки не існує<br>
                Завітайте будь-ласка пізніше.</span>
        <a href="{{route('home')}}" class="btn btn-dark">Перейти на головну</a>
    </div>
    <div class="app-error-background"></div>
</div>
@endsection
