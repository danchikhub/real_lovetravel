

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
<div class="city-div pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    
@foreach($post as $posts)
        <h3>{{$posts->zag_post}}</h3>
    @endforeach
    
    
</div>


</body>
</html>