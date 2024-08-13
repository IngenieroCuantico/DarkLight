<?php
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'crudphpmysql';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	
		//si aqui se genera un error con la conezion, se detiene el script y la pantalla a error.

    	exit('Conexion Fallada');
    }
}
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		 crossorigin="anonymous"></script>


	</head>
	<body>
    <nav class="navtop">
    	<div>
    		<h1>CRUD PHP </h1>
            <a href="index.php"><i class="fas fa-home"></i>Inicio</a>
    		<a href="read.php"><i class="fas fa-address-book"></i>Contactos</a>
    	</div>
    </nav>
EOT;
}


function template_footer() {
echo <<<EOT
    </body>
</html>
EOT;
}
?>