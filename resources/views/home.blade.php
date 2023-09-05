<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>TABLE</title>
  </head>

  <body class="container mt-4">
    
    <div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Avatar</th>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th>AÇÃO</th>
                    <th>AÇÃO</th>
              </tr>                                 
            </thead>
  
            <tbody>
               @foreach($lista as $k => $item)
                <tr>

                                 
                    <td>{{$item->id}}</td>
                    <td><img src="{{asset($item->avatar)}}"class="img-fluid" height="auto" width="70px" ></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td><a href="{{route('editar',['id'=>$item->id])}}">Editar</a></td>
                    <td><a href="{{route('deletar',['id'=>$item->id])}}" class="deletar_btn">Deletar</a></td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        
    <div>
      <p> <a href="{{route('cadastrar')}}" class="btn btn-success">Cadastrar</a> </p>
    </div>

          
 <!-- Script jS -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 <!-- POPUP JS - DELETE -->
 <script>
     var linksDeletar = document.querySelectorAll('.deletar_btn');

    linksDeletar.forEach(function (link) {
    link.addEventListener('click', function (event) {
        event.preventDefault(); // Impede o link de seguir para o URL

        var confirmacao = confirm('Tem certeza de que deseja continuar?');

        if (confirmacao) {

            // O usuário clicou em "OK", você pode adicionar o código de ação aqui
            alert('Ação executada com sucesso!');
            window.location = link.href;
        } else {
            // O usuário clicou em "Cancelar" ou fechou o popup
            alert('Ação cancelada.');
        }
    });
    });
  </script>
        
  </body>
</html>