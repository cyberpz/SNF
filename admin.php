<html>
  <head>
    <title>Area Riservata | La Storia Nel Futuro </title>
    <style>
      html,body { margin: 0; padding: 0; }
      body { background-color: #FFF; }
      p, td, li, input { font-family: verdana, arial, tahoma; font-size: 16px; color: #333; }
      table { margin: 50px auto; border: 1px solid #DDD; background: #EEE; }
      .errore td { text-align: center; color: #CC0000; }
      input[type="password"] { border: 1px solid #DDD; }
    </style>
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
    <?php

    $password = 'FuturoNellaStoria98';
    // -------------------------
    session_start();
    $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : false;

    $alreadyLogged = isset($_SESSION['adm'] ) ? true : false;
    if (!$alreadyLogged and (!$pwd || $pwd != $password)) { ?>
      <form method="post" action="admin.php">
        <table border="0" cellspacing="0" cellpadding="10">
          <?php if ($pwd !== false): ?>
            <tr class="errore">
              <td colspan="3">La password inserita non è corretta!</td></tr>
          <?php endif; ?>
            <tr>
              <td>Password</td>
              <td><input type="password" name="pwd" style="width: 180px;"/></td>
              <td><input type="submit" value="Entra"/></td>
            </tr>
        </table>
      </form>
      <?php
    } else {
      if (!isset($_SESSION['adm']))
        $_SESSION['adm'] = true;

      $path = "descs.json";
      $text = fopen($path, 'r') or die('Error opening descriptions file');
      $raw = fread($text, filesize($path));
      $json = json_decode($raw);

      if ( // se sono presenti ma vuoti
        (isset($_POST['text_1']) and $_POST['text_1'] == '')
        OR
        (isset($_POST['text_1']) and $_POST['text_2'] == '')){
          echo "Una delle didascalie (o entrambe) sembra vuota. Torna indietro e compila i campi.";
      }
      elseif ( // se esistono
        $_POST['text_1'] AND $_POST['text_2']) {
          $path = "descs.json";
          $file = fopen($path, 'w') or die('Error opening descriptions file');
          $obj = array('text_1' => $_POST['text_1'], 'text_2' => $_POST['text_2']);
          $json = json_encode($obj);
          fwrite($file, $json);
          print "fatto";

     } else { // in qualsiasi altro caso
       ?>
       
       <!-- NAVBAR -->
       <div>
         <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean">
             <div class="container"><a class="navbar-brand text-monospace text-white" href="index.php" style="background-color:rgb(255,255,255);background-image:url(&quot;assets/img/Schermata 2018-11-21 alle 15.50.01.png&quot;);background-position:center;background-size:contain;background-repeat:no-repeat;width:17rem;height:4rem;"></a>
                 <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1" style="border:none;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                     <div class="collapse navbar-collapse" id="navcol-1">
                         <ul class="nav navbar-nav ml-auto">
                             <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="index.php?#chisiamo">Chi siamo</a></li>
                             <li class="nav-item" role="presentation"><a class="nav-link" href="index.php?#dove">Dove</a></li>
                             <li class="nav-item" role="presentation"><a class="nav-link" href="index.php?#progetti">Progetti</a></li>
                             <li class="nav-item" role="presentation"><a class="nav-link" href="index.php?#partecipa">Partecipa</a></li>
                         </ul>
                     </div>
             </div>
         </nav>
       </div>


       <div class="container">
         <form class="form-group" style="margin-top:7rem" action="admin.php" method="post">
           <h2>Modifica didascalie:</h2>

           <div class="mt-5">
             <h3>Chi siamo</h3>
             <textarea class="form-control" name="text_1" rows="8" cols="40"><?php echo $json->text_1;?></textarea>
           </div>

           <div class="mt-5">
             <h3>Dove</h3>
             <textarea class="form-control" name="text_2" rows="8" cols="40"><?php echo $json->text_2;?></textarea>
           </div>

           <input class="btn btn-primary col-12 p-3 mt-3" type="submit" value="Invia">

         </form>
       </div>
       <?php
     }
    }
    ?>
  </body>
</html>
