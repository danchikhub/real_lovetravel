<?php

$latitude = DB::table('city')->value('latitude');    //координаты из бд
$longitude = DB::table('city')->value('longitude');
$map_scale = DB::table('city')->value('map_scale');
$name_city = DB::table('city')->value('name_city');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Метка на карте</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--
        Укажите свой API-ключ. Тестовый ключ НЕ БУДЕТ работать на других сайтах.
        Получить ключ можно в Кабинете разработчика: https://developer.tech.yandex.ru/keys/
    -->

    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<73ad5942-49f9-45bb-a3c1-f90e7b540bdb>" type="text/javascript"></script>


<script type="text/javascript">
    ymaps.ready(init);

function init() {

var longitude = '<?php echo $longitude; ?>';
var latitude = '<?php echo $latitude; ?>';
var map_scale = '<?php echo $map_scale; ?>';
var name_city = '<?php echo $name_city; ?>';

    var myMap = new ymaps.Map("map", {
            center: [longitude, latitude],
            zoom: map_scale
        }, {
            searchControlProvider: 'yandex#search'
        }),

    // Создаем геообъект с типом геометрии "Точка".
        myGeoObject = new ymaps.GeoObject()
        myPieChart = new ymaps.Placemark()

    myMap.geoObjects
        .add(myGeoObject)
        .add(myPieChart)

        .add(new ymaps.Placemark([longitude, latitude], {
            balloonContent: 'цвет <strong>носика Гены</strong>',
            iconCaption: name_city
        }, {
            preset: 'islands#greenDotIconWithCaption'
        }));
}

</script>

	<style>
        html, body, #map {
            width: 100%; height: 100%; padding: 0; margin: 0;
        }
    </style>
</head>
<body>
    <div id="map"></div>
</body>
</html>
