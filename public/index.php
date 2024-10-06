<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
  <?php 
    include "seo.php";
  ?>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title><?php echo $title;?> </title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="description" content="<?php echo $description;?>">

  <meta name="keywords" content="<?php echo $keywords;?>">
  <Meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow" />
  <Meta name="Yahoobot" content="index, follow" />
  <meta name="MSNbot" content="Index, Follow" />
  <meta name="allow-search" content="yes" />
  <Meta name="author" content="<?php echo $author;?>" />
  <Meta name="revisit-after" content="3 days"/>
  <Meta name="country" content="India"/>
  <Meta name= "geography" content ="<?php echo $address ?>"/>
  <Meta name="contactNumber" content="<?php echo $contact_number;?>"/>
  <Meta name="dc.language" content="english"/>
  <Meta name="geo.region" content="IN-BH" />
  <Meta name="geo.placename" content="Patna" />
  <Meta name="geo.position" content="" />
  <Meta name="ICBM" content="" />
  <meta property="og:url" content="<?php echo $domain ?>" />
  <meta property="og:image" content="<?php echo $domain ?>/public/images/favicon.ico"/>
  <meta property="og:type" content="<?php echo $domain ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="<?php echo $og_title ?>" />
  <meta property="og:description" content="<?php echo $og_description ?>" />
  <meta property="og:keyword" content="<?php echo $og_keywords ?>" />


  <link rel="icon" type="image/png" href="public/images/favicon.ico">

  <!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto+Mono:300,400,500,700">
  <link rel="stylesheet" href="public/css/bootstrap.css">
  <link rel="stylesheet" href="public/css/fonts.css">
  <link rel="stylesheet" href="public/css/style.css"> -->

  <link href='https://fonts.googleapis.com/css?family=Domine:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="public/css/bootstrap.css">
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="stylesheet" href="public/css/font-awesome.css">
  <link rel="stylesheet" href="public/css/colorbox.css">  

</head>
<body>
  <div class="page">

    <?php
        // include "layout/top_bar.php";
        include "layout/header.php";
        if($page_name == '' || $page_name == 'home'){
            // include "layout/hero_section.php";
            // include "section/call_action.php";
            include "home.php";
        }else{
            // include "layout/banner.php";
            if($page_name == 'about'){
                include "about.php";
            }else if($page_name == 'join-us'){
                include "join-us.php";
            }else if($page_name == 'services'){
              include "services.php";
            }else if($page_name == 'careers'){
              include "careers.php";
            }else if($page_name == 'contact'){
              include "contact.php";
            }
        }
        // include "section/news.php";
        include "layout/footer.php";
    ?>
    <div class="preloader"> 
      <div class="preloader-logo"><img src="public/images/logo.png" alt="" width="199" height="22"/>
      </div>
      <div class="preloader-body">
        <div id="loadingProgressG">
          <div class="loadingProgressG" id="loadingProgressG_1"></div>
        </div>
      </div>
    </div>
  <!-- Javascript Files
  ================================================== -->
  <!-- initialize jQuery Library -->
  <!-- <script src="public/plugins/jQuery/jquery.min.js"></script> -->

  <script src="public/js/jquery.js"></script>
  <script src="public/js/jquery-migrate.js"></script>
  <script src="public/js/bootstrap.js"></script>	
  <script src="public/js/flexslider.js"></script>
  <script src="public/js/flickity.js"></script>
  <script src="public/js/waypoints.js"></script>
  <script src="public/js/scriptcontact.js"></script>
  <script src="public/js/scriptsubmit.js"></script>
  <script src="public/js/countto.js"></script>
  <script src="public/js/colorbox.js"></script>
  <script src="public/js/isotope.js"></script>
  <script src="public/js/jquery.plugin.js"></script>
  <script src="public/js/jquery.countdown.js"></script>
  <script src="public/js/retina.js"></script>
  <script src="public/js/scripts.js"></script>	


  <!-- <script src="public/js/core.min.js"></script>
  <script src="public/js/script.js"></script> -->


  </div><!-- Body inner end -->
  </body>

  </html>