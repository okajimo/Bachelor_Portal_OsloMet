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
        include "Parametere.php";
    ?>
        <div class="sideMenyUtenBilde">
            <a href="OppdragsgivereIntro.php" class="blaaLink">Introduksjon</a><br/>
            <a href="OppdragProsjekt.php" class="blaaLink">Hva er et bachelorprosjekt?</a><br/>
            <a href="OppdragStudent.php" class="blaaLink">Hva kan en datastudent?</a><br/>
            <a href="OppdragSammarbeid.php" class="blaaLink">Samarbeid med bedrifter</a><br/>
            <a href="OppdragBedrift.php" class="blaaLink">Har din bedrift et prosjekt?</a><br/>
            <a href="OppdragKontakt.php" class="blaaLink">Ta kontakt</a><br/>
        </div>
        <div class="tekstMedMenyUtenBilde">
                <h2>Informasjon for oppdragsgivere</h2>
                <h2>Studieåret <?php echo $studieaar;?></h2>
                <h3>Prosjektet</h3>
                Datastudiene (dataingeniør, informasjonsteknologi og anvendt datateknologi) ved
                Høgskolen i Oslo og Akershus er 3-årige og avsluttes i siste semester
                (vårsemesteret) med et større praktisk dataprosjekt.
                Der skal studentene demonstrere at de kan bruke sine datakunnskaper til å lage gode løsninger
                på praktiske dataproblemer.
                <h3>Samarbeid med næringslivet</h3>
                Prosjektet gjennomføres normalt i samarbeid med en bedrift eller en annen ekstern institusjon.
                Vi ønsker derfor å komme i kontakt med bedrifter eller andre som har datatekniske problemer,
                oppgaver eller prosjekter som vil passe som et studentprosjekt. Prosjektarbeidets resultater
                blir vederlagsfritt oppdragsgiverens eiendom.
                <h3>Prosjektbeskrivelse</h3>
                Studentene utfører selve prosjektarbeidet i vårsemesteret. Beskrivelsen av prosjektet og en del
                rammebetingelser må derfor være på plass i god tid før jul.
                <h3>Tidsplan</h3>
                Studentene velger et prosjekt - frist <?php echo $prosjektskisse;?>.<br/>
                Prosjektarbeidet starter for fullt - begynnelsen av januar.<br/>
                Oppdragsgiver og høgskolen lager en avtale - desember/januar <br/>
                Studentene leverer sitt prosjektresultat - frist <?php echo $innlevering;?>.<br/><br/>
                Ta kontakt med oss. Mer detaljert informasjon finner du under de ulike menyvalgene i venstre spalte.
          </div>
    </body>
</html>

