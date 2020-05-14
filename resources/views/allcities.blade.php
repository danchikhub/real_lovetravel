<!DOCTYPE html>
<html>
<body>
<h1>Отображение городов</h1>

@foreach ($cities as $city)
    <div class="alert alert-info">
        <h3>{{ $city->name_city }}</h1>
        <p> <small>{{ $city->opis_city}}</small> </p>
        <p>{{$city->created_at}}</p>
        <a href="placemark"><button class="btn">Отображение на карте</button></a></a>
    </div>
@endforeach

</body>
</html>