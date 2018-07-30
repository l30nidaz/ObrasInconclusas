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
        <!--<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>-->
      <!--<link rel="stylesheet" href="_include/css/dropzone.css">-->
<!--          <link rel="stylesheet" href="_include/css/dropzonebasic.css">-->
        <!-- Fav Icon -->
        <link rel="shortcut icon" href="#">

        <link rel="apple-touch-icon" href="#">
        <link rel="apple-touch-icon" sizes="114x114" href="#">
        <link rel="apple-touch-icon" sizes="72x72" href="#">
        <link rel="apple-touch-icon" sizes="144x144" href="#">
        <!-- Google Font -->
        <!--<link href='https://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>-->
        <link href='https://fonts.googleapis.com/css?family=Caveat+Brush' rel='stylesheet' type='text/css'>
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
        <meta property="og:url"           content="http://www.your-domain.com/your-page.html" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Your Website Title" />
        <meta property="og:description"   content="Your description" />
        <meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />

    </head>


    <body>  

        <?php
        require_once './_include/php/model/classes/Imagen.php';
        ?>
        <!-- This section is for Splash Screen -->
        <div class="ole">
            <section id="jSplash">
                <div id="circle"></div>
            </section>
        </div>
        <!-- End of Splash Screen -->

        <!-- Homepage Slider -->
        <div id="home-slider">	
            <div class="overlay"></div>

            <div class="slider-text">
                <div id="slidecaption"></div>
            </div>   

            <div class="control-nav">
                <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
                <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
                <ul id="slide-list"></ul>

                <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
            </div>
        </div>
        <!-- End Homepage Slider -->

        <!-- Header -->
        <header>
            <div class="sticky-nav">
                <a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>

                <div id="logo">
                    <a id="goUp" href="#home-slider" title="Brushed | Responsive One Page Template">Brushed Template</a>
                </div>

                <nav id="menu">
                    <ul id="menu-nav">
                        <li class="current"><a href="#home-slider">Inicio</a></li>
                        <li><a href="#complaint">Sube una queja</a></li>
                        <li><a href="#work">Ránking</a></li>
                        <li><a href="#about">Quiénes somos</a></li>
                        <li><a href="#contact">Contacto</a></li>
                        <!--<li><a href="shortcodes.html" class="external">Quiénes somos</a></li>-->
                    </ul>
                </nav>

            </div>
        </header>
        <!-- End Header -->

        <!-- Our Work Section -->
        <div id="work" class="page">
            <div class="container">
                <!-- Title Page -->
                <div class="row">
                    <div class="span12">
                        <div class="title-page">
                            <h2 class="title">Ránking</h2>
                            <h3 class="title-description">Líderan el ránking estas <a href="#">Obras</a>.</h3>
                        </div>
                    </div>
                </div>
                <!-- End Title Page -->

                <!-- Portfolio Projects -->
                <div class="row">
                    <div class="span3">
                        <!-- Filter -->
                        <nav id="options" class="work-nav">
                            <ul id="filters" class="option-set" data-option-key="filter">
                                <li class="type-work">Distritos</li>
                                <li><a href="#filter" data-option-value="*" class="selected">Todos los distritos</a></li>
<?php
require_once "./_include/php/model/classes/modelCase.php";
$caso = new modelCase();

$distritosConCaso = $caso->getDistrictWithCases();
foreach ($distritosConCaso as $distritoConCaso) {
    $distritoValue = str_replace(' ', '_', $distritoConCaso['nombre']);
    echo '<li><a href="#filter" data-option-value=".' . $distritoValue . '">' . $distritoConCaso["nombre"] . '</a></li>';
}
?>
                                <!--                        <li><a href="#filter" data-option-value=".photography">Photography</a></li>
                                                        <li><a href="#filter" data-option-value=".video">Video</a></li>-->
                            </ul>
                        </nav>
                        <!-- End Filter -->
                    </div>

                    <div class="span9">
                        <div class="row">
                            <section id="projects">
                                <ul id="thumbs">

                                    <!-- Item Project and Filter Name -->
<?php
$imagenes = new Imagen();

$imagen_arr = $imagenes->getImages();
if (count($imagen_arr) > 0) {
    foreach ($imagen_arr as $key => $value) {
        $thumbnailPath = $value['imagen_resized'];
        $imagePath = $value['imagen_ruta'];
        $distritoName = str_replace(' ', '_',$value['distrito_nombre']);
        //$distritoName = str_replace(' ', '_', $distritoName);
        $imagen_nombre = $value['imagen_nombre'];
        $imagen_descripcion = $value['imagen_descripcion'];
        $caso_id = $value['caso_id'];
        echo '<li class="item-thumbs span3 ' . $distritoName . '" >';
        echo '<a class="hover-wrap fancybox" data-fancybox-group="gallery" caso_id =' . $caso_id . ' title="' . $imagen_nombre . '" href="' . $imagePath . '">';
        echo '<span class="overlay-img"></span>';
        echo '<span class="overlay-img-thumb font-icon-plus"></span>';
        echo '</a>';
        echo '<img src="' . $thumbnailPath . '" alt="' . $imagen_descripcion . '">';
        echo '</li>';
    }
}
?>                             

                                    <li class="item-thumbs span3 design">
                                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The City" href="_include/img/work/full/image10.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        <!-- Thumb Image and Description -->
                                        <img src="_include/img/work/thumbs/thumb_image10.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 design">
                                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Office" href="_include/img/work/full/image06.jpeg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        <!-- Thumb Image and Description -->
                                        <img src="_include/img/work/thumbs/thumb_image06.jpeg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 photography">
                                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="_include/img/work/full/image07.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        <!-- Thumb Image and Description -->
                                        <img src="_include/img/work/thumbs/thumb_image07.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 video">
                                        <!-- Fancybox Media - Gallery Enabled - Title - Link to Video -->
                                        <a class="hover-wrap fancybox-media" data-fancybox-group="video" title="Video Content From Vimeo" href="http://vimeo.com/51460511">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        <!-- Thumb Image and Description -->
                                        <img src="_include/img/work/thumbs/image-08.jpg" alt="Video">
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 photography">
                                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Sea" href="_include/img/work/full/image12.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        <!-- Thumb Image and Description -->
                                        <img src="_include/img/work/thumbs/thumb_image12.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 photography">
                                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Clouds" href="_include/img/work/full/image07.jpeg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        <!-- Thumb Image and Description -->
                                        <img src="_include/img/work/thumbs/thumb_image07.jpeg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 video">
                                        <!-- Fancybox Media - Gallery Enabled - Title - Link to Video -->
                                        <a class="hover-wrap fancybox-media" data-fancybox-group="video" title="Video Content From Vimeo" href="http://vimeo.com/50834315">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        <!-- Thumb Image and Description -->
                                        <img src="_include/img/work/thumbs/image-09.jpg" alt="Video">
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 design">
                                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Dark" href="_include/img/work/full/image13.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        <!-- Thumb Image and Description -->
                                        <img src="_include/img/work/thumbs/thumb_image13.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 design">
                                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Beach" href="_include/img/work/full/image-07-full.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        <!-- Thumb Image and Description -->
                                        <img src="_include/img/work/thumbs/image-07.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->
                                </ul>
                            </section>

                        </div>
                    </div>
                </div>
                <!-- End Portfolio Projects -->
            </div>
        </div>
        <!-- End Our Work Section -->

        <!-- About Section -->
        <div id="about" class="page-alternate">
            <div class="container">
                <!-- Title Page -->
                <div class="row">
                    <div class="span12">
                        <div class="title-page">
                            <h2 class="title">Quiénes somos</h2>
                            <h3 class="title-description">Información de nuestro equipo.</h3>
                        </div>
                    </div>
                </div>
                <!-- End Title Page -->

                <!-- People -->
                <div class="row">

                    <!-- Start Profile -->
                    <div class="span4 profile">
                        <div class="image-wrap">
                            <div class="hover-wrap">
                                <span class="overlay-img"></span>
                                <span class="overlay-text-thumb">CTO/Founder</span>
                            </div>
                            <img src="_include/img/profile/l31.jpeg" alt="John Doe">
                        </div>
                        <h3 class="profile-name">L30nidaz</h3>
                        <p class="profile-description">Ingeniero de sistemas de Univerisdad Nacional peruana harto de la forma de trabajar de varios <a href="#">alcaldes</a>. 
                            Emprendedor decidido a aportar algún granito de arena para que las personas podamos levantar nuestra voz de protesta y que se sea escuchada, feliz padre de familia y esposo ejemplar eso dice jeje.</p>

                        <div class="social">
                            <ul class="social-icons">
                                <li><a href="https://twitter.com/jwlioabel" target="_blank"><i class="font-icon-social-twitter"></i></a></li>
                                <li><a href="https://dribbble.com/juliojurado" target="_blank"><i class="font-icon-social-dribbble"></i></a></li>
                                <li><a href="https://www.facebook.com/julio.juradoobando" target="_blank"><i class="font-icon-social-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Profile -->

                    <!-- Start Profile -->
                    <div class="span4 profile">
                        <div class="image-wrap">
                            <div class="hover-wrap">
                                <span class="overlay-img"></span>
                                <span class="overlay-text-thumb">Creative Director</span>
                            </div>
                            <img src="_include/img/profile/l36.jpeg" alt="Jane Helf">
                        </div>
                        <h3 class="profile-name">Awesome Dor</h3>
                        <p class="profile-description">Jefa de diseño líder, entuasiasta y luchadora por el derecho de las personas a ser escuchadas siempre atenta a los cambios en tendencias en el diseño 
                            Diseñadora nata .</p>

                        <div class="social">
                            <ul class="social-icons">
                                <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                                <li><a href="#"><i class="font-icon-social-email"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Profile -->

                    <!-- Start Profile -->
                    <div class="span4 profile">
                        <div class="image-wrap">
                            <div class="hover-wrap">
                                <span class="overlay-img"></span>
                                <span class="overlay-text-thumb">Lead Designer</span>
                            </div>
                            <img src="_include/img/profile/l35.jpg" alt="Joshua Insanus">
                        </div>
                        <h3 class="profile-name">Joshua Insanus</h3>
                        <p class="profile-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat <a href="#">hendrerit dictum</a>. 
                            Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                        <div class="social">
                            <ul class="social-icons">
                                <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                                <li><a href="#"><i class="font-icon-social-linkedin"></i></a></li>
                                <li><a href="#"><i class="font-icon-social-google-plus"></i></a></li>
                                <li><a href="#"><i class="font-icon-social-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Profile -->

                </div>
                <!-- End People -->
            </div>
        </div>
        <!-- End About Section -->



        <!-- Complaint Section -->
        <div id="complaint" class="page">
            <div class="container">
                <!-- Title Page -->
                <div class="row">
                    <div class="span12">
                        <div class="title-page">
                            <h2 class="title">Sube una queja</h2>
                            <h3 class="title-description">Llena el formulario para poder subir una queja</h3>
                        </div>
                    </div>
                </div>
                <!-- End Title Page -->

                <!-- complaint Form -->
                <div class="row">
                    <div class="span9">

                        <form id="complaint-form" class="contact-form dropzone" action="#" method="POST" enctype="multipart/form-data">
                            <p class="contact-name">
                                <input id="name" type="text" placeholder="Nombre completo" value="" name="name" required/>
                            </p>
                            <p class="contact-email">
                                <input id="contact_email" type="email" placeholder="Dirección de email" value="" name="email" required />
                            </p>
                            <p class="contact-district">
                                <select name="distrito">
                                    <option value="default" >--Seleccione un distrito--</option>
<?php
$distritos = $caso->getDistritos();

foreach ($distritos as $distrito) {
    echo "<option value='$distrito[id]'> $distrito[nombre] </option>";
}
?>
                                </select>

                            </p>
                            <p class="contact-file">
                                <input id="fileToUpload1" name="fileToUpload[]" type="file">
                            </p>
                            <p class="contact-file">
                                <input id="fileToUpload2" name="fileToUpload[]" type="file">
                            </p>
                            <p class="contact-file">
                                <input id="fileToUpload3" name="fileToUpload[]" type="file">
                            </p>

                            <p class="contact-title">
                                <input id="contact_name" type="text" placeholder="Título del mensaje" value="" name="title" />
                            </p>
                            <p class="contact-message">
                                <textarea id="contact_message" placeholder="Escribe aquí tu mensaje o queja" name="message" rows="15" cols="40"></textarea>
                            </p>

                            <p class="complaint-submit" style="width: 20%;">
                                <!--<a id="complaint-submit" class="submit" href="#">Enviar email</a>-->
                                <input type="submit" class="submit" name="envio" value="Enviars" id="complaint-submit" style="margin-top: 10px" >    

                            </p>
                            <p class="contact-reset" style="width: 20%;">                	
                                <input type="reset" class="submit" name="resetear" value="Borrar" style="margin-top: 10px">
                            </p>
                            <div id="response">

                            </div>
                        </form>
                        <div id="responseDataFromServer"></div>
                    </div>

                    <div class="span3">
                        <div class="contact-details">
                            <h3>Contact Details</h3>
                            <ul style="color:white">
                                <li><a href="#">jwlioabel@gmail.com</a></li>
                                <li>(51) 952834431</li>
                                <li>
                                    Antua Studio
                                    <br>
                                    Av. Constructores, La Molina 542 2do Piso
                                    <br>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Contact Form -->
            </div>
        </div>




        <!-- Twitter Feed -->
        <div id="twitter-feed" class="page-alternate">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="follow">
                            <a href="https://twitter.com/jwlioabel" title="Follow Me on Twitter" target="_blank"><i class="font-icon-social-twitter"></i></a>
                        </div>

                        <div id="ticker" class="query"> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Twitter Feed -->


        <!-- End Contact Section -->

        <!-- Contact Section -->
        <div id="contact" class="page">
            <div class="container">
                <!-- Title Page -->
                <div class="row">
                    <div class="span12">
                        <div class="title-page">
                            <h2 class="title">Escríbenos</h2>
                            <h3 class="title-description">Para ponerte en contacto con nosotros sólo envíanos un mensaje</h3>
                        </div>
                    </div>
                </div>
                <!-- End Title Page -->

                <!-- Contact Form -->
                <div class="row">
                    <div class="span9">

                        <form id="contact-form" class="contact-form" action="#">
                            <p class="contact-name">
                                <input id="contact_name" type="text" placeholder="Nombre completo" value="" name="name" />
                            </p>
                            <p class="contact-email">
                                <input id="contact_email" type="text" placeholder="Dirección de email" value="" name="email" />
                            </p>
                            <p class="contact-message">
                                <textarea id="contact_message" placeholder="Tu mensaje" name="message" rows="15" cols="40"></textarea>
                            </p>
                            <p class="contact-submit">
                                <a id="contact-submit" class="submit" href="#">Enviar email</a>
                            </p>

                            <div id="response">

                            </div>
                        </form>

                    </div>

                    <div class="span3">
                        <div class="contact-details">
                            <h3>Contact Details</h3>
                            <ul>
                                <li><a href="#">jwlioabel@gmail.com</a></li>
                                <li>(51) 952834431</li>
                                <li>
                                    Antua Studio
                                    <br>
                                    Av. Constructores, La Molina 542 2do Piso
                                    <br>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Contact Form -->
            </div>
        </div>
        <!-- End Contact Section -->



        <!-- Socialize -->
        <div id="social-area" class="page-alternate">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <nav id="social">
                            <ul>
                                <li><a href="https://twitter.com/jwlioabel" title="Follow Me on Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a></li>
                                <li><a href="http://dribbble.com/juliojurado" title="Follow Me on Dribbble" target="_blank"><span class="font-icon-social-dribbble"></span></a></li>
                                <!--<li><a href="http://forrst.com/people/Bluxart" title="Follow Me on Forrst" target="_blank"><span class="font-icon-social-forrst"></span></a></li>-->
                                <!--<li><a href="http://www.behance.net/alessioatzeni" title="Follow Me on Behance" target="_blank"><span class="font-icon-social-behance"></span></a></li>-->
                                <li><a href="https://www.facebook.com/julio.juradoobando" title="Follow Me on Facebook" target="_blank"><span class="font-icon-social-facebook"></span></a></li>
                                <li><a href="https://plus.google.com/u/0/102665261952878377552" title="Follow Me on Google Plus" target="_blank"><span class="font-icon-social-google-plus"></span></a></li>
                                <li><a href="https://www.linkedin.com/in/julio-abel-jurado-obando-1a689b38?trk=nav_responsive_tab_profile" title="Follow Me on LinkedIn" target="_blank"><span class="font-icon-social-linkedin"></span></a></li>
                                <!--<li><a href="http://themeforest.net/user/Bluxart" title="Follow Me on ThemeForest" target="_blank"><span class="font-icon-social-envato"></span></a></li>-->
                                <!--<li><a href="http://zerply.com/Bluxart/public" title="Follow Me on Zerply" target="_blank"><span class="font-icon-social-zerply"></span></a></li>-->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Socialize -->
        <div id="dialog-message" title="Información" style="display: none" class="page">

        </div>
        <!-- Footer -->
        <footer>
            <p class="credits">&copy;2013 Brushed. <a href="#" title="Brushed | Responsive One Page Template">Developed</a> by <a href="https://plus.google.com/u/0/102665261952878377552"  target="_blank" title="Alessio Atzeni | Web Designer &amp; Front-end Developer">l30nidaz</a></p>
        </footer>
        <!-- End Footer -->

        <!-- Back To Top -->
        <a id="back-to-top" href="#">
            <i class="font-icon-arrow-simple-up"></i>
        </a>
        <!-- End Back to Top -->


        <!-- Js -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
        <script src="_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->

        <script src="_include/js/jquery.validate.min.js"></script><!-- validate agregado por mi -->
        <script src="_include/js/signup-form.js"></script> <!--trae los mensajes para el jquery validate -->
        <script src="_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
        <script src="_include/js/waypoints.js"></script> <!-- WayPoints -->
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
        <script src="_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
        <script src="_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
        <script src="_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
        <script src="_include/js/jquery.tweet.js"></script> <!-- Tweet -->
        <script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
        <!--<script src="_include/js/dialog.js"></script>-->
        <script src="_include/js/main.js"></script> <!-- Default JS -->
        <!-- End Js -->

    </body>
</html>