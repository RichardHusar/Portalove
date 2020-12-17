<?php
include_once("classes/DB.php");

use classes\DB;

$db = new DB("localhost", "root", "", "Databazis", 3306);
$vtakyItems = $db->getVtakyItems();
?>
<div class="container-fluid js-tm-page-content" data-page-no="2" data-page-type="gallery">
    <div class="tm-img-gallery-container tm-img-gallery-container-2">
        <div class="tm-img-gallery gallery-two">
            <!-- Gallery Two pop up connected with JS code below -->

            <?php
            foreach ($vtakyItems as $key => $vtakyItems) {
                if ($vtakyItems['meno'] === 'External') {
                    ?>
                    <div class="grid-item">
                        <figure class="effect-ruby">
                            <img src="<?php echo $vtakyItems['image_path']; ?>" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title"><?php echo $vtakyItems['meno']; ?></h2>
                                <p class="tm-figure-description"><?php echo $vtakyItems['popis']; ?></p>
                                <a href="<?php echo $vtakyItems['image_path']; ?>">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="grid-item">
                        <figure class="effect-ruby">
                            <img src="<?php echo $vtakyItems['image_path']; ?>" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title"><?php echo $vtakyItems['meno']; ?></h2>
                                <p class="tm-figure-description"><?php echo $vtakyItems['popis']; ?></p>
                                <a href="<?php echo $vtakyItems['image_path']; ?>">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>