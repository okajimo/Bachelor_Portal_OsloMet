<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Bachelorprosjekt</title>
    </head>
    <body>
    <?php
    	header('Content-type: text/html; charset=utf-8');
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
                <h2>Ta kontakt med oss!</h2>
                <h3>Først til mølla får først male!</h3>
                Mange studenter er allerede igang med å finne frem til prosjekter. De oppdragsgiverne som er tidlig ute
                vil derfor kunne verve de beste studentene. Uansett må eventuelle prosjekter være presentert for
                studentene i god tid før fristen for studentenes innlevering av prosjektskisser den <?php echo $prosjektskisse;?>.
                <br/><br/>
                Du kan ringe, sende brev, E-post eller komme på besøk. Her er våre adresser:
                <br/><br/>
                <h3>Besøksadresse</h3>
                Pilestredet 35 - inngang fra Holbergs plass - rett ovenfor trikkeholdeplassen Holbergs plass
                <h3>Brev</h3>
                Høgskolen i Oslo og Akershus <br/>
                Fakultet for Teknologi, Kunst og Design <br/>
                Institutt for Informasjonsteknologi <br/>
                Postboks 4, St. Olavs plass, 0130 Oslo
                <h3>Telefon</h3>
                22 45 32 00 (sentralbord)
                <h3>E-post</h3>
                Prosjektkontakt: Tor Krattebøl : tor.krattebol(a)hioa.no
        </div>
    </body>
</html>



