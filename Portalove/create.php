<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $meno = isset($_POST['meno']) ? $_POST['meno'] : '';
    $popis = isset($_POST['popis']) ? $_POST['popis'] : '';
    $image_path = isset($_POST['image_path']) ? $_POST['image_path'] : '';
    // Insert new record into the vtaky table
    $stmt = $pdo->prepare('INSERT INTO vtaky VALUES (?, ?, ?, ?)');
    $stmt->execute([$id, $meno, $popis, $image_path]);
    // Output message
    $msg = 'Created Successfully!';
}
?>
<?=template_header('Create')?>

<div class="content update">
    <h2>Create</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <label for="name">Name</label>
        <input type="text" name="id" placeholder="26" value="auto" id="id">
        <input type="text" name="meno"  id="meno">
        <label for="email">Popis</label>
        <label for="phone">Obrazok</label>
        <input type="text" name="popis"  id="popis">
        <input type="text" name="image_path" placeholder="img/Vtaky/Kakapo.jpg" id="image_path">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
        <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>
