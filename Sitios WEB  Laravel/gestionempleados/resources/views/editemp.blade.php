

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Empleados</title>
</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand h1" href={{ route('empleado.index') }}>CRUD Empleados</a>
      <div class="justify-end ">
       <!-- <div class="col ">
          <a class="btn btn-sm btn-success" href={{ route('departamento.create') }}>Adicionar Departamento</a>
        </div>-->
      </div>
    </div>
  </nav>


<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">

      <h3>Modificar Empleados</h3>

     <!--Formulario para la edicion de empleado-->
     
      <form action="{{ route('empleado.update', $empleado->id) }}" method="post">
        @csrf
        
        @method('PUT')

        <div class="form-group">
          <label for="title">Id </label>
          <input type="text" class="form-control" id="id" name="id"
            value="{{ $empleado->id }}" required>
        </div>


        <div class="form-group">
          <label for="body">Nombre</label>
          <textarea class="form-control" id="nombre" name="nombre" rows="3" required>{{ $empleado->nombre }}</textarea>
        </div>

        
        <div class="form-group">
          <label for="body">Telefono</label>
          <textarea class="form-control" id="telefono" name="telefono" rows="3" required>{{ $empleado->telefono }}</textarea>
        </div>

        
        <div class="form-group">
          <label for="body">Correo</label>
          <textarea class="form-control" id="correo" name="correo" rows="3" required>{{ $empleado->correo }}</textarea>
        </div>


        <button type="submit" class="btn mt-3 btn-primary">Actualizar Empleado</button>
      </form>
    </div>
  </div>
</div>



</body>
</html>