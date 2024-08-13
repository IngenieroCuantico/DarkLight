<?php

include 'functions.php';

// Connect to MySQL database
$pdo = pdo_connect_mysql();

// Get the page via GET request (URL param: page), if non exists default the page to 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

// Number of records to show on each page
$records_per_page = 5;

// Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
$stmt = $pdo->prepare('SELECT * FROM noticias ORDER BY id LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();

// Fetch the records so we can display them in our template.
$noticias = $stmt->fetchAll(PDO::FETCH_ASSOC);


// Get the total number of contacts, this is so we can determine whether there should be a next and previous button7
// Obtiene el total de numero de noticias, para
$num_noticias = $pdo->query('SELECT COUNT(*) FROM noticias')->fetchColumn();
?>

<?=template_header('Read')?>

<div class="content read">
	<h2>Leer Noticias</h2>
	<a href="create.php" class="create-contact">Crear Noticia</a>


	<table>
        <thead>
            <tr>
                <td>#</td>
                <td>Nombre</td>
                <td>Contenido</td>
                <td>Telefono</td>
                <td>Correo</td>
                <td></td>
                <!--Creacion <td>Creacion</td> traer consultas desde la base de datos-->
            </tr>
        </thead>


        <tbody>
            <?php foreach ($noticias as $noticia): ?>
            <tr>
                <td><?=$noticia['id']?></td>
                <td><?=$noticia['nombre']?></td>
                <td><?=$noticia['contenido']?></td>
                <td><?=$noticia['telefono']?></td>
                <td><?=$noticia['correo']?></td>
                
                <td class="actions">
                    <a href="update.php?id_contacto=<?=$contacto['id_contacto']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="delete.php?id_contacto=<?=$contacto['id_contacto']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



	<div class="pagination">
		
        <?php
         if ($page > 1): 
         ?>
		<a href="read.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
		<?php endif; ?>

		<?php 
        if ($page * $records_per_page < $num_noticias): 
        ?>

		<a href="read.php?page=<?=$page+1?>"> <i class="fas fa-angle-double-right fa-sm"></i> 
            </a>
		<?php endif; ?>


	</div>
</div>

<?=template_footer()?>