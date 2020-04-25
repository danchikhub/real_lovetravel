@extends('layouts.main')
@section('title-block')
    Все города
@endsection
@section('content')
<h1>Посты пользователей</h1>
@foreach($data as $el)
    <div class="alert alert-info">
        <h3>{{ $el->subject }}</h1>
        <p> <small>{{ $el->avtor}}</small> </p>
        <p>{{$el->created_at}}</p>
        <a href="{{route('contact-data-one',$el->id)}}"><button class="btn btn-warning">Подробнее</button></a>
    </div>
@endforeach
@endsection
