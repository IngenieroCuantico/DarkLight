<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Departamentos</title>
</head>


<body>

<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand h1" href={{ route('departamento.index') }}>CRUD Departamento</a>
        
</nav>

<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">

        <div class="card">
            <div class="card-header">
                <h5 class="card-title">{{ $departamento->id }}</h5>
            </div>

            <div class="card-body">
                <p class="card-text">{{ $departamento->nombre }}</p>
            </div>

            <div class="card-footer">
                <a href="{{ route('departamento.edit', $departamento->id) }}" class="btn btn-primary btn-sm">Editar</a>
                <form action="{{ route('departamento.destroy', $departamento->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>


</html>