<?php
session_start();
include("../system/constantes.php");
$bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
$bdd->exec('SET NAMES utf8');
$req = $bdd->prepare('SELECT * FROM menu WHERE Rubriques=\'ECRINS BIJOUX\' AND langue= :language OR Rubriques=\'JEWELRY BOXES\' AND langue= :language');
$req->execute(array('language' => $_SESSION['langue']));
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>Dardel</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" type="text/css"> 
    <link rel="stylesheet" href="../assets/fancybox/jquery.fancybox.css?v=2.1.5" media="screen"> 
     
    <!-- Boomerang styles -->
        <link id="wpStylesheet" type="text/css" href="../css/global-style.css" rel="stylesheet" media="screen">
        <link id="wpStylesheet" type="text/css" href="../css/custom.css" rel="stylesheet" media="screen">
        

    <!-- Favicon -->
    <link href="../images/favicon.png" rel="icon" type="image/png">


    <!-- Required JS -->
    <script src="../../js/jquery.js"></script>
    <script src="../../js/jquery-ui.min.js"></script>

    <!-- Page scripts -->
    <link rel="stylesheet" href="../assets/layerslider/css/layerslider.css" type="text/css">

</head>
<body>

<?php include("../system/menu.php"); ?>
<?php include("../system/slider-principal.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="ligne-centre"></div>
            </div>
            <div class="col-md-4">
                <div class="text-center"> <span class="quality-dardel">Quality </span>  with  <span class="quality-dardel"> Dardel</span></div>
            </div>
            <div class="col-md-4">
                <div class="ligne-centre"></div>
            </div>
        </div>
    </div>
<?php include("../system/bloc-produits.php"); ?>
<?php include("../system/footer.php"); ?>

<!-- Essentials -->
<script src="../js/modernizr.custom.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../js/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="../js/jquery.easing.js"></script>
<script src="../js/jquery.metadata.js"></script>
<script src="../js/jquery.hoverup.js"></script>
<script src="../js/jquery.hoverdir.js"></script>
<script src="../js/jquery.stellar.js"></script>

<!-- Boomerang mobile nav - Optional  -->
<script src="../assets/responsive-mobile-nav/js/jquery.dlmenu.js"></script>
<script src="../assets/responsive-mobile-nav/js/jquery.dlmenu.autofill.js"></script>

<!-- Forms -->
<script src="../assets/ui-kit/js/jquery.powerful-placeholder.min.js"></script> 
<script src="../assets/ui-kit/js/cusel.min.js"></script>
<script src="../assets/sky-forms/js/jquery.form.min.js"></script>
<script src="../assets/sky-forms/js/jquery.validate.min.js"></script>
<script src="../assets/sky-forms/js/jquery.maskedinput.min.js"></script>
<script src="../assets/sky-forms/js/jquery.modal.js"></script>

<!-- Assets -->
<script src="../assets/hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
<script src="../assets/page-scroller/jquery.ui.totop.min.js"></script>
<script src="../assets/mixitup/jquery.mixitup.js"></script>
<script src="../assets/mixitup/jquery.mixitup.init.js"></script>
<script src="../assets/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
<script src="../assets/waypoints/waypoints.min.js"></script>
<script src="../assets/milestone-counter/jquery.countTo.js"></script>
<script src="../assets/easy-pie-chart/js/jquery.easypiechart.js"></script>
<script src="../assets/social-buttons/js/rrssb.min.js"></script>
<script src="../assets/nouislider/js/jquery.nouislider.min.js"></script>
<script src="../assets/owl-carousel/owl.carousel.js"></script>
<script src="../assets/bootstrap/js/tooltip.js"></script>
<script src="../assets/bootstrap/js/popover.js"></script>

<!-- Sripts for individual pages, depending on what plug-ins are used -->
<script src="../assets/layerslider/js/greensock.js" type="text/javascript"></script>
<script src="../assets/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="../assets/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<!-- Initializing the slider -->
<script>
    jQuery("#layerslider").layerSlider({
        pauseOnHover: true,
        autoPlayVideos: false,
        skinsPath: 'assets/layerslider/skins/',
        responsive: false,
        responsiveUnder: 1280,
        layersContainer: 1280,
        skin: 'borderlessdark3d',
        hoverPrevNext: true,
    });
</script>

<!-- Boomerang App JS -->
<script src="../js/wp.app.js"></script>
<!--[if lt IE 9]>
    <script src="../js/html5shiv.js"></script>
    <script src="../js/respond.min.js"></script>
<![endif]-->

<!-- Temp -- You can remove this once you started to work on your project -->
<script src="../js/jquery.cookie.js"></script>
<script src="../js/wp.switcher.js"></script>
<script type="text/javascript" src="js/wp.ga.js"></script>


</body>
</html>