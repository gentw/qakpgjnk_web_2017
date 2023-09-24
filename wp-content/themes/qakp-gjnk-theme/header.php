<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="theme-color" content="#e35e33" />
        <?php
          wp_head();
        ?>
       

    </head>
    <body <?php body_class(); if(is_page("ballina")) { echo ' id="home"'; } else { echo ' id="section-two-css"'; } ?>>
        <!--[if lt IE 8]>
            <p style="display:none;" class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="loader-wrap">
         <div class="loader-content">
            <img src="<?php echo get_theme_file_uri('img/qakp-loading.gif'); ?>" class="text-center" alt="qakp loading">
          </div>
        </div>
        <header>
          <div class="header-bottom">
              <div class="container">
               
                <nav class="navbar navbar-expand-lg navbar-light">
                  <a class="navbar-brand" href="https://qakp-gjnk.com"><img src="<?php echo get_theme_file_uri('img/logo1.png'); ?>" alt="qakp logo" class="qakp-logo"></a>
                 
                  <div class="button-menu" id="toggle-menu">
                    <span class="top"></span>
                    <span class="middle"></span>
                    <span class="bottom"></span>
                  </div>

                  <div class="overlay navbar-collapse justify-content-end " id="navbarSupportedContent">
                    <?php if(is_page('ballina')) { ?>
                    <ul class="navbar-nav">
                      <li class="nav-item active"><a class="nav-link scroll-qakp" href="#carouselExampleIndicators"><span data-hover="Ballina">Ballina</span></a></li>
                      <li class="nav-item"><a class="nav-link scroll-qakp" href="#rreth-nesh"><span data-hover="Rreth nesh">Rreth nesh</span></a></li>
                      <li class="nav-item"><a class="nav-link scroll-qakp" href="#kurset"><span data-hover="Drejtimet">Drejtimet</span></a></li>
                      <li class="nav-item"><a class="nav-link scroll-qakp" href="#ngjarjet"><span data-hover="Ngjarjet">Ngjarjet</span></a></li>
                      <li class="nav-item"><a class="nav-link scroll-qakp" href="#publikimet"><span data-hover="Publikimet">Publikimet</span></a></li>
                      <li class="nav-item"><a class="nav-link scroll-qakp" href="#stafi"><span data-hover="Stafi">Stafi</span></a></li>
                      <li class="nav-item"><a class="nav-link scroll-qakp" href="#kontakti"><span data-hover="Kontakti">Kontakti</span></a></li>
                    </ul>
                    <?php } else { ?>
                    <ul class="navbar-nav">
                      <li class="nav-item <?php if(is_page(96)) echo 'active' ?>"><a class="nav-link redirect" href="/"><span data-hover="Ballina">Ballina</span></a></li>
                      <li class="nav-item <?php if(is_page(107)) echo 'active' ?>"><a class="nav-link redirect" href="/#rreth-nesh"><span data-hover="Rreth nesh">Rreth nesh</span></a></li>
                      <li class="nav-item"><a class="nav-link redirect" href="/#kurset"><span data-hover="Drejtimet">Drejtimet</span></a></li>
                      <li class="nav-item <?php if(get_post_type() == 'eventi') echo 'active' ?>"><a  class="nav-link redirect" href="/#ngjarjet"><span data-hover="Ngjarjet">Ngjarjet</span></a></li>
                      <li class="nav-item <?php if(get_post_type() == 'post') echo 'active' ?>"><a  class="nav-link redirect " href="/#publikimet"><span data-hover="Publikimet">Publikimet</span></a></li>
                      <li class="nav-item"><a  class="nav-link redirect" href="/#stafi"><span data-hover="Stafi">Stafi</span></a></li>
                      <li class="nav-item"><a  class="nav-link redirect" href="/#kontakti"><span data-hover="Kontakti">Kontakti</span></a></li>
                    </ul>
                    <?php } ?>
                  </div>
                </nav>

              </div><!-- /container -->
            </div> <!-- /header-bottom -->
          
        </header> <!-- /header -->