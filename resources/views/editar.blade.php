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

    <title>Inserir</title>

  </head>

  <body>

    <div class="container pt-5">

        <form action="{{route('update',['id'=>$user->id])}}" method="post">
          @csrf
            <div><input type="text" name="txtname" value="{{$user->name}}"  placeholder="Nome"></div>
            <div><input type="email" name="txtemail" value="{{$user->email}}"   placeholder="email"></div>

              
            <div>
                <input type="submit" value="Salvar">
            </div>
            
        </form>


        

    </div>



    <!-- Script jS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>    


