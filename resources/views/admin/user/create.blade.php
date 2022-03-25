@extends('admin.layouts.layoutUser')
@section('title')
    {{$title}} - @parent
@endsection
@section('content')
    <div class="app app-auth-sign-up align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">
        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Блог </a>
            </div>
            <p class="auth-description">Введіть дані реєстрації. Або маєте акаунт? <a href="sign-in.html">Увійти</a></p>

            <div class="auth-credentials m-b-xxl">
                <form action="{{route('register.store')}}" method="post">
                    @csrf
                    <label for="name" class="form-label">Ім'я користувача</label>
                    <input type="name" name="name" class="form-control m-b-md" id="signUpUsername" placeholder="Введіть ім'я користувача" value="{{old('name')}}">
                    <label for="email" class="form-label">Email адреса</label>
                    <input type="email" name="email" class="form-control m-b-md" id="email" placeholder="example@neptune.com" value="{{old('email')}}">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" name="password" class="form-control" id="password"  placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                    <div id="password" class="form-text">Пароль повинен містити не менше 8 символів*</div>
{{--                    <label for="password" class="form-label">Пароль</label>--}}
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
<div class="mt-3">
    <button type="submit" class="btn btn-primary"> Зареєструватись</button>
</div>


                </form>
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
