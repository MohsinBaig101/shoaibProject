<?php session_start(); ?>
<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Oct 28 2021 19:22:18 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="617941659e2702434c6d0296" data-wf-site="6128d6673b5738440887baa4">
<head>
  <meta charset="utf-8">
  <title>moscow</title>
  <meta content="moscow" property="og:title">
  <meta content="moscow" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/rema-v5.webflow.css" rel="stylesheet" type="text/css">
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
    <div class="wrapepr">
    <nav role="navigation" class="nav-menu w-nav-menu">
        <a href="index.php" aria-current="page" class="nav-links w-nav-link w--current">startseite</a>
        <a href="rema.php" class="nav-links w-nav-link">über uns</a>
        <a href="shop.php" class="nav-links w-nav-link">Shop</a>
        <a href="kontakt.php" class="nav-links w-nav-link">Kontakt</a>
        <a href="kontakt.php" class="nav-links w-nav-link">Shop-finder</a>
        <a href="checkout.php" class="nav-links w-nav-link">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>
          <span class='badge badge-warning' id='lblCartCount'> <?php if(isset($_SESSION['product_id'])) {echo count($_SESSION['product_id']);}else{echo 0;} ?> </span>
        </a>
      </nav>
      <div class="menu-button w-nav-button">
        <div class="icon-2 w-icon-nav-menu"></div>
      </div>
      <a href="#" class="brand w-nav-brand"><img src="images/chisti-rosi-eng_label-removebg-preview-1.png" loading="lazy" width="131" sizes="131px" srcset="images/chisti-rosi-eng_label-removebg-preview-1-p-500.png 500w, images/chisti-rosi-eng_label-removebg-preview-1.png 569w" alt="chisti rosi " class="image-35"></a>
    </div>
  </div>
  <div class="div-block-3">
    <div class="div-block-2"><img src="images/Moscow.jpg" loading="lazy" width="333" sizes="(max-width: 479px) 100vw, (max-width: 767px) 50vw, 333px" srcset="images/Moscow-p-500.jpeg 500w, images/Moscow-p-800.jpeg 800w, images/Moscow.jpg 1011w" alt="chisti rosi / Rema-import"></div>
    <div class="div-block-2">
      <h1 class="heading-11">Moscow Mule</h1>
      <p class="paragraph-10">- 40 ml Vodka​<br>- 20 ml Limettensaft<br>- ​Ginger Beer<br>- ​Eiswürfel<br>- ​Garnitur: Gurke​<br>- Glas: Kupferbecher​</p>
    </div>
  </div>
  <div class="footer-01">
    <div class="container-2">
      <div class="footer-top"><img src="images/chisti-rosi-eng_label-removebg-preview-1.png" loading="lazy" width="176" sizes="(max-width: 479px) 47vw, 176px" srcset="images/chisti-rosi-eng_label-removebg-preview-1-p-500.png 500w, images/chisti-rosi-eng_label-removebg-preview-1.png 569w" alt="chisti rosi " class="image-33">
        <div class="footer-wrapper">
          <div class="footer-title-button">Bereit für den genuß?</div>
          <a href="shop.php" class="button-3 w-button">Shop</a>
        </div>
      </div>
      <div class="w-layout-grid footer-grid-01">
        <div class="footer-column">
          <div class="footer-title">Services</div>
          <a href="shop.php" class="footer-link">Shop</a>
          <a href="kontakt.php" class="footer-link">Partner werden</a>
        </div>
        <div class="footer-column">
          <div class="footer-title">About</div>
          <a href="rema.php" class="footer-link">Rema-Import</a>
        </div>
        <div class="footer-column">
          <div class="footer-title">hilfe</div>
          <a href="kontakt.php" class="footer-link">FAQs</a>
          <a href="kontakt.php" class="footer-link">Kontakt</a>
        </div>
      </div>
      <div class="footer-title-button"><strong class="bold-text">Wir sind Bio-Zertifiziert. Gerne sende wir Ihnen bei Bedarf unser aktuelles Bio-Zertifikat zu. - DE - ÖKO - 005 Zertifiziert. Gerne senden wir ihnen den nachweis.</strong><br></div>
      <div class="footer-bottom">
        <div class="footer-wrapper">
          <a href="#" class="secondary-link">AGB</a>
          <a href="#" class="footer-link _1">Datenschutz</a>
          <a href="#" class="footer-link _1">Impressum</a>
        </div>
        <div class="footer-wrapper">
          <a href="#" class="social-link w-inline-block"><img src="images/001-facebook.svg" alt="" class="image-28"></a>
          <a href="#" class="social-link w-inline-block"><img src="images/003-twitter.svg" alt=""></a>
          <a href="#" class="social-link w-inline-block"><img src="images/004-instagram.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div>
  <div class="circle kontakt"></div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6128d6673b5738440887baa4" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>