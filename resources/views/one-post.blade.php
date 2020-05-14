<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('css\main.css')}}">
</head>
<body>
<div class="container">
<h1> {{$data->zag_post}}</h1>
    <div class="alert alert-info">
        <p>{{$data->opis_post}}</p>
        <p>{{$data->created_at}}</p>
        <table class="table table-bordered table-hover table-striped">
    <thead>

    </thead>
    <tbody>
        @foreach($data->img_post as $image)
        <img src="{{ asset('/image/'.$image) }}" style="height:120px; width:200px"/>
        @endforeach
    </tbody>

   </table>
   </br>
           </br>
        <a href="{{route('post-placemark', $data->id_post)}}"><button class="btn btn-primary">Отображение на карте</button></a> </br> </br>

        <a href="{{route('post-update', $data->id_post)}}"><button class="btn btn-primary">Редактировать</button></a> </br> </br>
        <a href="{{route('post-delete', $data->id_post)}}"><button class="btn btn-danger">Удалить</button></a>
</div>



</body>
</html>