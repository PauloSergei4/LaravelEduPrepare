@extends('admin.layouts.layoutUser')
@section('title')
    {{$title}} - @parent
@endsection
@section('content')
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="{{route('home')}}">Блог</a>
            </div>
            <p class="auth-description">Будь-ласка авторизуйтесь.<br>Не маєте акаунту? <a href="{{route('register')}}">Зареєструвати.</a></p>

            <div class="auth-credentials m-b-xxl">
                <form action="{{route('login')}}" method="post">
                    @csrf
                <label for="signInEmail" class="form-label">Email адреса</label>
                <input type="email" name="email" class="form-control m-b-md" id="signInEmail" aria-describedby="signInEmail" placeholder="example@gmail.com">

                <label for="signInPassword" class="form-label">Пароль</label>
                <input type="password" name="password" class="form-control" id="signInPassword" aria-describedby="signInPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary"> Авторизуватись</button>
                    </div>

                </form>
            </div>

            <div class="auth-submit">
{{--                <a href="#" class="btn btn-primary">Sign In</a>--}}
                <a href="#" class="auth-forgot-password float-end">Забули пароль?</a>
            </div>
{{--            <div class="divider"></div>--}}
            <div class="auth-alts">
                <a href="#" class="auth-alts-google"></a>
                <a href="#" class="auth-alts-facebook"></a>
{{--                <a href="#" class="auth-alts-twitter"></a>--}}
            </div>
        </div>
    </div>
@endsection
