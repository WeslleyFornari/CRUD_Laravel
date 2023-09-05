<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
  <!--ICONS-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <title>Editar</title>

</head>

<body>

  <section div class="container pt-5" style="margin-left: 500px;">

        <div class="col-4">

        <h3>Editar Informações</h3>
        <form action="{{route('update',['id'=>$user->id])}}" method="post" enctype="multipart/form-data">
        @csrf

            <div class="mt-4 ms-5">
                <img src="{{asset($user->avatar)}}" style="height:auto; width:180px;">
            </div> 

            <div class=" mt-3 mb-3">
              <input type="text" size="30" name="txtname" value="{{$user->name}}">
            </div>

            <div class="mt-3 mb-3">
              <input type="email" size="30" name="email" value="{{$user->email}}">
            </div>


            <div class="mt-3 mb-1">
              <label for="capa" class="form-label">Avatar (URL):</label>
              <input type="file" name="img_avatar">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
        </div>


</section>

  <!-- Script jS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>