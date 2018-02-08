<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Bachelorprosjekt</title>
    </head>
    <body>
    <?php
        // Added by Amir to convert to UTF-8, needed in addition to meta tag in html     
        header('Content-type: text/html; charset=utf-8');
        //END Amir        
        include "toppMeny.php";
        include "BildeInfo.php";
        //include "Nyheter.php";
    ?>
        <div class="sideMeny">
            <a href="Studenter.php" class="blaaLink">Studenter</a><br/>
            <a href="Sensorer.php" class="blaaLink">Sensorer</a><br/>
            <a href="OppdragsgivereIntro.php" class="blaaLink">Oppdragsgivere</a>
        </div>
        <div class="tekstUtenMeny">
                <h2>Informasjon</h2>
                Her finner du nødvendig informasjon til studenter, sensorer og oppdragsgivere.
        </div>
    </body>
</html>

