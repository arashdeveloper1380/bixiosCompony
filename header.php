<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="themesflat.com" />
    <metaname="viewport"content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <?php wp_head() ?>
  </head>

  <body class="header-fixed counter-scroll">

    <div id="wrapper" class="animsition">
      <div id="page" class="clearfix">
        <div id="site-header-wrap">
          <!-- Header Wrap -->
          <header id="site-header">
            <div id="site-logo" class="clearfix">
              <div id="site-log-inner">
                <?php $group_header = myprefix_get_option('group_header'); $group_header = $group_header[0];  ?>
                <a href="index.html" rel="home" class="main-logo">
                  <img
                    src="<?= $group_header['logo'] ?>"
                    alt="bixos"
                    width="96"
                    height="26"
                    data-retina="assets/images/logo/logo-header@2x.png"
                    data-width="100"
                    data-height="44"
                  />
                </a>
              </div>
            </div>
            <div class="mobile-button">
              <span></span>
            </div>
            <!-- /.mobile-button -->
            <!-- /#site-logo -->
            <div id="site-header-inner">
              <div class="wrap-inner clearfix">
                <nav id="main-nav" class="main-nav">
                  <?php wp_nav_menu(array('theme-location'=>'main','container'=>'')) ?>
                </nav>
                <!-- /#main-nav -->
              </div>
              <!-- /.wrap-inner -->
            </div>
            <!-- /#site-header-inner -->
            <div class="phone-header phone-style">
              <div class="icon-headphone">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/icon/icon-headphone.png" alt="img" />
              </div>
              <h3><?= $group_header['mobile'] ?></h3>
            </div>
            <div class="tf-button">
              <a href="http://localhost/wpComapnyBixo/%d8%aa%d9%85%d8%a7%d8%b3-%d8%a8%d8%a7-%d9%85%d8%a7/" class="button btn-1"
                ><span> دریافت یک نقل قول </span></a
              >
            </div>
          </header>
          <!-- /#site-header -->
        </div>
        <!-- #site-header-wrap -->
        <?php
          if(is_singular('servicce')):
            include_once 'inc/custom-header.php';
          endif;
          if(is_tax('servicce_cat')):
            include_once 'inc/custom-header.php';
          endif;
          if(is_tax('portfolio_cat')):
            include_once 'inc/custom-header.php';
          endif;
          if(is_singular('portfolio')):
            include_once 'inc/custom-header.php';
          endif;
          if(is_singular('post')):
            include_once 'inc/custom-header.php';
          endif;
        ?>