<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Super Smash</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='google-site-verification' content='' />
    <meta name='keywords' content='desarrollo web, dise�o web, vidojuegos, nintendo'>
    <meta name='description' content='Sitio web para proyecto'>
    <meta name="author" content='solucionesdes.com.mx'>
    <meta name="owner" content='Francisco Javier'>
    <meta name="robots" content="index,follow">
    <!-- Viewport Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Styles -->
    <link rel="stylesheet" href="<?=$GLOBALS['COD']->dir?>/assets/css/bootstrap/bootstrap.min.css?<?=$elapsed_time?>">
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.css">
    <!-- Your Styles -->
    <link rel="stylesheet" href="<?=$GLOBALS['COD']->dir?>/assets/css/custom.css?<?=$elapsed_time?>">
    <link rel="stylesheet" href="<?=$GLOBALS['COD']->dir?>/assets/css/estilos.css?<?=$elapsed_time?>">
    <link rel="stylesheet" href="<?=$GLOBALS['COD']->dir?>/assets/css/<?=$page_title?>.css?<?=$elapsed_time?>">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- FAVICONS 
    <link rel='shortcut icon' href='<?=$GLOBALS['COD']->dir?>/des-icono.ico' type='image/x-icon'>
    <link rel='icon' href='<?=$GLOBALS['COD']->dir?>/des-icono.ico' type='image/x-icon'>-->
    
    <!-- GOOGLE FONT -->
</head>
  <body>
  <nav class="navbar navbar-inverse navbar-static-top img_shadow"> 
            <div class="navbar-header">
                <button type=button class="collapsed navbar-toggle"  data-toggle=collapse data-target=#bs-example-navbar-collapse-9 aria-expanded=false>
                    <span class=sr-only>Toggle navigation</span> 
                    <span class=icon-bar></span> 
                    <span class=icon-bar></span> 
                    <span class=icon-bar></span> 
                </button>
                <img  src="<?=$GLOBALS['COD']->dir?>/assets/images/logo.png?<?=$elapsed_time?>" class="img-responsive"> 
            </div> 
            <div class="collapse navbar-collapse" id=bs-example-navbar-collapse-9> 
                <ul class="nav navbar-nav"> 
                    <li class="klanimate" data-y="-100"><a href="<?=$GLOBALS['COD']->dir?>/home">Home</a></li> 
                    <li class="klanimate" data-x="100"><a href="<?=$GLOBALS['COD']->dir?>/character">Characters</a></li> 
                    <li class="klanimate" data-x="-100"><a href="<?=$GLOBALS['COD']->dir?>/about">About Us</a></li> 
                    <li class="klanimate" data-y="100"><a href="<?=$GLOBALS['COD']->dir?>/contact">Contact</a></li> 
                </ul> 
            </div>
        </nav>