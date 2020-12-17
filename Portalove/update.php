<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $meno = isset($_POST['meno']) ? $_POST['meno'] : '';
        $popis = isset($_POST['popis']) ? $_POST['popis'] : '';
        $image_path = isset($_POST['image_path']) ? $_POST['image_path'] : '';
        // Update the record
        $stmt = $pdo->prepare('UPDATE vtaky SET id = ?, meno = ?, popis = ?, image_path = ? WHERE id = ?');
        $stmt->execute([$id, $meno, $popis, $image_path, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM vtaky WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>
<?=template_header('Read')?>

<div class="content update">
    <h2>Update #<?=$contact['id']?></h2>
    <form action="update.php?id=<?=$contact['id']?>" method="post">
        <label for="id">ID</label>
        <label for="name">Name</label>
        <input type="text" name="id" placeholder="1" value="<?=$contact['id']?>" id="id">
        <input type="text" name="meno" placeholder="John Doe" value="<?=$contact['meno']?>" id="meno">
        <label for="email">Popis</label>
        <label for="phone">Obrazok</label>
        <input type="text" name="popis" placeholder="johndoe@example.com" value="<?=$contact['popis']?>" id="popis">
        <input type="text" name="image_path" placeholder="2025550143" value="<?=$contact['image_path']?>" id="image_path">
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
        <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>
