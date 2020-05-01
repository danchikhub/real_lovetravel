<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
@foreach($data as $el)
<h1> {{$el->name_city}}</h1>
<p>{{$el->opis_city}}</p>
@endforeach
</body>
</html>