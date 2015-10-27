<?php
session_start();

if(isset($_GET['langue']))
        {
            $_SESSION['langue'] = $_GET['langue'];
        }

include("system/constantes.php");
$bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
$bdd->exec('SET NAMES utf8');
$req = $bdd->prepare('SELECT id,langue,nom,matiere,titre,description,image1_small,image2_small,image3_small FROM dardel WHERE langue= :language AND id=101 OR  langue= :language AND id=30 OR langue= :language AND id=61');
$req->execute(array('language' => $_GET['langue']));
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>Dardel</title>
<html>  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <title>Dardel | Bijoux, Ecrins</title>

    <!-- Essential styles -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css"> 
    <link rel="stylesheet" href="assets/fancybox/jquery.fancybox.css?v=2.1.5" media="screen"> 
     
    <!-- Boomerang styles -->
        <link id="wpStylesheet" type="text/css" href="css/global-style.css" rel="stylesheet" media="screen">
        <link id="wpStylesheet" type="text/css" href="css/custom.css" rel="stylesheet" media="screen">
        

    <!-- Favicon -->
    <link href="images/favicon.png" rel="icon" type="image/png">

    <!-- Assets -->
    <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="assets/sky-forms/css/sky-forms.css">    
    <!--[if lt IE 9]>
        <link rel="stylesheet" href="assets/sky-forms/css/sky-forms-ie8.css">
    <![endif]-->

    <!-- Required JS -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.min.js"></script>

    <!-- Page scripts -->
    <link rel="stylesheet" href="assets/layerslider/css/layerslider.css" type="text/css">

</head>
<body>
<?php include("system/menu.php"); ?>
<?php include("system/slider-principal.php"); ?>

<?php
    $bdd = new PDO(plug_BDD_1,plug_BDD_2,plug_BDD_3);
    $bdd->exec('SET NAMES utf8');
    $reqslidepub = $bdd->prepare('SELECT nom, matiere, image1_small FROM dardel WHERE matiere= "TROUSSES CUIR POUR REPRESENTANTS" AND langue= :language');
    $reqslidepub->execute(array('language' => $_SESSION['langue']));
?>
    <!-- MAIN CONTENT -->
    <section class="slice relative bg-white bb animate-hover-slide">
        <div class="wp-section">
            <div class="container">
                <div class="section-title-wr">
                    <h3 class="section-title left"><span>Our portfolio</span></h3>
                </div>
                
                <div id="carouselWork" class="carousel carousel-3 slide animate-hover-slide">
                    <div class="carousel-nav">
                        <a data-slide="prev" class="left" href="#carouselWork"><i class="fa fa-angle-left"></i></a>
                        <a data-slide="next" class="right" href="#carouselWork"><i class="fa fa-angle-right"></i></a>
                    </div>
                    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="wp-block inverse">                                        
                                        <div class="figure">
                                            <img alt="" src="images/products/3157_T_700x700.jpg" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="images/products/3157_T_700x700.jpg" class="btn btn-xs btn-b-white theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                                <a href="#" class="btn btn-xs btn-b-white"><i class="fa fa-link"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <h2 class="text-left">Bootstrap template</h2>
                                                <small>Brand creation</small>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="like-button">
                                                    <span class="button liked">
                                                        <i class="fa fa-heart"></i>
                                                    </span>
                                                    <span class="count"><small>123</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="" src="images/products/70agneau_700x700.jpg" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="images/products/70agneau_700x700.jpg" class="btn btn-xs btn-b-white theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                                <a href="#" class="btn btn-xs btn-b-white"><i class="fa fa-link"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <h2>Bootstrap template</h2>
                                                <small>Brand creation</small>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="like-button">
                                                    <span class="button">
                                                        <i class="fa fa-heart"></i>
                                                    </span>
                                                    <span class="count"><small>123</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="" src="images/products/attache_case_700x700.jpg" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="images/products/attache_case_700x700.jpg" class="btn btn-xs btn-b-white theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                                <a href="#" class="btn btn-xs btn-b-white"><i class="fa fa-link"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <h2>Bootstrap template</h2>
                                                <small>Brand creation</small>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="like-button">
                                                    <span class="button liked">
                                                        <i class="fa fa-heart"></i>
                                                    </span>
                                                    <span class="count"><small>123</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="" src="images/products/bebe_700x700.png" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="images/products/bebe_700x700.png" class="btn btn-xs btn-b-white theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                                <a href="#" class="btn btn-xs btn-b-white"><i class="fa fa-link"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <h2>Bootstrap template</h2>
                                                <small>Brand creation</small>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="like-button">
                                                    <span class="button">
                                                        <i class="fa fa-heart"></i>
                                                    </span>
                                                    <span class="count"><small>123</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="" src="images/products/chocolat_secondaire_700x700.png" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="images/products/chocolat_secondaire_700x700.png" class="btn btn-xs btn-b-white theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                                <a href="#" class="btn btn-xs btn-b-white"><i class="fa fa-link"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <h2>Bootstrap template</h2>
                                                <small>Brand creation</small>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="like-button">
                                                    <span class="button">
                                                        <i class="fa fa-heart"></i>
                                                    </span>
                                                    <span class="count"><small>123</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="" src="images/products/coffre_bois_700x700.png" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="images/products/coffre_bois_700x700.png" class="btn btn-xs btn-b-white theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                                <a href="#" class="btn btn-xs btn-b-white"><i class="fa fa-link"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <h2>Bootstrap template</h2>
                                                <small>Brand creation</small>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="like-button">
                                                    <span class="button">
                                                        <i class="fa fa-heart"></i>
                                                    </span>
                                                    <span class="count"><small>123</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="" src="images/products/metallica1_700x700.png" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="images/products/metallica1_700x700.png" class="btn btn-xs btn-b-white theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                                <a href="#" class="btn btn-xs btn-b-white"><i class="fa fa-link"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <h2>Bootstrap template</h2>
                                                <small>Brand creation</small>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="like-button">
                                                    <span class="button">
                                                        <i class="fa fa-heart"></i>
                                                    </span>
                                                    <span class="count"><small>123</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="" src="images/products/Sacs_deluxe_groupe1000x1000.png" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="images/products/Sacs_deluxe_groupe1000x1000.png" class="btn btn-xs btn-b-white theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                                <a href="#" class="btn btn-xs btn-b-white"><i class="fa fa-link"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <h2>Bootstrap template</h2>
                                                <small>Brand creation</small>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="like-button">
                                                    <span class="button">
                                                        <i class="fa fa-heart"></i>
                                                    </span>
                                                    <span class="count"><small>123</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>

<?php include("system/footer.php"); ?>

<!-- Essentials -->
<script src="js/modernizr.custom.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/jquery.metadata.js"></script>
<script src="js/jquery.hoverup.js"></script>
<script src="js/jquery.hoverdir.js"></script>
<script src="js/jquery.stellar.js"></script>

<!-- Boomerang mobile nav - Optional  -->
<script src="assets/responsive-mobile-nav/js/jquery.dlmenu.js"></script>
<script src="assets/responsive-mobile-nav/js/jquery.dlmenu.autofill.js"></script>

<!-- Forms -->
<script src="assets/ui-kit/js/jquery.powerful-placeholder.min.js"></script> 
<script src="assets/ui-kit/js/cusel.min.js"></script>
<script src="assets/sky-forms/js/jquery.form.min.js"></script>
<script src="assets/sky-forms/js/jquery.validate.min.js"></script>
<script src="assets/sky-forms/js/jquery.maskedinput.min.js"></script>
<script src="assets/sky-forms/js/jquery.modal.js"></script>

<!-- Assets -->
<script src="assets/hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
<script src="assets/page-scroller/jquery.ui.totop.min.js"></script>
<script src="assets/mixitup/jquery.mixitup.js"></script>
<script src="assets/mixitup/jquery.mixitup.init.js"></script>
<script src="assets/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
<script src="assets/waypoints/waypoints.min.js"></script>
<script src="assets/milestone-counter/jquery.countTo.js"></script>
<script src="assets/easy-pie-chart/js/jquery.easypiechart.js"></script>
<script src="assets/social-buttons/js/rrssb.min.js"></script>
<script src="assets/nouislider/js/jquery.nouislider.min.js"></script>
<script src="assets/owl-carousel/owl.carousel.js"></script>
<script src="assets/bootstrap/js/tooltip.js"></script>
<script src="assets/bootstrap/js/popover.js"></script>

<!-- Sripts for individual pages, depending on what plug-ins are used -->
<script src="assets/layerslider/js/greensock.js" type="text/javascript"></script>
<script src="assets/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="assets/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
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
<script src="js/wp.app.js"></script>
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
<![endif]-->

<!-- Temp -- You can remove this once you started to work on your project -->
<script src="js/jquery.cookie.js"></script>
<script src="js/wp.switcher.js"></script>
<script type="text/javascript" src="js/wp.ga.js"></script>


</body>
</html> 