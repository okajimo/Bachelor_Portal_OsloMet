<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
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
            <a href="Statusrapport.pdf" class="blaaLink">Statusrapport</a><br/>
            <a href="Dokumentasjon.php" class="blaaLink">Dokumentasjon</a><br/>
            <a href="Prosjektskisse.pdf" class="blaaLink">Prosjektskisse</a><br/>
            <a href="Veiledning.php" class="blaaLink">Veiledning</a><br/>
            <a href="Forprosjekt.php" class="blaaLink">Forprosjekt</a><br/>
            <a href="Prosjektrapport.php" class="blaaLink">Prosjektrapport</a><br/>
            <a href="Evaluering.php" class="blaaLink">Evaluering</a><br/>
        </div>
        <div class="tekstMedMenyUtenBilde">
                <h2>Huskeliste for <?php echo $studieaar;?></h2>
                <h3>Gangen i arbeidet</h3>
                Første oppgave er å finne et prosjekt, og dere skal avlegge en statusrapport om det senest
                <?php echo $statusrapport?>.<br/>
                Når oppgaven er funnet lages en prosjektskisse som beskriver detaljene i prosjektet - frist
                <?php echo $prosjektskisse?>.<br/>
                Så starter forprosjektet og forprosjektrapporten skal være ferdig senest
                <?php echo $forprosjekt?>.<br/>
                Selve prosjektarbeidet pågår frem til innleveringsfristen
                <?php echo $innlevering?>.<br/>
                Til slutt må dere forberede presentasjonen som vil foregå
                <?php echo $presentasjonsdager?>.<br/><br/>
                <table class="studentTabell">
                    <tr>
                        <td>Nr</td><td>Oppgave</td><td>Hvor</td><td>Frist</td>
                    </tr>
                    <tr>
                        <td>1</td><td>Statusrapport</td><td>På nettet</td><td><?php echo $statusrapport?></td>
                    </tr>
                    <tr>
                        <td>2</td><td>Prosjektskisse</td><td>På nettet</td><td><?php echo $prosjektskisse?></td>
                    </tr>
                    <tr>
                        <td>3</td><td>Forprosjekt</td><td>På prosjektets nettside</td><td><?php echo $forprosjekt?></td>
                    </tr>
                    <tr>
                        <td>4</td><td>Prosjektrapport</td><td>Digital eksamensinnlevering</td><td><?php echo $innlevering ?></td>
                    </tr>
                    <tr>
                        <td>5</td><td>Presentasjon</td><td>Auditorium</td><td><?php echo $presentasjonsdager?></td>
                    </tr>
                </table>
          </div>
    </body>
</html>
