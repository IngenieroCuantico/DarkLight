<?php
include 'functions.php';
// Conexion a MYSQL Bases De Datos

$pdo = pdo_connect_mysql();


// Obtiene la pagina via por requerimiento con el metodo GET. (URL parametro ), si no existe, por defecto retoranara a la pagina 1

$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;



//numero de registros para recorrer paginas
$records_per_page = 5;


// preparacion de las consultas SQL y los registros contados de la tabla, llimitaciones para la determinacion de la pagina

$stmt = $pdo->prepare('SELECT * FROM contactos ORDER BY id LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();


// se trae todos los registros a la pantalla

$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);



// obtiene el total de numeros de contactos, esto determina el boton de siguiente

$num_contacts = $pdo->query('SELECT COUNT(*) FROM contactos')->fetchColumn();
?>

<?=template_header('Read')?>

<div class="content read">
	<h2>Lectura De Contactos</h2>
	<a href="create.php" class="create-contact">Creacion De Contactos</a>
	<table>
        <thead>
            <tr>
                <td>#</td>
                <td>Nombre</td>
                <td>Correo</td>
                <td>Telefono</td>
                <td>Titulo</td>
                <td>Fecha De Creacion</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?=$contact['id']?></td>
                <td><?=$contact['name']?></td>
                <td><?=$contact['email']?></td>
                <td><?=$contact['phone']?></td>
                <td><?=$contact['title']?></td>
                <td><?=$contact['created']?></td>
                <td class="actions">
                    <a href="update.php?id=<?=$contact['id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="delete.php?id=<?=$contact['id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
	<div class="pagination">
		<?php if ($page > 1): ?>
		<a href="read.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $num_contacts): ?>
		<a href="read.php?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
		<?php endif; ?>
	</div>
</div>

<?=template_footer()?>