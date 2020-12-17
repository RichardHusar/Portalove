<?php
include_once("classes/DB.php");

use classes\DB;

$db = new DB("localhost", "root", "", "Databazis", 3306);
$onasItems = $db->getOnasItems();
?>
<?php
foreach ($onasItems as $key => $onasItem) {
    if ($onasItem['meno'] === 'External') {
        ?>
    <div class="container-fluid js-tm-page-content tm-page-width" data-page-no="5">
        <div class="row">
            <div class="col-xs-12">
                <div class="tm-flex">
                    <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-textbox-padding tm-white-box-margin-b">
                        <h2 class="tm-text-title"><?php echo $onasItem['meno']; ?></h2>
                        <p class="tm-text"><?php echo $onasItem['popis']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div class="container-fluid js-tm-page-content tm-page-width" data-page-no="5">
            <div class="row">
                <div class="col-xs-12">
                    <div class="tm-flex">
                        <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-textbox-padding tm-white-box-margin-b">
                            <h2 class="tm-text-title"><?php echo $onasItem['meno']; ?></h2>
                            <p class="tm-text"><?php echo $onasItem['popis']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php
    }
}
?>
