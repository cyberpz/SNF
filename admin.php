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
  </head>

  <body>
    <?php

    $password = 'FuturoNellaStoria98';
    // -------------------------
    // print_r($_POST);
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
       <form style="margin:1rem" action="admin.php" method="post">
         <h1>Modifica didascalie:</h1>
         <div class="">
           <h3>Chi siamo</h3>
           <textarea name="text_1" rows="8" cols="40"><?php echo $json->text_1;?></textarea>
         </div>
         <div class="">
           <h3>Dove</h3>
           <textarea name="text_2" rows="8" cols="40"><?php echo $json->text_2;?></textarea>
         </div>
         <input style="margin:1rem" type="submit" value="Invia">
       </form>
       <?php
     }
    }
    ?>
  </body>
</html>
