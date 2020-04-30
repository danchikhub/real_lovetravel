@extends('layout')
@section('content')
<div class="row">
  <div class="col-md-6 offset-md-3">
    @if($message = Session::get('danger'))
    <div class="alert alert-danger">
      <strong>{{ $message }}</strong>
    </div>
    @endif
    <form action="{{ action('PostController@store')}}" method="post">
      @csrf
      <div class="form-group">
        <label>Заголовок поста</label>
        <input class="form-control" type="text" name="title"/>
      </div>
      <div class="form-group">
        <label>Описание поста</label>
        <textarea class="form-control" type="text" name="desc"/></textarea>
      </div>
      <div class="form-group">
        <label>Автор</label>
        <input class="form-control" type="text" name="author"/>
      </div>
      <button class="btn btn-primary" type="submit">Добавить</button>
    </form>
  </div>
</div>
@endsection