<?php

include 'functions.php';

$pdo = pdo_connect_mysql();

$msg = '';

// Check if POST data is not empty
if (!empty($_POST)) {
    
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id_contacto']) && !empty($_POST['id_contacto']) && $_POST['id_contacto'] != 'auto' ? $_POST['id_contacto'] : NULL;

    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $name = isset($_POST['nombre_contacto']) ? $_POST['nombre_contacto'] : '';
    $email = isset($_POST['correo_contacto']) ? $_POST['correo_contacto'] : '';
    $phone = isset($_POST['telefono_contacto']) ? $_POST['telefono_contacto'] : '';
    $title = isset($_POST['observacion_contacto']) ? $_POST['observacion_contacto'] : '';
    $created = isset($_POST['creacion_contacto']) ? $_POST['creacion_contacto'] : date('Y-m-d H:i:s');
    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO contactos VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id, $name, $email, $phone, $title, $created]);
    // Output message
    $msg = 'Creado Satisfactoriamente';
}
?>

<?=template_header('Create')?>

<div class="content update">
	<h2>Crear Contacto</h2>

    <form action="create.php" method="post">
       
        <label for="id">Identificacion</label>
        <label for="name">Nombre</label>
        <input type="text" name="id_contacto" placeholder="26" id="id_contacto">
        <input type="text" name="nombre_contacto" placeholder="John Doe" id="nombre_contacto">
        <label for="email">Correo_Electronico</label>
        <label for="phone">Telefono</label>
        <input type="text" name="correo_contacto" placeholder="johndoe@example.com" id="correo_contacto">
        <input type="text" name="telefono_contacto" placeholder="2025550143" id="telefono_contacto">
        <label for="title">Observacion</label>
        <label for="created">Creacion</label>
        <input type="text" name="observacion_contacto" placeholder="Employee" id="observacion_contacto">

        <input type="datetime-local" name="creacion_contacto" value="<?=date('Y-m-d\TH:i')?>" id="creacion_contacto">
        <input type="submit" value="Crear">

    </form>

    <?php
     if ($msg): 
    ?>
    <p>
        <?=$msg?>
    </p>
    <?php 
    endif;
     ?>
</div>

<?=template_footer()?>