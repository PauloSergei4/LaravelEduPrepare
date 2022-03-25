<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts Create</title>
</head>
<body>
<h1>Posts Create</h1>
<form action="{{route('posts.store')}}" method="post">
    @csrf
    <input type="text" name="subject">
    <input type="text" name="text">
    <button type="submit"> Submit</button>
</form>
</body>
</html>
