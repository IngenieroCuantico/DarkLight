

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Registro</title>
</head>

<body>
  

<nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand h1" >Registrar</a>
      <div class="justify-end ">
   
      </div>
    </div>
  </nav>


 
 @if($errors->any())
 <div>

    <div>
    Something went wrong!!
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
    


    <form action "/registrar" mehotd = "post">
    @csrf

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}" autofocus>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" autofocus>

                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" autofocus>

                </div>
                <div class="form-group">
                    <label for="password_confirmation">Password Confirmacion</label>
                    <input type="password_confirmation" class="form-control" id="password_confirmation" name="password_confirmation" value="{{old('password_confirmation')}}" autofocus>

                </div>
                <div class="form-group">
                    <label for="recuerdame">

                    <span class=""> Recuerdame</span>
                    <input id="recuerdame" type="chechkbox" class="form-control" name="recuerdame">
                
                    </label>
                
                </div>
                
                    <button type="submit" class="btn mt-3 btn-success">Registrar</button>
               

    </form>

      </div>
  </div>
</div>

</body>
</html>