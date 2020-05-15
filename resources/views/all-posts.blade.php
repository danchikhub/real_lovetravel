<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('css\addcity.css')}}">
</head>
<body>
<div class="container">
<h1>Посты пользователей</h1>
@foreach($data as $el)
    <div class="alert alert-info">
        <h3>{{ $el->zag_post }}</h1>
        <p> <small>{{ $el->opis_post}}</small> </p>
        <p>{{$el->created_at}}</p>
        <a href="{{route('post-data-one',$el->id_post)}}"><button class="btn btn-warning">Подробнее</button></a>
    </div>
@endforeach
</div>



</body>
</html>