@extends('layouts.mainLayout')

@section('content')

<form method="POST">
    <div class="form-group" class="col-12 col-md-5">
        @csrf
        <input class="form-control" type="text" name="webSite" required value="{{old('phone')}}" placeholder="Сайт"><br>
        <input type="submit" value="Добавить" class="btn btn-success">
    </div>
</form>

<a href="{{url('/contact/'.$contact -> id)}}"><button class="btn btn-primary col-12 col-md-5">Назад</button></a>
@endsection