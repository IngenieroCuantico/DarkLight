<?php
function pdo_connect_mysql() {
    
	$DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'darklight';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'bdcorporacion';

	/**
	 * 
	 * Servidor Web00Host
	 * * $DATABASE_HOST = 'localhost';
	 * * $DATABASE_USER = 'id21145766_darklight'; 
	 * * $DATABASE_PASS = 'Detheslomejorr9119*';   
	 * * $DATABASE_NAME = 'id21145766_bdcorporacion';

	 */

    try {
    	
		return new PDO(
			
			'mysql:  host=' .$DATABASE_HOST. ';    dbname='. $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS
			
		);

    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Fallo Conexion a BD');
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
	</head>

	<body>
    
	<nav class="navtop">
    	<div>
    		<h1>Corporacion Dumar</h1>
            <a href="index.php"><i class="fas fa-home"></i>Home</a>
    		<a href="read.php"><i class="fas fa-address-book"></i>Contactos</a>
			<a href="readdenuncia.php"><i class="fas fa-paper-plane"></i>Denuncias</a>
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