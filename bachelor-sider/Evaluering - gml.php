<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title></title>
    </head>
    <body>
    <?php
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
                <h2>Evaluering</h2>
                    Prosjektarbeidet deles opp i de fire delene produkt/resultat, prosess, dokumentasjon
                    og presentasjon, og hver del gis en ca. vekt. Ved evalueringen blir det innenfor hver del
                    vurdert ut fra de stikkordene som er ramset opp i tabellen under.
                    Sluttkarakteren blir gitt på grunnlag av en totalvurdering der de fire delene inngår.<br/><br/>
                    <table class="studentTabell">
                        <tr>
                            <td>Prosjektdel</td><td>Beskrivelse</td><td>Prosent</td>
                        </tr>
                        <tr>
                            <td>Produkt/resultat</td>
                            <td>Datateknisk vanskelighetsgrad, omfang av oppgave i forhold til gruppestørrelse,
                                kreativitet og originalitet, overensstemmelse med kravspesifikasjon, brukervennlighet,
                                hvor lett å sette i produksjon, hvor lett å videreutvikle og vedlikeholde. </td>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <td>Prosess</td>
                            <td>Læring av ny teknologi, planlegging, arbeidssystematikk og evne til problemløsning,
                                samarbeid med brukere/oppdragsgiver, testing, samarbeidsforhold og gjennomføring,
                                selvstendighet. </td>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <td>Dokumentasjon</td>
                            <td>Oversiktlighet, ryddighet og stramhet i språk og ortografi, oppdeling i delrapporter
                                og tilpasning til målgruppens behov, overensstemmelse med dokumentasjonsstandard
                                m/ tilpasning til det konkrete prosjektet, presentasjon tilpasset medium
                                (papir eller elektronisk format). </td>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <td>Presentasjon</td>
                            <td>Formidling av prosjektets resultater og kvaliteter og prosjektgruppas erfaringer,
                                evne til å få frem et klart bilde av prosjekt og prosess, samspill i gruppa,
                                regi, virkemidler. </td>
                            <td>10%</td>
                        </tr>
            </table>
         </div>
    </body>
</html>
