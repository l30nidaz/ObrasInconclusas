<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

    <!-- Meta Tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>OI | Obras Inconclusas</title>   

    <meta name="description" content="Insert Your Site Description" /> 

    <!-- Mobile Specifics -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true"/>
    <meta name="MobileOptimized" content="320"/>   

    <!-- jquery dialog -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <!-- Mobile Internet Explorer ClearType Technology -->
    <!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

    <!-- Bootstrap -->
    <link href="_include/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="_include/css/main.css" rel="stylesheet">

    <!-- Supersized -->
    <link href="_include/css/supersized.css" rel="stylesheet">
    <link href="_include/css/supersized.shutter.css" rel="stylesheet">

    <!-- FancyBox -->
    <link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

    <!-- Font Icons -->
    <link href="_include/css/fonts.css" rel="stylesheet">

    <!-- Shortcodes -->
    <link href="_include/css/shortcodes.css" rel="stylesheet">

    <!-- Responsive -->
    <link href="_include/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="_include/css/responsive.css" rel="stylesheet">

    <!-- Supersized -->
    <link href="_include/css/supersized.css" rel="stylesheet">
    <link href="_include/css/supersized.shutter.css" rel="stylesheet">

    <!-- validate -->
    <link rel="stylesheet" href="_include/css/screen.css">
    <!--<link rel="stylesheet" href="_include/css/style.css">-->
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="#">

    <link rel="apple-touch-icon" href="#">
    <link rel="apple-touch-icon" sizes="114x114" href="#">
    <link rel="apple-touch-icon" sizes="72x72" href="#">
    <link rel="apple-touch-icon" sizes="144x144" href="#">

    <!-- Modernizr -->
    <script src="_include/js/modernizr.js"></script>

<!-- Analytics -->
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'Insert Your Code']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>
<!-- End Analytics -->

    <?php
    require_once './_include/php/model/classes/Imagen.php';
    ?>
    <style>
        .imageDetail{
            margin: 0 auto;
            width:700px;
        }
    </style>
<header>
    <div class="sticky-nav">
        <a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>

        <div id="logo">
            <a id="goUp" href="#home-slider" title="Brushed | Responsive One Page Template">Brushed Template</a>
        </div>

        <nav id="menu">
            <ul id="menu-nav2">
                <li class="regresar"><a href="/">Regresar</a></li>

                <!--<li><a href="shortcodes.html" class="external">Quiénes somos</a></li>-->
            </ul>
        </nav>

    </div>
</header>
<!-- End Header -->
<body>

    <!-- Load Facebook SDK for JavaScript -->

    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.5";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>



    <!-- Twitter Feed -->
    <div id="detail" class="grad">
        <!-- Your share button code -->
        <div class="fb-share-button"  data-href="http://www.cabroworld.com/2016/03/17/22-fotos-lugares-abandonados-te-dejaran-los-pelos-punta/" data-layout="button_count"> </div>
        <!-- end button code -->    
        <?php
        $caso_id = isset($_GET['caseid']) ? $_GET['caseid'] : 0;
        if ($caso_id > 0) {
            $imagen = new Imagen();
            $arr_imagenes = $imagen->getImagesForCase($caso_id);

            foreach ($arr_imagenes as $key => $value) {
                ?>
                <div class="imageDetail">
                    <img src="<?php echo $value['imagen_detail']; ?>">
                    <p><?php echo $value['imagen_nombre'] ?></p>
                    <p><?php echo $value['imagen_descripcion'] ?></p>

                </div>

    <?php
}
}
?>
        <div style="margin:0 auto;" class="fb-comments" data-href="brushed.net" data-numposts="5"></div>
        <!-- Your share button code -->
        <div class="fb-share-button"  data-href="http://www.cabroworld.com/2016/03/17/22-fotos-lugares-abandonados-te-dejaran-los-pelos-punta/" data-layout="button_count"> </div>
        <!-- end button code --> 
    </div>
</body>
<!-- End Twitter Feed -->

<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<!--<script src="_include/js/bootstrap.min.js"></script>  Bootstrap -->

<!--<script src="_include/js/jquery.validate.min.js"></script> validate agregado por mi -->
<!--<script src="_include/js/signup-form.js"></script> trae los mensajes para el jquery validate -->
<!--<script src="_include/js/supersized.3.2.7.min.js"></script>  Slider -->
<!--<script src="_include/js/waypoints.js"></script>  WayPoints -->
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<!--<script src="_include/js/waypoints-sticky.js"></script>  Waypoints for Header -->
<!--<script src="_include/js/jquery.isotope.js"></script>  Isotope Filter -->
<!--<script src="_include/js/jquery.fancybox.pack.js"></script>  Fancybox -->
<!--<script src="_include/js/jquery.fancybox-media.js"></script>  Fancybox for Media -->
<!--<script src="_include/js/jquery.tweet.js"></script>  Tweet -->
<!--<script src="_include/js/plugins.js"></script>  Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<!--<script src="_include/js/dialog.js"></script>-->
<script src="_include/js/main.js"></script> <!-- Default JS -->
<!-- End Js -->