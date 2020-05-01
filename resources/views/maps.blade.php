<!DOCTYPE html>
<html>
<head>
<title>Maps</title>
<link rel="stylesheet" href="{{URL::asset('css\maps.css')}}">
<head>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=73ad5942-49f9-45bb-a3c1-f90e7b540bdb
&lang=ru_RU" type="text/javascript">
    </script>
</head>

</head>
<body>
<h1>ОСШ № 2 </h1>

<body>
    <div id="map" style="width: 600px; height: 400px"></div>
</body>

<script type="text/javascript">
    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    ymaps.ready(init);
    function init(){
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            // Координаты центра карты.
            // Порядок по умолчанию: «широта, долгота».
            // Чтобы не определять координаты центра карты вручную,
            // воспользуйтесь инструментом Определение координат.
            center: [42.74562566, 75.58967260],
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: 14
        });
    }
</script>

</html>
