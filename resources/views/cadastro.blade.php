<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

     <link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
     <!--ICONS-->
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Cadastro</title>

  </head>

  <body>

    <section class="container m-5 p-5">

<!--EXCEPTION-->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
             <form action="{{route('salvar')}}" method="post" enctype="multipart/form-data">
             @csrf

             <div class="container col-3">
             <h3>Cadastro de Cliente</h3>
             <div class="mt-3 mb-3">
                      <label for="titulo" class="form-label pt-1">Nome:</label>
                      <input type="text" class="form-control" name="txt_name">
                  </div>

                  <div class="mt-3 mb-3">
                      <label for="titulo" class="form-label pt-1">Email:</label>
                      <input type="email" class="form-control" name="email">
                  </div>

                  
                  <div class="mt-3 mb-1">
                      <label for="capa" class="form-label">Avatar (URL):</label>
                      <input type="file" name="img_avatar" accept="image/*">
                  </div>
                  
                  <button type="submit" class="btn btn-primary mt-3">Salvar</button>
            </form>


             </div>
                  
    </section>

      



    <!-- Script jS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>    


