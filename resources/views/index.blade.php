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
    <div class="header-section">
        <div class="container">
            <div class="header">
                <a href="#" class="logo">LoveTravel</a>
                <a href="{{ url('/') }}/login" class="come-in">Войти</a>
            </div>
            <div class="desc-web">
                <h1><span class="love">Love</span><span class="travel">Travel</span></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati ad sapiente aspernatur eligendi placeat praesentium eaque quo perspiciatis sed perferendis.</p>
            </div>
            <div class="city">
                <div class="chose-city">
                    <span >Выберите город:</span>
                            <select class="cities" id="state" required="">
                                <option value="">Choose</option>
                                <option>California</option>
                            </select>
                </div>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Поиск города" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0 btn-find-city" type="submit">Поиск</button>
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>