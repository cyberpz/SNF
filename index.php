<?php
  $path = "descs.json";
  $file = fopen($path,'r');
  $raw = fread($file, filesize($path));
  $json = json_decode($raw) or die("WHAT");
?>
<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Storia nel Futuro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">

</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean">
            <div class="container"><a class="navbar-brand text-monospace text-white" href="index.php" style="background-color:rgb(255,255,255);background-image:url(&quot;assets/img/Schermata 2018-11-21 alle 15.50.01.png&quot;);background-position:center;background-size:contain;background-repeat:no-repeat;width:17rem;height:4rem;"></a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1" style="border:none;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#chisiamo">Chi siamo</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#dove">Dove</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#progetti">Progetti</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#partecipa">Partecipa</a></li>
                        </ul>
                    </div>
            </div>
        </nav>
    </div>
    <div class="simple-slider" style="margin-top:7rem; width:100%; height:56%">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(&quot;assets/img/42239361_2105904342773672_7235460953775538176_o.jpg&quot;);margin-bottom:17px;"></div>
                <div class="swiper-slide" style="background-image:url(&quot;assets/img/Foveon 1 svst 2005.jpg&quot;);"></div>
                <div class="swiper-slide" style="background-image:url(&quot;assets/img/Facebook 5 svst 2009.jpg&quot;);"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div id="chisiamo" class="highlight-blue">
        <div class="container visible">
          <h2 class="text-center m-0" style="font-size:3rem;"><b> Chi siamo </b></h2>
          <p class="text-center lead p-3" data-aos="fade" style="font-size:19px;">
            <?php echo $json->text_1; ?>
          </p>
        </div>
    </div>

    <div id="progetti" class="projects-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="font-size:3rem;">Progetti</h2>
                <p class="text-center" style="margin:1rem;">Qui: scrivere una piccola intro ai progetti (volendo)</p>
            </div>
            <div class="row projects justify-content-center">
                <div class="col-10 item" data-aos="zoom-in" data-aos-delay="50">
                    <img class="img-fluid" src="assets/img/41691816_2096137140417059_8240626508134088704_o.jpg">
                    <h3 class="name" style="font-size:25px;"><strong>Conferenze</strong></h3>
                    <p class="description" style="font-size:1rem;">400 conferenze con oltre 500 speaker in tutta Italia, Università, Centri per l’Innovazione, per far conoscere storie di successo partite da lì.<br></p>
                </div>
                <div class="col-10 item" data-aos="zoom-in" data-aos-delay="50">
                    <img class="img-fluid" src="assets/img/40194714_2074923265871780_1158958815580782592_n.png" style="padding:3rem">
                    <h3 class="name" style="font-size:25px;">Silicon Valley Study Tour<br></h3>
                    <p class="description">Nato per portare, dal 2005, studenti manager e imprenditori di 30 Paesi in Silicon Valley, una settimana a conoscere storie di centinaia di italiani che là hanno fatto la differenza.<br></p>
                </div>
                <div class="col-10 item" data-aos="zoom-in" data-aos-delay="100">
                    <img class="img-fluid" src="assets/img/welcomaps.png" style="padding:3rem">
                    <h3 class="name" style="font-size:25px;">Welcomaps</h3>
                    <p class="description" style="font-size:1rem;">La mappa dei progetti di accoglienza migranti in Italia per trasferire il messaggio “si può fare”<br></p>
                </div>
            </div>
        </div>
    </div>

    <div id="dove" class="highlight-blue" data-bs-parallax-bg="true" style="background-image:url(&quot;assets/img/hTSpo6.jpg&quot;);background-repeat:no-repeat; background-position:center">
        <div class="container align-content-center align-self-center justify-content-center">
          <h2 class="col-12 mt-3" style="color:rgb(255,255,255);text-align:center;font-size:3rem;"><b>Dove</b></h2>
          <div class="container">
            <p class="lead p-3 text-center" data-aos="fade" style="font-size:19px;color:white;">
              <?php echo $json->text_2; ?>
            </p>
          </div>
        </div>
    </div>


    <div id="partecipa" class="contact-clean">
        <h2 class="text-center" style="font-size:3rem;">Partecipa!</h2>
        <form method="post" data-aos="zoom-out-up">
            <h2 class="text-center" style="font-size:1rem;">Vuoi partecipare ai nostri progetti?&nbsp;<br></h2>
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
                        <p>La prima associazione culturale con l’obiettivo di valorizzare il genius loci. Dal 1998, in Italia. <br> P.IVA: 01730980032<br></p>
                    </div>
                    <div class="col item social">
                      <a href="https://www.facebook.com/SVSTour/">
                        <i class="icon ion-social-facebook"></i>
                      </a>
                      <a href="https://www.instagram.com/siliconvalleystudytour/">
                        <i class="icon ion-social-instagram"></i>
                      </a>
                    </div>
                </div>
                <p class="copyright">La Storia Nel Futuro © 2018 | Powered by M. Somaschini & G. Vitale<br></p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/script.min.js"></script>
    <script src="assets/js/slideNav.js"></script>
    <script>
	    window.slide = new SlideNav();
    </script>
</body>

</html>