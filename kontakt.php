<?php session_start(); ?>
<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Oct 28 2021 19:22:18 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="617941659e270290226d0294" data-wf-site="6128d6673b5738440887baa4">
<head>
  <meta charset="utf-8">
  <title>Kontakt</title>
  <meta content="Kontakt" property="og:title">
  <meta content="Kontakt" property="twitter:title">
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
          <span class='badge badge-warning' id='lblCartCount'> <?php if(isset($_SESSION['products'])) {echo count($_SESSION['products']);}else{echo 0;} ?> </span>
        </a>
      </nav>
      <div class="menu-button w-nav-button">
        <div class="icon-2 w-icon-nav-menu"></div>
      </div>
      <a href="#" class="brand w-nav-brand"><img src="images/chisti-rosi-eng_label-removebg-preview-1.png" loading="lazy" width="131" sizes="131px" srcset="images/chisti-rosi-eng_label-removebg-preview-1-p-500.png 500w, images/chisti-rosi-eng_label-removebg-preview-1.png 569w" alt="chisti rosi " class="image-35"></a>
    </div>
  </div>
  <div class="clone-wrap">
    <div class="form-section-03 wf-section">
      <div class="form-03-outer-div">
        <div class="content-wrap-left">
          <div class="section-title">Kontaktieren Sie uns!</div>
          <h2 class="heading-2">Sie haben fragen an uns? Lassen Sie es uns wissen!</h2>
          <p class="paragraph-5">Füllen Sie das Kontaktformular aus und wir melden uns so schnell wie möglich bei Ihnen!</p>
          <div class="contact-method-wrap">
            <a href="http://vezadigital.com/webflow-form" class="contact-method w-inline-block">
              <div class="contact-icon"><img src="images/email.svg" loading="lazy" alt=""></div>
              <p class="contact-text">office@rema-import.com</p>
            </a>
            <a href="#" class="contact-method w-inline-block">
              <div class="contact-icon"><img src="images/call.svg" loading="lazy" alt=""></div>
              <p class="contact-text">+1 (234) 567-8901</p>
            </a>
          </div>
          <div class="contact-method-wrap">
            <div class="contact-method no-link">
              <div class="contact-icon"><img src="images/maps-and-flags.svg" loading="lazy" alt=""></div>
              <p class="contact-text">100 University Avenue, Toronto, Ontario, Canada</p>
            </div>
          </div>
        </div>
        <div class="form-block-03 w-form">
          <form id="email-form-2" name="email-form-2" data-name="Email Form 2">
            <div class="_2-questions-wrap"><input type="text" class="text-field-inform w-input" maxlength="256" name="First-Name-2" data-name="First Name 2" placeholder="First Name" id="First-Name-2">
              <div class="form-spacer"></div><input type="text" class="text-field-inform w-input" maxlength="256" name="Last-Name-2" data-name="Last Name 2" placeholder="Last Name" id="Last-Name-2">
            </div>
            <div class="form-spacer"></div>
            <div class="_2-questions-wrap"><input type="email" class="text-field-inform w-input" maxlength="256" name="Email-2" data-name="Email 2" placeholder="Email" id="Email-2">
              <div class="form-spacer"></div><input type="tel" class="text-field-inform w-input" maxlength="256" name="Phone-Number-2" data-name="Phone Number 2" placeholder="Phone Number" id="Phone-Number-2">
            </div>
            <div class="form-spacer"></div><select id="field-2" name="field-2" data-name="Field 2" class="text-field-inform w-select">
              <option value="">Reason For Inquiry</option>
              <option value="Media">Media</option>
              <option value="Working With You">Working With You</option>
              <option value="Other">Other</option>
            </select>
            <div class="form-spacer"></div><textarea placeholder="Message" maxlength="5000" id="Message-2" name="Message-2" data-name="Message 2" class="text-field-inform bigger w-input"></textarea>
            <div class="form-spacer"></div><input type="submit" value="Submit" data-wait="Please wait..." class="button-4 in-form w-button">
          </form>
          <div class="w-form-done">
            <div>Thank you! We will get back in touch with you within 48 hours.</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
    </div>
    <div class="faq-section-01 wf-section">
      <div class="faq-title-wrap">
        <div class="section-title">FAQs</div>
      </div>
      <div class="faq-wrap-01">
        <div class="faq-01">
          <h3 class="heading-3">Wo kommt Chisti Rosi her?</h3>
          <p class="paragraph-5 no-bottom-pad">Chisti Rosi wird in der russischen Provinz Saransk hergestellt,ca 700km entfernt von Moskau.</p>
        </div>
        <div class="faq-01">
          <h3 class="heading-3">Welche Zutaten werden für Chisti Rosi verwendet?</h3>
          <p class="paragraph-5 no-bottom-pad">Wasser und Alkohol der Sorte Alpha sonst nichts!</p>
        </div>
        <div class="faq-01">
          <h3 class="heading-3">Was macht Chisti Rosi so besonders?</h3>
          <p class="paragraph-5 no-bottom-pad">Chisti Rosi ist ein Vodka ohne schnick Schnack und OHNE Zusatzstoffe und Aromen. Nämlich aus <strong>Wasser und </strong>Alkohol der Sorte Alpha.</p>
        </div>
        <div class="faq-01 bottom">
          <h3 class="heading-3">Welche Reinheit hat Chisti Rosi?</h3>
          <p class="paragraph-5 no-bottom-pad">Für unsern Chisti Rosi wird nur der Reinste Alkohol derStufe Alpha verwendet und Wasser aus einem artesischen Brunnen.</p>
        </div>
        <div class="faq-01 bottom">
          <h3 class="heading-3">Wie lange dauert der Versand von Chisti Rosi?</h3>
          <p class="paragraph-5 no-bottom-pad">Der Versand kann bis zu 2 Werktage dauern.</p>
        </div>
        <div class="faq-01 bottom">
          <h3 class="heading-3">Ist der Versand von Chisti Rosi klimaneutral?</h3>
          <p class="paragraph-5 no-bottom-pad">Der Versand wird mittels DHL GoGreen abgewickelt. </p>
        </div>
        <div class="faq-01 bottom">
          <h3 class="heading-3">Wie genieße ich Chisti Rosi richtig?</h3>
          <p class="paragraph-5 no-bottom-pad"><em>Vodka sollte man am besten bei einer Trinktemperatur von ca. 15 °C  Genießen. Ob auf Eis oder mit einem SpritzerZitronensaft, der Kreativität sind keine Grenzen gesetzt.  Wie erreiche ich die beste Trinktemperatur 15 °C ?Je nach Kühlschrank Größe und Einstellung. Stellt man die Flasche ca 30 min - 45 min vor dem Trinkgenuss in den Kühlschrankgröße. Auch hier sind dem eigenen Geschmack keine Grenzen gesetzt.</em></p>
        </div>
      </div>
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
          <a href="kontakt.php" aria-current="page" class="footer-link w--current">Partner werden</a>
        </div>
        <div class="footer-column">
          <div class="footer-title">About</div>
          <a href="rema.php" class="footer-link">Rema-Import</a>
        </div>
        <div class="footer-column">
          <div class="footer-title">hilfe</div>
          <a href="kontakt.php" aria-current="page" class="footer-link w--current">FAQs</a>
          <a href="kontakt.php" aria-current="page" class="footer-link w--current">Kontakt</a>
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