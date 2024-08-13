<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1

if (isset($_GET['id_contacto'])) 
    

    {

    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id_contacto']) ? $_POST['id_contacto'] : NULL;
        $name = isset($_POST['nombre_contacto']) ? $_POST['nombre_contacto'] : '';
        $email = isset($_POST['correo_contacto']) ? $_POST['correo_contacto'] : '';
        $phone = isset($_POST['telefono_contacto']) ? $_POST['telefono_contacto'] : '';
        $title = isset($_POST['observacion_contacto']) ? $_POST['observacion_contacto'] : '';
        $created = isset($_POST['creacion_contacto']) ? $_POST['creacion_contacto'] : date('Y-m-d H:i:s');
        // Update the record
        $stmt = $pdo->prepare('UPDATE contactos SET id_contacto = ?, nombre_contacto = ?, correo_contacto = ?, telefono_contacto = ?, observacion_contacto = ?, creacion_contacto = ? WHERE id_contacto = ?');
        $stmt->execute([$id, $name, $email, $phone, $title, $created, $_GET['id_contacto']]);
        $msg = 'Actualizado Satisfactoriamente!';
    }
    
    
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM contactos WHERE id_contacto = ?');
    
    $stmt->execute([$_GET['id_contacto']]);

    $contacto = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$contacto) {
        exit('contacto  no existe \'t Existente con esta ID!');
    }
} else {
    exit('No ID No Especificada!');
}
?>

<?=template_header('Read')?>

<div class="content update">
	
<h2>Modificar Contacto #<?=$contacto['id_contacto']?></h2>

    <form action="update.php?id_contacto=<?=$contacto['id_contacto']?>" method="post">
        <label for="id">ID</label>
        <label for="name">Nombre</label>
        <input type="text" name="id_contacto" placeholder="1" value="<?=$contacto['id_contacto']?>" id="id_contacto">
        <input type="text" name="nombre_contacto" placeholder="John Doe" value="<?=$contacto['nombre_contacto']?>" id="nombre_contacto">
        <label for="email">Correo</label>
        <label for="phone">Telefono</label>
        <input type="text" name="correo_contacto" placeholder="johndoe@example.com" value="<?=$contacto['correo_contacto']?>" id="correo_contacto">
        <input type="text" name="telefono_contacto" placeholder="2025550143" value="<?=$contacto['telefono_contacto']?>" id="telefono_contacto">
        <label for="title">Observacion</label>
        <label for="created">Creacion</label>
        <input type="text" name="observacion_contacto" placeholder="Employee" value="<?=$contacto['observacion_contacto']?>" id="observacion_contacto">
        <input type="datetime-local" name="creacion_contacto" value="<?=date('Y-m-d\TH:i', strtotime($contacto['creacion_contacto']))?>" id="creacion_contacto">
        <input type="submit" value="Actualizacion Contacto">
    </form>

    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>