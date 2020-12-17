<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once ("header.php");?>
</head>

<body>

<!-- Content -->
<div class="cd-hero">

    <!-- Navigation -->
    <div class="cd-slider-nav">
        <?php include_once ("menu.php");?>
    </div>

    <ul class="cd-hero-slider">

        <!-- Page 1 Home -->
        <li class="selected">
            <div class="cd-full-width">
                <?php include_once ("uvod.php");?>
            </div>
        </li>

        <!-- Page 2 Gallery One -->
        <li>
            <div class="cd-full-width">
                <?php include_once ("plazy.php");?>
            </div>
        </li>

        <!-- Page 3 galeria cicavce -->
        <li>
            <div class="cd-full-width">
                <?php include_once ("cicavce.php");?>
            </div>
        </li>

        <!-- Page 2 galleria vtáky -->
        <li>
            <div class="cd-full-width">
                <?php include_once ("vtaky.php");?>
            </div>
        </li>

        <!-- Page 5 About -->
        <li>
            <div class="cd-full-width">
                <?php include_once ("about.php");?>
            </div> <!-- .cd-full-width -->

        </li>

        <!-- Page 6 Login/Register -->
        <li>
            <div class="cd-full-width">
                <?php include_once ("formular.php");?>
            </div> <!-- .cd-full-width -->
        </li>
    </ul> <!-- .cd-hero-slider -->

    <footer class="tm-footer">

        <div class="tm-social-icons-container text-xs-center">
            <a href="#" class="tm-social-link"><i class="fa fa-facebook"></i></a>
            <a href="#" class="tm-social-link"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="tm-social-link"><i class="fa fa-twitter"></i></a>
            <a href="#" class="tm-social-link"><i class="fa fa-behance"></i></a>
            <a href="#" class="tm-social-link"><i class="fa fa-linkedin"></i></a>
        </div>

        <p class="tm-copyright-text">Copyright &copy; 2016 Your Company

            - Design: <a rel="nofollow" href="http://www.templatemo.com/page/1" class="tm-footer-link" target="_parent">Templatemo</a></p>

    </footer>

</div> <!-- .cd-hero -->


<!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
<div id="loader-wrapper">

    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>

<?php include_once ("footer.php");?>
<?php include_once ("scripty.php");?>


</body>
</html>