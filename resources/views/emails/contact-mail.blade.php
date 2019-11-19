<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>
{{ csrf_field() }}
<h1>Форма обратной связи </h1>
<p>Имя: {{$name}}</p>
<p>Email: {{$email}}</p>
<p>Сообщение: {{$msg}}</p>
<p>Файл: {{$file}}</p>
</body>
</html>
