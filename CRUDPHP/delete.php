<?php
include 'functions.php';

$pdo = pdo_connect_mysql();

$msg = '';

// Checkea si el contacto con el ID existe
if (isset($_GET['id'])) {

    
    // Selecciona el registro , el cual se ira a eliminar
    $stmt = $pdo->prepare('SELECT * FROM contactos WHERE id = ?');

    $stmt->execute([$_GET['id']]);

    $contact = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$contact) {
        exit('No Existe Contacto / No Existe Contacto Con Ese ID!');
    }
    // Confirma Decision de eliminar
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // si el usuario oprime 'yes' . el registro se elimina confirmado
            $stmt = $pdo->prepare('DELETE FROM contactos WHERE id = ?');
            $stmt->execute([$_GET['id']]);
            $msg = 'Has Elimnado El Contacto';
        } else {
            // si el usuario orpimer 'no', el registro queda y el sistema lo redirecciona a la pagina
            header('Location: read.php');
            exit;
        }
    }
} else {
    exit('ID no especificada!');
}
?>
<?=template_header('Delete')?>

<div class="content delete">
	<h2>eliminar contacto #<?=$contact['id']?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Esta Seguro De Eliminar Contacto Con Identificacion : <?=$contact['id']?> ?</p>
    <div class="yesno">
        <a href="delete.php?id=<?=$contact['id']?>&confirm=yes">Yes</a>
        <a href="delete.php?id=<?=$contact['id']?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>

<?=template_footer()?>