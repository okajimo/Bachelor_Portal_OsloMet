<?
session_start();
// Added by Amir to convert to UTF-8, needed in addition to meta tag in html     
header('Content-type: text/html; charset=utf-8');
//END Amir        
unset($_SESSION['hp_year']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Bacheorprosjekt</title>
    </head>
    <body>
      <?php
        include "toppMeny.php";
        include "BildeInfo.php";
      ?>
      <div class="tekstMedMeny">
                <h1>Velkommen til bachelorprosjektet på Institutt for informasjonsteknologi</h1>
                Bachelorprosjektene blir utført i siste semester i 3 klasse. Tildligere ble dette kalt hovedprosjekt.<br/>
                Anskaffelse av oppgave og forberedelser til prosjektet skjer i løpet av høsten.
      </div>
    </body>
</html>
