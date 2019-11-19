@extends('layouts.app')

@section('content')

    <h1>Форма обратной связи </h1>
    <form action="{{ URL::to('/upload') }}" enctype="multipart/form-data" method="post">

        <strong>Имя:</strong>
        <input type="text" name="name" class="form-control" placeholder="Имя">

        <strong>Email:</strong>
        <input type="text" name="email" class="form-control" placeholder="Email">

        <strong>Описание:</strong>
        <textarea class="form-control" style="height:150px" name="msg" placeholder="Сообщение"></textarea>

        <label for="file">Файл: <input type="file" name="file" value=""></label>
        <br/>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <br/>
        <button type="submit" class="btn btn-primary">Отправить</button>

    </form>

@endsection



</body>
</html>

