<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- <link rel="stylesheet" href="{{URL::asset('css\addcity.css')}}"> -->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <title>Добавить пост</title>
</head>
<body>
    <div class="container">
        

        <form action="{{ route('post-form') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ csrf_field()}}
            <div class="form-group">
                <label for="name_post">Введите заголовок поста</label>
                <input type="text" name="name_post" placeholder="Введите название города" id="name_post" class="form-control">
            </div>


            <div class="form-group">
                <label for="opis_post">Описание поста</label>
                <input type="text" name="opis_post" placeholder="Введите описание города" id="opis_post" class="form-control">
            </div>

            <!-- <div class="form-group">
                <label for="opis_post">Описание поста</label>
                <input type="text" name="opis_post" placeholder="Введите описание города" id="opis_post" class="form-control">
            </div> -->
            <select name="ejo" id="" class="form-control">
                <option value="1">Еда</option>
                <option value="2">Жилье</option>
                <option value="3">Отдых</option>
            </select>
            <select name="id_city" class="form-control">
	            @foreach ($city_name as $city)
	                <option value="{{ $city->id_city }}">{{ $city->name_city }}</option>
	            @endforeach
	        </select>

            

            <div class="input-group control-group increment" >
                <input type="file" name="img_post[]" class="form-control">
                <div class="input-group-btn">
                    <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                </div>
            </div>
            <div class="clone hide">
            <div class="control-group input-group" style="margin-top:10px">
                <input type="file" name="img_post[]" class="form-control">
                <div class="input-group-btn">
                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                </div>
            </div>
            </div>

            <button type="submit" class="btn btn-success">Отправить</button>
        </form>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){
          var html = $(".clone").html();
          $(".increment").after(html);
      });
      $("body").on("click",".btn-danger",function(){
          $(this).parents(".control-group").remove();
      });
    });
</script>

</body>
</html>