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
                <h2>Hva er et bachelorprosjekt?</h2>
                <h3>De enkelte fagene</h3>
                Datastudiene (dataingeniør, informasjonsteknologi og anvendt datateknologi) ved
                Høgskolen i Oslo og Akershus er 3-årige. Studieplanen inneholder emner som programmering,
                internett, datamaskinarkitektur, operativsystemer, algoritmer og datastrukturer,
                datamodellering og systemering, nettverk og systemadministrasjon, applikasjonsutvikling,
                datasikkerhet, grafikk, kunnskapsteknologi - samt en samling valgfag.
                I tillegg inneholder enkelte studier en serie emner i matematikk, statistikk
                og samfunnsfag (kommunikasjon, økonomi).
                <h3>Hovedprosjektet</h3>
                I siste semester (6. semester) skal studentene gjennomføre et større praktisk dataprosjekt.
                Prosjektet skal utføres som et gruppearbeid (2, 3 4 eller 5 studenter pr. prosjektgruppe)
                og omfanget er på 20 studiepoeng. Med andre ord skal hver av studentene legge ned minst
                1/3 årsverk i prosjektet - dvs. at det totale omfanget på et prosjekt kan bli på fra 2/3
                til 4/3 årsverk. Erfaringene er faktisk at studentene som oftest legger ned enda mer arbeid
                enn dette i prosjektet.<br/><br/>
                Vi kaller dette dataprosjektet for studentenes bachelorprosjekt. I studieplanen er det omtalt slik:
                <h3>Fra studiehåndboka</h3>
                "Faget skal utvikle ferdigheter i å løse, på en selvstendig og systematisk måte,
                et praktisk orientert og omfattende prosjekt basert på en oppdragsgivers krav.
                Studentene skal demonstrere at de kan omsette sine kunnskaper til praktiske løsninger.
                De skal kjenne til og kunne bruke grunnreglene for brukerkvalitet i analyse, design og
                implementasjon og i grensesnitt og dokumentasjon. De skal kunne produsere tilfredstillende
                dokumentasjon for dataprogrammer og datasystemer både når det gjelder produkt, drift og bruk
                med tilpasning til de ulike mottakerne av denne dokumentasjonen, og de skal kunne beskrive
                sin egen arbeidsprosess hensiktsmessig etter gitte standarder."
                <h3>Oppdragsgiver</h3>
                I omtalen står det at prosjektet skal være ". . basert på en oppdragsgivers krav ." Hovedprosjektet
                skal derfor i størst mulig grad gjennomføres i samarbeid med næringslivet. Dvs. at problemstillingen
                bak prosjektet blir gitt av en bedrift, en organisasjon eller annen ekstern institusjon.
                <h3>Tidsperspektiv</h3>
                Studentenes arbeid med bachelorprosjektet starter om høsten. Første skritt er å få kontakt med en
                oppdragsgiver. Det lages deretter en prosjektskisse. Prosjektskissen formulerer problemet, beskriver
                rammebetingelser, antyder aktuelle dataverktøy og omgivelser, og setter problemet inn i en sammenheng.
                Dette skal være ferdig innen <?php echo $prosjektskisse?>.
          </div>
    </body>
</html>


