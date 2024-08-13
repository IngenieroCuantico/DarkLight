

<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Login</title>

</head>

<body>
  <br>

<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
      <a class="navbar-brand h1" >Registrar Usuario</a>
      <div class="justify-end ">
   
      </div>
    </div>
  </nav>


 
 @if($errors->any())
  <div>

    <div>
    Existe un error en registrar el usuario!!
    </div>

    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>

  </div>
 @endif

 <div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">


    <!--Creacion De Formulario--> 
    <form action "{{route('registrar.store')}}" method = "post">
      @csrf


                <div class="form-group">
                    <label for="nombre">ID</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{old('identifiacion')}}" autofocus>
                </div>

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}" autofocus>
                </div>

                <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" autofocus>

                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" autofocus>

                </div>
                <!--

                <div class="form-group">
                    <label for="password_confirmation">Confirmacion Contraseña</label>
                    <input type="password_confirmation" class="form-control" id="password_confirmation" name="password_confirmation" value="{{old('password_confirmation')}}" autofocus>

                </div>
                -->           
                <div class="form-group">
                    <button type="submit" class="btn mt-3 btn-success">Registrar</button>
               

        </form>
        
                     <button type="submit" class="btn mt-3 btn-success">Ingresar</button>
                </div>

      </div>
  </div>
</div>

</body>
</html>


<!--TRASH-->
 <!-- <label for="recuerdame">

                    <span class=""> Recuerdame</span>
                    <input id="recuerdame" type="chechkbox" class="form-control" name="recuerdame">
                


                     <div class="form-group">
                    <label for="password_confirmation">Confirmacion Contraseña</label>
                    <input type="password_confirmation" class="form-control" id="password_confirmation" name="password_confirmation" value="{{old('password_confirmation')}}" autofocus>

                </div>
                    </label>-->
