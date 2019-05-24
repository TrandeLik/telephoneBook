@extends('layouts.mainLayout')

@section('content')
<div class="col-12 col-md-5">
    <h2>{{ $thisContact -> profileName }}<br>
        <small>{{$thisContact -> job}}</small>
    </h2>
    <p>{{$thisContact -> description}}</p>
    <p>{{$thisContact -> email}}</p>

    <h3>Телефоны</h3>
    <ul>
        @foreach($thisContact -> phones as $phone)
            <li>
                {{ $phone->phone }}
                <a href="{{url('/phone/'.$phone -> id.'/delete')}}">Удалить</a>
            </li>
        @endforeach
        <li><a href="{{url('/contact/'.$thisContact -> id.'/add_phone')}}">Добавить</a></li>
    </ul>

    <h3>Сайты</h3>
    <ul>
        @foreach($thisContact -> webSites as $site)
            <li>
                {{ $site -> webSite }}
                <a href="{{url('/webSite/'.$site -> id.'/delete')}}">Удалить</a>
            </li>
        @endforeach
        <li><a href="{{url('/contact/'.$thisContact -> id.'/add_website')}}">Добавить</a></li>
    </ul>
</div>

    <a href="{{url('/contact/'.$thisContact -> id.'/edit')}}"><button class="btn btn-warning col-12 col-md-5">Изменить</button></a><br>
    <a href="{{url('/contact/'.$thisContact -> id.'/delete')}}"><button class="btn btn-danger col-12 col-md-5">Удалить</button></a><br><br>
    <a href="{{url('/')}}"><button class="btn btn-primary col-12 col-md-5">Назад</button></a>

@endsection