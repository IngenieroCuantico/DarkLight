<?php
include 'functions.php';

$pdo = pdo_connect_mysql();

$msg = '';

// Checkea que el post no este vacio
if (!empty($_POST)) {
    
    //envio del formulario no vacio para insertar el nuevo registro

    

    //instalo las variables para insertar, checkeamos las validaciones correspondientes enviadas por el POST. y enviando la informacion a la pagina correspondiente
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;

    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');

    // Inserta el registro en la tabla

    $stmt = $pdo->prepare('INSERT INTO contactos VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id, $name, $email, $phone, $title, $created]);

    // Mensaje De Salida
    $msg = 'Creado Satisfactoriamente!';
}
?>

<?=template_header('Create')?>

<div class="content update">
	<h2>Crear Empleado</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <label for="name">Nombre</label>
        <input type="text" name="id" placeholder="26" value="auto" id="id">
        <input type="text" name="name" placeholder="Nombre Empleado" id="name">
        <label for="email">Correo</label>
        <label for="phone">Telefono</label>
        <input type="text" name="email" placeholder="ejemplo@gmail.com" id="email">
        <input type="text" name="phone" placeholder="Numero Telefonico" id="phone">
        <label for="title">Titulo</label>
        <label for="created">Creacion</label>
        
        <input type="text" name="title" placeholder="Creacion Empleado" id="title">
        <input type="datetime-local" name="created" value="<?=date('Y-m-d\TH:i')?>" id="created">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>