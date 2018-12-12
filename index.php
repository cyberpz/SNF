<?php
  $path = "descs.json";
  $file = fopen($path,'r') ;
  $raw = fread($file, filesize($path));
  $json = json_decode($raw) or die("WHAT");
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/jquery-eu-cookie-law-popup.css"/>
    <script src="assets/js/jquery-eu-cookie-law-popup.js"></script>
    <title>La Storia nel Futuro</title>
</head>

<body class="eupopup eupopup-top">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean fixed-top">
        <div class="container">
          <a class="navbar-brand text-monospace text-white" href="index.php" style="background-color:rgb(255,255,255);background-image:url(&quot;assets/img/Schermata 2018-11-21 alle 15.50.01.png&quot;);background-position:center;background-size:contain;background-repeat:no-repeat;width:17rem;height:4rem;"></a>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1" style="border:none;">
              <span class="sr-only">Toggle navigation</span>
              <span class="navbar-toggler-icon"></span>
            </button>

                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto" data-toggle="collapse" href="#navcol-1">
                        <li class="nav-item " role="presentation"><a  class="nav-link js-scroll-trigger" href="#chisiamo">Chi siamo</a></li>
                        <li class="nav-item " role="presentation"><a  class="nav-link" href="#progetti">Progetti</a></li>
                        <li class="nav-item " role="presentation"><a  class="nav-link" href="#dove">Dove</a></li>
                        <li class="nav-item " role="presentation"><a  class="nav-link" href="#partecipa">Partecipa</a></li>
                    </ul>
                </div>
        </div>
    </nav>

    <div class="simple-slider" style=" margin-top: 7rem; height: auto">
       <div class="swiper-container ">
           <div class="swiper-wrapper" style="height: auto">
               <div class="swiper-slide" style="background-image:url('slideshow/7.jpg');"></div>
               <div class="swiper-slide" style="background-image:url('slideshow/1.jpg')"></div>
               <div class="swiper-slide" style="background-image:url('slideshow/2.jpg')"></div>
               <div class="swiper-slide" style="background-image:url('slideshow/3.jpg')"></div>
               <div class="swiper-slide" style="background-image:url('slideshow/4.jpg')"></div>
               <div class="swiper-slide" style="background-image:url('slideshow/5.jpg')"></div>
               <div class="swiper-slide" style="background-image:url('slideshow/6.jpg')"></div>
           </div>
           <div class="swiper-pagination"></div>
           <div class="swiper-button-prev"></div>
           <div class="swiper-button-next"></div>
       </div>
   </div>

    <div id="chisiamo" class="highlight-blue">
        <div class="container visible py-5">
          <h2 class="text-center m-0" style="font-size:4rem;"><b> Chi siamo </b></h2>
          <p class="text-center lead p-3" data-aos="fade" style="font-size:1.5rem;">
            <?php echo $json->text_1; ?>
          </p>
        </div>
    </div>

    <div id="progetti" class="projects-clean">
        <div class="container pt-5">
            <div class="intro">
                <h2 class="text-center" style="font-size:4rem;">Progetti</h2>
            </div>

            <div class="row projects justify-content-center">
                <div class="col-10 item" data-aos="zoom-in" data-aos-delay="50">
                    <img class="img-fluid" src="assets/img/collage.jpg">
                    <h3 class="name" style="font-size:3rem;"><strong>Conferenze</strong></h3>
                    <p class="description" style="font-size:1.5rem;">Più di 400 conferenze ed eventi, oltre 500 speaker in tutta Italia, Università e Centri per l’Innovazione, per far conoscere storie di successo partite dal genio di quei luoghi.<br></p>
                  </a>
                </div>
                <div class="col-10 item" data-aos="zoom-in" data-aos-delay="50">
                  <a href="https://siliconvalleystudytour.com" target="_blank" style="text-decoration: none; color:#2c4484">
                    <img class="img-fluid" src="assets/img/40194714_2074923265871780_1158958815580782592_n.png" style="padding:3rem">
                    <h3 class="name" style="font-size:3rem;">Silicon Valley Study Tour<br></h3>
                    <p class="description" style="font-size:1.5rem;">Nato nel  2005, ha portato oltre 1000 studenti, manager e imprenditori da più di 30 Paesi in Silicon Valley, a conoscere in una settimana le storie di centinaia di italiani che là hanno fatto la differenza.<br></p>
                  </a>
                </div>
                <div class="col-10 item" data-aos="zoom-in" data-aos-delay="100" style="min-height: 0">
                  <a href="https://techscoutsv.com/" target="_blank" target="_blank" style="text-decoration: none; color: #7e8285">
                    <img class="img-fluid" src="assets/img/tssv.png" style="width:20rem">
                    <p class="description" style="font-size:1.5rem;">Nato nel 2013, technology e business scouting in Silicon Valley di durata fino a 3 mesi, progetto sviluppato grazie agli Alumni del Silicon Valley Study Tour ed al network
                      <a href="http://sviec.org/" target="_blank" target="_blank" style="text-decoration: underline; color:#2c4484">SVIEC</a>
                      a favore di aziende europee interessate
                    </p>
                  </a>
                </div>
                <div class="col-10 item mb-5" data-aos="zoom-in" data-aos-delay="100">
                  <a href="https://welcomaps.org/" target="_blank" target="_blank" style="text-decoration: none; color:#2c4484">
                    <img class="img-fluid" src="assets/img/welcomaps.png" style="padding:3rem">
                    <h3 class="name" style="font-size:3rem;">Welcomaps</h3>
                    <p class="description" style="font-size:1.5rem;">Nata nel 2017, la mappa dei progetti di accoglienza migranti in Italia per trasferire il messaggio “si può fare”<br></p>
                  </a>
                </div>
            </div>
        </div>
    </div>

    <div id="dove" class="highlight-blue" data-bs-parallax-bg="true" style="background-image:url(&quot;assets/img/hTSpo6.jpg&quot;);background-repeat:no-repeat; background-position:center">
        <div class="intro pt-5">
          <h2 class="text-center" style="color:rgb(255,255,255);font-size:4rem;"><b>Dove</b></h2>
        </div>
        <div class="container">
          <p class="lead p-3 text-center" data-aos="fade" style="font-size:1.5rem;color:white;">
            <?php echo $json->text_2; ?>
          </p>
        </div>
    </div>


    <div id="partecipa" class="contact-clean">
      <div class="intro pt-5">
        <h2 class="text-center " style="font-size:4rem;">Partecipa!</h2>
      </div>

        <form method="post" data-aos="zoom-out-up">
            <h2 class="text-center" style="font-size:1.5rem;">Vuoi partecipare ai nostri progetti?&nbsp;<br></h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Nome"></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><textarea class="form-control" rows="14" name="message" placeholder="Messaggio"></textarea></div>
            <div class="form-group d-flex justify-content-center align-content-center align-self-center"><button class="btn btn-primary" type="submit">INVIA</button></div>
        </form>
    </div>

    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 item text">
                        <h3>La Storia Nel Futuro</h3>
                        <p>P.IVA: IT01730980032<br></p>
                          <div>
                            <a style="color:#f0f9ff" target="_blank" href="privacy-policy.html"> <p>Privacy Policy</p> </a>
                          </div>
                    </div>
                    <div class="col item social">
                      <a target="_blank" href="https://www.facebook.com/SVSTour/">
                        <i class="icon ion-social-facebook"></i>
                      </a>
                      <a target="_blank" href="https://www.instagram.com/siliconvalleystudytour/">
                        <i class="icon ion-social-instagram"></i>
                      </a>
                    </div>
                </div>
                <p class="copyright">La Storia Nel Futuro © 2018<br></p>
            </div>
        </footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/script.min.js"></script>

</body>

</html>
