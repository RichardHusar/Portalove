<?php
include_once("classes/DB.php");

use classes\DB;

$db = new DB("localhost", "root", "", "Databazis", 3306);
$homeItems = $db->getHomeItems();
?>
<div class="container-fluid js-tm-page-content tm-page-pad" data-page-no="1">
    <div class="row">
        <div class="tm-3-col-container">

            <?php
            foreach ($homeItems as $key => $homeItem) {
                if ($homeItem['meno'] === 'External') {
                    ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 tm-3-col-textbox">
                        <div class="text-xs-left tm-textbox tm-textbox-padding tm-bg-white-translucent tm-3-col-textbox-inner">
                            <i class="fa fa-4x fa-<?php echo $homeItem['icon']; ?> tm-home-fa"></i>
                            <h2 class="tm-text-title"><?php echo $homeItem['meno']; ?></h2>
                            <p class="tm-text"><?php echo $homeItem['popis']; ?></p>
                        </div>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 tm-3-col-textbox">
                        <div class="text-xs-left tm-textbox tm-textbox-padding tm-bg-white-translucent tm-3-col-textbox-inner">
                            <i class="fa fa-4x fa-<?php echo $homeItem['icon']; ?> tm-home-fa"></i>
                            <h2 class="tm-text-title"><?php echo $homeItem['meno']; ?></h2>
                            <p class="tm-text"><?php echo $homeItem['popis']; ?></p>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 tm-3-col-textbox">
                <div class="text-xs-left tm-textbox tm-textbox-padding tm-bg-white-translucent tm-3-col-textbox-inner">
                    <i class="fa fa-4x fa-plane tm-home-fa"></i>
                    <h2 class="tm-text-title">Stay relaxed</h2>
                    <p class="tm-text">You can easily change icons in HTML codes by <a href="http://fontawesome.io/icons/" target="_parent">Font Awesome</a>. Praesent tempus dapibus. Curabitur sodales, est auctor congue vulputate, nisl tellus finibus nunc, vitae consectetur enim.</p>
                </div>
            </div>
        </div>
    </div>
</div>
