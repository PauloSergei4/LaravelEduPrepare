<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ошибка 404 - Страница не найдена</title>
{{--    <link href=@if(Request::is('admin/*'))"./assets/css/error/style.css"  @else "/assets/css/error/style.css" @endif rel="stylesheet">--}}
    <link href="{{asset('/assets/css/error/style.css')}}"  rel="stylesheet">
</head>

<body>
<section class="error-404-section section-padding">
    <div class="error">
        <img src="{{'/assets/css/error/error404.png'}}" alt height="250">
    </div>
    <div class="error-message">
{{--        <h1>{{$exception->getMessage()}}</h1>--}}
        <h3>Ой! Сторінка не знайдена!</h3>
        <p>На превеликий жаль, таку сторінку не знайдено. Можливо, ви невірно ввели адресу.</p>
        <a href="{{route('home')}}" class="theme-btn">Повернутись на головну</a>
    </div>

</section>
</body>
</html>
