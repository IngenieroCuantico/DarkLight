<?php
include 'functions.php';

$pdo = pdo_connect_mysql();
$msg = '';
// Check that the contact ID exists
if (isset($_GET['id_contacto'])) {
    // Select the record that is going to be deleted
    $stmt = $pdo->prepare('SELECT * FROM contactos WHERE id_contacto = ?');
    $stmt->execute([$_GET['id_contacto']]);

    $contactovar = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contactovar) {
        exit('Contacto No Existe\'t Exite con esta ID');
    }
    // Make sure the user confirms beore deletion
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // User clicked the "Yes" button, delete record
            $stmt = $pdo->prepare('DELETE FROM contactos WHERE id_contacto = ?');
            $stmt->execute([$_GET['id_contacto']]);
            $msg = 'tu has borrado el contacto definitivamente!';
        } else {
            // User clicked the "No" button, redirect them back to the read page
            header('Location: read.php');
            exit;
        }
    }
} else {
    exit('ID no especificado!');
}
?>
<?=template_header('Delete')?>

<div class="content delete">
	<h2>Eliminar Contacto #<?=$contactovar['id_contacto']?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Esta Seguro De Eliminar El Contacto , Esta Seguro? Contacto #<?=$contactovar['id_contacto']?>?</p>
    <div class="yesno">
        <a href="delete.php?id_contacto=<?=$contactovar['id_contacto']?>&confirm=yes">Yes</a>
        <a href="delete.php?id_contacto=<?=$contactovar['id_contacto']?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>

<?=template_footer()?>