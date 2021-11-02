<?php
include_once('./config.php');
$servername = $config["servername"];
$username = $config["username"];
$password = $config["password"];
$dbname = $config["dbname"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
session_start();
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>
<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Oct 28 2021 19:22:18 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="617947e658e8797fee7ac4b9" data-wf-site="6128d6673b5738440887baa4">
<head>
  <meta charset="utf-8">
  <title>Chisti Rosi</title>
  <meta content="Chisti Rosi bedeutet übersetzt &quot;rein wie Morgentau&quot;. Es ist der erste 100% zertifizierte Bio-Wodka, der in Russland handgefertigt wird. Vom Korn bis zum Glas trifft Chisti Rosi die russischen, E.U. und US-amerikanische Biostandards." name="description">
  <meta content="Chisti Rosi" property="og:title">
  <meta content="Chisti Rosi bedeutet übersetzt &quot;rein wie Morgentau&quot;. Es ist der erste 100% zertifizierte Bio-Wodka, der in Russland handgefertigt wird. Vom Korn bis zum Glas trifft Chisti Rosi die russischen, E.U. und US-amerikanische Biostandards." property="og:description">
  <meta content="Chisti Rosi" property="twitter:title">
  <meta content="Chisti Rosi bedeutet übersetzt &quot;rein wie Morgentau&quot;. Es ist der erste 100% zertifizierte Bio-Wodka, der in Russland handgefertigt wird. Vom Korn bis zum Glas trifft Chisti Rosi die russischen, E.U. und US-amerikanische Biostandards." property="twitter:description">
  <meta property="og:type" content="website">
  <meta content="summary_large_image" name="twitter:card">
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
<body class="body-2">
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
          <span class='badge badge-warning' id='lblCartCount'> <?php if(isset($_SESSION['products'])) {echo count($_SESSION['products']);}else{echo 0;} ?> </span>
        </a>
      </nav>
      <div class="menu-button w-nav-button">
        <div class="icon-2 w-icon-nav-menu"></div>
      </div>
      <a href="#" class="brand w-nav-brand"><img src="images/chisti-rosi-eng_label-removebg-preview-1.png" loading="lazy" width="131" sizes="131px" srcset="images/chisti-rosi-eng_label-removebg-preview-1-p-500.png 500w, images/chisti-rosi-eng_label-removebg-preview-1.png 569w" alt="chisti rosi " class="image-35"></a>
    </div>
  </div>
  <div class="hero-shop">
    <h1 class="heading-12">Shop</h1>
  </div>
  <div class="products">
    <?php
        if ($result->num_rows > 0) {
          $i = 0;
          while($row = $result->fetch_assoc()) {
            $row['imgName']=explode(',',$row['imgName']);
           $i = $i+1;  ?>
           <div class="div-block-4">
              <div class="div-block-5">
                <?php if($row['type'] == 1){ ?>
                  <img src="images/<?php echo $row['imgName'][0] ?>" loading="lazy" width="567" 
                  sizes="(max-width: 479px) 27vw, (max-width: 767px) 14vw, 
                  (max-width: 991px) 13vw, 14vw" 
                  srcset="images/<?php echo $row['imgName'][1] ?> 500w, 
                  images/<?php echo $row['imgName'][2] ?> 800w, 
                  images/<?php echo $row['imgName'][3] ?> 1134w" alt="chisti rosi " 
                  class="image-39"/>
                <?php } ?>
                <?php if($row['type'] == 2){ ?>
                  <img src="images/<?php echo $row['imgName'][0] ?>" 
                  loading="lazy" width="567" alt="chisti rosi " class="image-39 roggen" />
                <?php } ?>  
              </div>
              <div class="div-block-6">
                <h2 class="heading-13"><?php echo $row['name'] ?> 0,7l</h2>
                <p class="paragraph-11"><?php echo $row['description'] ?></p>
                <h3 class="heading-14">39,99 € <span class="text-span-3">inkl. Mwst</span></h3>
                <p class="paragraph-11">( 57,13€ / Liter)</p>
                <a href="product.php?p_id=<?=$row['id'] ?>" class="shop-buy w-button">Kaufen</a>
              </div>
           </div>
           <?php if($i==2)break;
          }
        }
    ?>
   
  </div>
  <div class="products">
    <?php 
        if ($result->num_rows > 0) {
          $j = 0;
         
          while($row = $result->fetch_assoc()) {
            $row['imgName']=explode(',',$row['imgName']);
            // die();
           $j = $j+1;  ?>
           <div class="div-block-4">
              <div class="div-block-5">
                <?php if($row['type'] == 3){ ?>
                  <img src="images/<?php echo $row['imgName'][0] ?>" loading="lazy" 
                  width="567" sizes="(max-width: 479px) 54vw, 27vw" 
                  srcset="images/<?php echo $row['imgName'][1] ?> 500w, 
                  images/<?php echo $row['imgName'][2] ?> 1080w, images<?php echo $row['imgName'][3] ?> 1500w" 
                  alt="chisti rosi " class="image-39 roggen gerste"/>
                <?php } ?>
                <?php if($row['type'] == 4){ ?>
                  <img src="images/<?php echo $row['imgName'][0] ?>" loading="lazy" width="567" 
                  sizes="(max-width: 479px) 100vw, 54vw" 
                  srcset="images/<?php echo $row['imgName'][1] ?> 500w, 
                  images/<?php echo $row['imgName'][2] ?> 800w, 
                  images/<?php echo $row['imgName'][3] ?> 1080w,
                   images/<?php echo $row['imgName'][4] ?> 2200w" alt="" class="image-39 roggen gerste spelta">
                <?php } ?>
               </div>
              <div class="div-block-6">
                <h2 class="heading-13"><?php echo $row['name'] ?> 0,7l</h2>
                <p class="paragraph-11"><?php echo $row['description'] ?></p>
                <h3 class="heading-14"> <?php if($row['type'] == 3){ ?>39,99<?php } ?><?php if($row['type'] == 4){ ?>99,99<?php } ?> € <span class="text-span-3">inkl. Mwst</span></h3>
                <p class="paragraph-11">( 57,13€ / Liter)</p>
                <a href="product.php?p_id=<?=$row['id'] ?>" class="shop-buy w-button">Kaufen</a>
              </div>
            </div>
           <?php
          }
       
        }?>
    <!-- <div class="div-block-4">
      <div class="div-block-5"><img src="images/barley.png" loading="lazy" width="567" sizes="(max-width: 479px) 100vw, (max-width: 767px) 12vw, (max-width: 991px) 14vw, (max-width: 1279px) 16vw, 21vw" srcset="images/barley-p-500.png 500w, images/barley-p-1080.png 1080w, images/barley.png 1500w" alt="chisti rosi " class="image-38 klein"></div>
      <div class="div-block-6">
        <h2 class="heading-13">Chisti Rosi Bio Vodka Gerste 0,7l</h2>
        <p class="paragraph-11">Chisti Rosi ist ein Produkt aus einer bemerkenswerten Verbindung von Natur und Handwerk, das mit Technologien hergestellt wird, die auf ökologischen Kreisläufen beruhen und die biologische Vielfalt und die Umwelt bewahren.</p>
        <h3 class="heading-14">39,99 € <span class="text-span-3">inkl. Mwst</span></h3>
        <p class="paragraph-11">( 57,13€ / Liter)</p>
        <a href="gersten.php" class="shop-buy w-button">Kaufen</a>
      </div>
    </div>
    <div class="div-block-4">
      <div class="div-block-5"><img src="images/bottle-3-red-2-1-1.png" loading="lazy" width="567" sizes="(max-width: 479px) 100vw, (max-width: 767px) 23vw, (max-width: 991px) 30vw, (max-width: 1279px) 34vw, 45vw" srcset="images/bottle-3-red-2-1-1-p-500.png 500w, images/bottle-3-red-2-1-1-p-800.png 800w, images/bottle-3-red-2-1-1-p-1080.png 1080w, images/bottle-3-red-2-1-1.png 2200w" alt="" class="image-38 spelta"></div>
      <div class="div-block-6 spelta">
        <h2 class="heading-13">Chisti Rosi Bio Vodka wild Weizen 0,7l</h2>
        <p class="paragraph-11">Der Bio-Weizen stammt von den Biobauern im Umkreis von 160 km um die Brennerei. Der preisgekrönte Geschmack stammt aus der Fermentation von Weizenmalzmaische, die in der seit 1899 in Betrieb befindlichen Kemlya-Destillerie hergestellt wird.</p>
        <h3 class="heading-14">99,99 € <span class="text-span-3">inkl. Mwst</span></h3>
        <p class="paragraph-11">( 57,13€ / Liter)</p>
        <a href="wild-weizen.php" class="shop-buy w-button">Kaufen</a>
      </div>
    </div> -->
  </div>
  <div class="div-block-4 mobile">
    <div class="div-block-5"><img src="images/Chisti-Rosi-07.png" loading="lazy" width="567" sizes="(max-width: 479px) 36vw, 100vw" srcset="images/Chisti-Rosi-07-p-500.png 500w, images/Chisti-Rosi-07-p-800.png 800w, images/Chisti-Rosi-07.png 1134w" alt="chisti rosi " class="image-38"></div>
    <div class="div-block-6">
      <h2 class="heading-13">Chisti Rosi Bio Vodka Weizen 0,7l</h2>
      <p class="paragraph-11">Chisti Rosi bedeutet übersetzt &quot;rein wie Morgentau&quot;. Es ist der erste 100% zertifizierte Bio-Wodka, der in Russland handgefertigt wird. Vom Korn bis zum Glas trifft Chisti Rosi die russischen, E.U. und US-amerikanische Biostandards.</p>
      <h3 class="heading-14">39,99 € <span class="text-span-3">inkl. Mwst</span></h3>
      <p class="paragraph-11">( 57,13€ / Liter)</p>
      <a href="weizen.php" class="shop-buy w-button">Kaufen</a>
    </div>
  </div>
  <div class="div-block-4 mobile">
    <div class="div-block-5"><img src="images/Чистые-Росы-07-из-ржаного-зерна-2020.png" loading="lazy" width="567" alt="chisti rosi " class="image-38"></div>
    <div class="div-block-6">
      <h2 class="heading-13">Chisti Rosi Bio Vodka Roggen 0,7l</h2>
      <p class="paragraph-11">Chisti Rosi in kleinen Chargen hergestellt und jede Flasche wird mit ihrer einzigartigen Nummer personalisiert. Der ausgewählte biologische Weizen von Chisti Rosi verleiht einen unverwechselbaren Geschmack und natürlichen Charakter.</p>
      <h3 class="heading-14">39,99 € <span class="text-span-3">inkl. Mwst</span></h3>
      <p class="paragraph-11">( 57,13€ / Liter)</p>
      <a href="roggen.php" class="shop-buy w-button">Kaufen</a>
    </div>
  </div>
  <div class="div-block-4 mobile">
    <div class="div-block-5"><img src="images/barley.png" loading="lazy" width="567" sizes="(max-width: 479px) 74vw, 100vw" srcset="images/barley-p-500.png 500w, images/barley-p-1080.png 1080w, images/barley.png 1500w" alt="chisti rosi " class="image-38 mobile"></div>
    <div class="div-block-6">
      <h2 class="heading-13">Chisti Rosi Bio Vodka Gerste 0,7l</h2>
      <p class="paragraph-11">Chisti Rosi ist ein Produkt aus einer bemerkenswerten Verbindung von Natur und Handwerk, das mit Technologien hergestellt wird, die auf ökologischen Kreisläufen beruhen und die biologische Vielfalt und die Umwelt bewahren.</p>
      <h3 class="heading-14">39,99 € <span class="text-span-3">inkl. Mwst</span></h3>
      <p class="paragraph-11">( 57,13€ / Liter)</p>
      <a href="gersten.php" class="shop-buy w-button">Kaufen</a>
    </div>
  </div>
  <div class="div-block-4 last-mobile">
    <div class="div-block-5"><img src="images/bottle-3-red-2-1-1.png" loading="lazy" width="567" sizes="(max-width: 479px) 88vw, 100vw" srcset="images/bottle-3-red-2-1-1-p-500.png 500w, images/bottle-3-red-2-1-1-p-800.png 800w, images/bottle-3-red-2-1-1-p-1080.png 1080w, images/bottle-3-red-2-1-1.png 2200w" alt="" class="image-38 mobile-spelta"></div>
    <div class="div-block-6">
      <h2 class="heading-13">Chisti Rosi Bio Vodka wild Weizen 0,7l</h2>
      <p class="paragraph-11">Der Bio-Weizen stammt von den Biobauern im Umkreis von 160 km um die Brennerei. Der preisgekrönte Geschmack stammt aus der Fermentation von Weizenmalzmaische, die in der seit 1899 in Betrieb befindlichen Kemlya-Destillerie hergestellt wird.</p>
      <h3 class="heading-14">99,99 € <span class="text-span-3">inkl. Mwst</span></h3>
      <p class="paragraph-11">( 57,13€ / Liter)</p>
      <a href="wild-weizen.php" class="shop-buy w-button">Kaufen</a>
    </div>
  </div>
  <div class="footer-01">
    <div class="container-2">
      <div class="footer-top"><img src="images/chisti-rosi-eng_label-removebg-preview-1.png" loading="lazy" width="176" sizes="(max-width: 479px) 47vw, 176px" srcset="images/chisti-rosi-eng_label-removebg-preview-1-p-500.png 500w, images/chisti-rosi-eng_label-removebg-preview-1.png 569w" alt="chisti rosi " class="image-33">
        <div class="footer-wrapper">
          <div class="footer-title-button">Bereit für den genuß?</div>
          <a href="shop.php" aria-current="page" class="button-3 w-button w--current">Shop</a>
        </div>
      </div>
      <div class="w-layout-grid footer-grid-01">
        <div class="footer-column">
          <div class="footer-title">Services</div>
          <a href="shop.php" aria-current="page" class="footer-link w--current">Shop</a>
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
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6128d6673b5738440887baa4" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>