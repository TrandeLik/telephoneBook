@extends('layouts.mainLayout')

@section('content')
<div class="col-12 col-md-5">
    <ul>
        @foreach($allContacts as $contact)
                <li><a href="{{url('contact/'.$contact -> id)}}">{{$contact -> profileName}}</a> @if ($contact -> job) ({{$contact -> job}}) @endif</li>
        @endforeach
    </ul>
    <a href="{{url('/add')}}" ><button class="btn btn-primary">Добавить</button></a>
</div>
@endsection
