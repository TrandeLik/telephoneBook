@extends('layouts.mainLayout')

@section('content')

    <form method="POST">
        <div class="form-group" class="col-12 col-md-5">
            @csrf
            <input class="form-control" type="text" name="profileName" value="{{$contact -> profileName}}" placeholder="Имя"><br>
            <input class="form-control" type="text" name="job" value="{{$contact -> job}}" placeholder="Компания"><br>
            <input class="form-control" type="text" name="email" value="{{$contact -> email}}" placeholder="Почта"><br>
            <textarea class="form-control" name="description" placeholder="Описание">{{$contact -> description}}</textarea><br>
            <input class="btn btn-success col-12 col-md-5" type="submit" value="Изменить">
        </div>
    </form>
    <a href="{{url('/')}}"><button class="btn btn-primary col-12 col-md-5">Назад</button></a>
@endsection