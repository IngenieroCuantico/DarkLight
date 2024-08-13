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


  <nav class="navbar navbar-expand-lg navbar-light bg-success">
    
    <div class="container-fluid">


      <a class="navbar-brand h1" href={{ route('empleado.index') }}>CRUD Empleados</a>

      <div class="justify-center ">
        <div class="col ">
          <a class="btn btn-sm btn-info" href={{ route('departamento.index') }}>Departamentos</a>
        </div>

      </div>
      <div class="justify-end ">
        <div class="col ">
          <a class="btn btn-sm btn-warning" href={{ route('empleado.create') }}>Adicionar Empleado</a>
        </div>
      </div>


    </div>
  </nav>



  <div class="container mt-5">
    <div class="row">
      @foreach ($empleados as $empleado)
        <div class="col-sm">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">{{ $empleado->id }}</h5>
            </div>
            <div class="card-body">
              <p class="card-text">{{ $empleado->nombre }}</p>
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $empleado->telefono }}</h5>
            </div>
            <div class="card-body">
              <p class="card-text">{{ $empleado->correo }}</p>
            </div>



            <div class="card-footer">
              <div class="row">
                <div class="col-sm">
                  <a href="{{ route('empleado.edit', $empleado->id) }}"
            class="btn btn-primary btn-sm">Editar</a>
                </div>

                <div class="col-sm">
                    <form action="{{ route('empleado.destroy', $empleado->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  
</body>
</html>