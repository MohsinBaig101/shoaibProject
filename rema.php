<?php session_start(); ?>
<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Oct 28 2021 19:22:18 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="617941659e2702ae436d029a" data-wf-site="6128d6673b5738440887baa4">
<head>
  <meta charset="utf-8">
  <title>rema</title>
  <meta content="rema" property="og:title">
  <meta content="rema" property="twitter:title">
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
        <a href="shop-finder.php" class="nav-links w-nav-link">Shop-finder</a>
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
  <div class="page-wrap">
    <header class="header">
      <section class="section">
        <div class="container-3">
          <div class="row row-header">
            <div class="content-2">
              <div class="row mb-16">
                <div class="btn-icon-l w-embed"><svg width="20" height="21" viewbox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                      <path d="M17.5 8.83334C17.5 14.6667 10 19.6667 10 19.6667C10 19.6667 2.5 14.6667 2.5 8.83334C2.5 6.84422 3.29018 4.93656 4.6967 3.53004C6.10322 2.12352 8.01088 1.33334 10 1.33334C11.9891 1.33334 13.8968 2.12352 15.3033 3.53004C16.7098 4.93656 17.5 6.84422 17.5 8.83334Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M10 11.3333C11.3807 11.3333 12.5 10.2141 12.5 8.83334C12.5 7.45263 11.3807 6.33334 10 6.33334C8.61929 6.33334 7.5 7.45263 7.5 8.83334C7.5 10.2141 8.61929 11.3333 10 11.3333Z" stroke="#101828" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                    <defs>
                      <clippath id="clip0">
                        <rect width="20" height="20" fill="white" transform="translate(0 0.5)"></rect>
                      </clippath>
                    </defs>
                  </svg></div>
                <div class="text-medium">München, Deutschland</div>
              </div>
              <div class="header-text-wrap">
                <h1 class="display-2xl mb-0">Hi,</h1>
              </div>
              <div class="header-text-wrap btm">
                <h1 class="display-2xl mb-0">wir sind Rema-Import</h1>
              </div>
              <div class="text-xl header-text">Andreas Maier und Manuel Redinger, sind die Menschen hinter der REMA Import und der Marke Chisti Rosi,SPELTA. Nur die besten Bio Getreidesorten und altes russisches Handwerk machenunsern Bio Organic Vodka Chisti Rosi so einzigartig im Geschmack</div>
            </div><img src="images/rema-logofin.png" loading="lazy" width="169.5" alt="" class="image-32">
            <div id="w-node-_35b35053-5aaf-4bba-b380-92daa22fc1a5-436d029a" class="content-2"><img src="images/rema.png" loading="lazy" width="471.5" sizes="(max-width: 479px) 91vw, (max-width: 767px) 92vw, (max-width: 991px) 44vw, (max-width: 1279px) 47vw, 471.5px" srcset="images/rema-p-500.png 500w, images/rema-p-800.png 800w, images/rema.png 943w" alt="" class="image-31"></div>
          </div>
        </div>
      </section>
    </header>
    <main class="main">
      <section class="section">
        <div class="container-3">
          <div class="content-2 _2">
            <h2 class="text-md text-medium _2">Ein wenig über uns....</h2>
            <p class="paragraph-6">Die REMA Import GmbH mit den gesetzlichen Vertretern Andreas Maier und Manuel Redinger sind die, die bio-organic Vodka Marke„Chisti Rosi“ und „Spelta“ in die EU gebracht haben. Genauer gesagt nach Südostbayern, von wo aus die beiden die Marken Deutschland- und EU-weit bekannt machen wollen. <br></p>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="container-3">
          <div class="content-2 _2">
            <h2 class="text-md text-medium _2"><strong>Wie kam das Projekt „REMA Import GmbH“ zustande?</strong></h2>
            <p class="paragraph-6">Im Corona-Sommer Juni 2020 hatte Manuel die Idee, den bei uns unbekannten und nichterhältlichen Vodka „Chisti Rosi“ zu importieren, zu vertreiben und bei uns bekannt zu machen. Nach ersten Gesprächen mit der Brennerei hat er Andreas gefragt, ob er ihm bei diesem Projekt zur Seite stehen möchte und gemeinsam „Chisti Rosi“und die REMA Import GmbH aufbauen möchte. So wurde aus der Idee ein Businessplan und schließlich eine biozertifizierte Gesellschaft mit beschränkter Haftung.<br></p>
          </div>
        </div>
      </section>
    </main>
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
          <a href="rema.php" aria-current="page" class="footer-link w--current">Rema-Import</a>
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
  <main role="main" class="main-content">
    <canvas id="noise" class="noise"></canvas>
  </main>
  <style>.main-content {
       z-index: 5;
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-flow: column;
    height: 100vh;
    background: transparent;
}
.noise {
    z-index: 9999999999;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    pointer-events: none;
    opacity: .13;
}
</style>
  <script>const noise = () => {
    let canvas, ctx;
    let wWidth, wHeight;
    let noiseData = [];
    let frame = 0;
    let loopTimeout;
    // Create Noise
    const createNoise = () => {
        const idata = ctx.createImageData(wWidth, wHeight);
        const buffer32 = new Uint32Array(idata.data.buffer);
        const len = buffer32.length;
        for (let i = 0; i < len; i++) {
            if (Math.random() < 0.1) {
                buffer32[i] = 0xff000000;
            }
        }
        noiseData.push(idata);
    };
    // Play Noise
    const paintNoise = () => {
        if (frame === 9) {
            frame = 0;
        } else {
            frame++;
        }
        ctx.putImageData(noiseData[frame], 0, 0);
    };
    // Loop
    const loop = () => {
        paintNoise(frame);
        loopTimeout = window.setTimeout(() => {
            window.requestAnimationFrame(loop);
        }, (1000 / 25));
    };
    // Setup
    const setup = () => {
        wWidth = window.innerWidth;
        wHeight = window.innerHeight;
        canvas.width = wWidth;
        canvas.height = wHeight;
        for (let i = 0; i < 10; i++) {
            createNoise();
        }
        loop();
    };
    // Reset
    let resizeThrottle;
    const reset = () => {
        window.addEventListener('resize', () => {
            window.clearTimeout(resizeThrottle);
            resizeThrottle = window.setTimeout(() => {
                window.clearTimeout(loopTimeout);
                setup();
            }, 200);
        }, false);
    };
    // Init
    const init = (() => {
        canvas = document.getElementById('noise');
        ctx = canvas.getContext('2d');
        setup();
    })();
};
noise()</body></html></script></body></html>