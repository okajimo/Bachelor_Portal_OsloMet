<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Hovedprosjekt Data/HiOA</title>
    </head>
    <body>
    <?php
        include "toppMeny.php";
        include "Parametere.php";
    ?>
        <div class="sideMenyUtenBilde">
            <a href="Studenter.php" class="blaaLink">Studenter</a><br/>
            <a href="Sensorer.php" class="blaaLink">Sensorer</a><br/>
            <a href="OppdragsgivereIntro.php" class="blaaLink">Oppdragsgivere</a>
        </div>
        <div class="tekstMedMenyUtenBilde">
            <h2>Informasjon for sensorer <?php echo $studieaar;?></h2>
            <h3>Kort om hovedprosjekter i data ved Høgskolen i Oslo og Akershus</h3>
            <b>Omfang:</b> 20 studiepoeng <br/><br/>
            <b>Gruppestørrelse:</b> 2, 3, 4 eller 5 studenter <br/><br/>
            <b>Prosjektperiode:</b> 6. semester <br/><br/>
            Studentene må selv finne frem til et prosjekt. Dette skjer i 5. semester. Innen en bestemt frist
            i begynnelsen av desember må studentene ha dannet en prosjektgruppe, ha funnet frem til et prosjekt
            og ha levert en prosjektbeskrivelse. Det er et krav at prosjektet skal ha en oppdragsgiver. Prosjektforslag
            som kommer inn til avdelingen blir gjort tilgjengelig for alle studentene. Men de fleste av prosjektene
            har studentene funnet frem til på egen hånd. Det er forøvrig laget et eget informasjonsopplegg for
            potensielle oppdragsgivere. 
            <br/><br/>
            Prosjektene skal først godkjennes og deretter blir hvert prosjekt tildelt en intern veileder. Det normale 
            er at hver av de aktuelle interne veilederne har ansvaret for 3-4 prosjekter. Veilederens plikter
            er beskrevet her. Prosjektperioden går fra begynnelsen av januar til innlevering den <?php echo $innlevering;?>
            og presentasjon i <?php $presentasjonsdager?>. Prosjektarbeidet er forøvrig delt opp i ulike faser.
            Mer om dette finner du på studentenes informasjonssider.
            <br/><br/>
            De fleste studentene tar andre fag parallelt med hovedprosjektet. Derfor har avdelingen innført en ordning
            med tidlig eksamensavvikling for øvrige 6. semestersfag. Dermed kan studentene arbeide full tid på
            hovedprosjektet fra og med slutten av april.
            <h3>Prosjektdokumentasjon</h3>
            Innleveringsfrist for hovedprosjektene er <?php $innlevering?>. Da skal studentene ha levert inn
            papirversjoner av prosjektdokumentasjonen og ha prosjektenes hjemmesider komplette og ferdig oppdatert.
            Et eksemplar av papirversjonen vil bli sendt til sensor så snart det lar seg gjøre. 
            <br/><br/>
            Prosjektdokumentasjonen skal foreligge både i papirversjon og på prosjektets hjemmeside.
            Vi krever ikke at dokumentasjonen er "optimalisert" for begge mediene. Hvis en prosjektgruppe har
            valgt å "optimalisere" dokumentasjonen med tanke på web (html, hyperlenker m.m.) har vi da sagt at det
            er fullt akseptabelt å bruke en "mekanisk" papirutskrift av web-sidene som papirversjon. Hvis prosjektgruppen
            har "optimalisert" med tanke på en papirversjon vil gruppen normalt bruke Word og dokumentasjonen på web
            vil normalt være doc-filer (eller pdf-filer). Dette er også fullt akseptabelt. Noen prosjektgrupper har valgt
            - uten at det er et krav - å lage to versjoner av dokumentasjonen, en optimalisert for papir og en annen
            optimalisert for web. Informasjon om hvilke valg prosjektgruppene har gjort vil en finne i
            prosjektdokumentasjonen, og ved sensur skal vi rette oss etter det valget som er gjort. 
            <h3>Dokumentasjonsstandard</h3>
            Dokumentasjonsstandarden deler grovt sett dokumentasjonen inn i tre hoveddeler. Det er
            a) kravspesifikasjon, b) prosessdokumentasjon og c) produktdokumentasjon. I mange tilfeller vil det også 
            være brukerdokumentasjon og testrapporter. Prosessdokumentasjonen som skal beskrive den prosessen
            studentene har vært gjennom og produktdokumentasjonen som skal gi en faglig-teknisk beskrivelse
            av prosjektets resultater, er tenkt å skulle ha ulike målgrupper. Hvert av dem skal kunne leses som
            selvstendige dokumenter. En leser, f.eks. sensor, som skal lese all dokumentasjonen fortløpende,
            vil derfor komme til å oppleve en del gjentagelser. Men dette er slik det må være.
            <br/><br/>
            I de prosjektene der det er mye programmmering, vil det ofte inngå store mengder med kildekode
            i produktdokumentasjonen. I slike tilfeller har vi sagt at det ikke er nøvendig å skrive dette ut på papir
            . Vi har sagt at kildekoden da kan legges på en medfølgende CD/diskett og/eller at den er tilgjengelig fra
            prosjektets hjemmeside. I noen tilfeller har oppdragsgiveren lagt sperringer på hva som kan offentliggjøres
            . Sensor vil derfor kunne oppleve at noen deler av et prosjekts hjemmeside er sperret med brukernavn
            og passord. I slike tilfeller skal brukernavn og passord fremgå av den skriftlige dokumentasjonen som
            sensor har mottatt. Kravet er at alt som skal være med i vurderingen av et prosjekt skal være tilgjengelig
            både for sensor og veileder - enten på papir, på CD/diskett eller fra hjemmesiden. 
            <br/><br/>
            Hvis sensor skulle oppdage at det er ting som mangler, ikke virker eller har andre problemer med
            prosjektet, så ber vi om at sensor tar kontakt med prosjektets interne veileder. Hvem det er vil fremgå
            av dokumentasjonen, og kan også finnes på prosjektoversikten.
            <h3>Presentasjonene</h3>
            Prosjektgruppene/studentene skal gi en audiovisuell presentasjon av prosjektene sine. Dette skjer i perioden <?php echo $presentasjonsdager;?> og hvert prosjekt får tildelt 30 minutter. Det vil bli satt opp en
            timeplan for dette. Presentasjonene starter hver av dagene kl. 09.00. Alle prosjektene som presenteres på
            en og samme dag har samme sensor, og det er en del av avtalen mellom avdelingen og sensor at han/hun er
            tilstede ved presentasjonene. De siste minuttene av hver presentasjon er avsatt til spørsmål, og vi ber
            sensor om å forberede spørsmål til hvert prosjekt. Det holdes et sensormøte hver av dagene - etter at
            siste presentasjon for dagen er ferdig.
            <h3>Evalueringskriterier</h3>
            Prosjektarbeidet deles opp i de fire delene produkt (50%), prosess (20%), dokumentasjon (20%)
            og AV-presentasjon (10%). Under hver av disse delene er det underpunkter med separat vekt.
            Se skjemaet under. Sluttkarakteren blir et veiet gjenommsnitt av de karakterene som settes på de
            ulike delene.<br/><br/><br/>
            <table class="studentTabell">
                <tr>
                    <td>Prosjektdel</td><td>Beskrivelse</td><td>Prosent</td>
                </tr>
                <tr>
                    <td>Produkt/resultat</td>
                    <td>Datateknisk vanskelighetsgrad, omfang av oppgave i forhold til gruppestørrelse, kreativitet
                        og originalitet, overensstemmelse med kravspesifikasjon, brukervennlighet, hvor lett å sette
                        i produksjon, hvor lett å videreutvikle og vedlikeholde. </td>
                    <td>50%</td>
                </tr>
                <tr>
                    <td>Prosess</td>
                    <td> Læring av ny teknologi, planlegging, arbeidssystematikk og evne til problemløsning,
                        samarbeid med brukere/oppdragsgiver, testing, samarbeidsforhold og gjennomføring, selvstendighet. 
                     </td>
                    <td>20%</td>
                </tr>
                <tr>
                    <td>Dokumentasjon</td>
                    <td>Oversiktlighet, ryddighet og stramhet i språk og ortografi, oppdeling i delrapporter
                        og tilpasning til målgruppens behov, overensstemmelse med dokumentasjonsstandard med
                        tilpasning til det konkrete prosjektet, presentasjon tilpasset medium (papir eller elektronisk format).  
                    </td>
                    <td>20%</td>
                </tr>
                <tr>
                    <td>Presentasjon</td>
                    <td>Formidling av prosjektets resultater og kvaliteter og prosjektgruppas erfaringer, evne til å få
                        frem et klart bilde av prosjekt og prosess, samspill i gruppa, regi, virkemidler. 
                    </td>
                    <td>10%</td>
                </tr>
            </table>
            <br/>
             Vi ber om at sensor har ferdig et karakterforslag på hvert prosjekt før diskusjonene på sensormøtet starter.
             Karakterskalaen for hovedprosjekter har tradisjonelt vært noe annerledes enn for ordinære eksamener.
             Den har blitt en del innskrenket og forskjøvet mot venstre (A). Flg. tabell viser karalterfordelingen
             de siste årene:<br/><br/>
             <table class="studentTabellKarakter">
             <tr>
                 <td>År</td><td>A</td><td>B</td><td>C</td><td>D</td><td>E</td><td>Sum</td>
             </tr>
             <tr>
                 <td>2003</td><td>13</td><td>22</td><td>7</td><td>1</td><td>2</td><td>44</td>
             </tr>
             <tr>
                 <td>2004</td><td>4</td><td>15</td><td>17</td><td>3</td><td>1</td><td>40</td>
             </tr>
             <tr>
                 <td>2005</td><td>7</td><td>12</td><td>14</td><td>3</td><td>0</td><td>36</td>
             </tr>
             <tr>
                 <td>2006</td><td>7</td><td>10</td><td>13</td><td>3</td><td>0</td><td>33</td>
             </tr>
             <tr>
                 <td>2007</td><td>9</td><td>8</td><td>11</td><td>6</td><td>0</td><td>34</td>
             </tr>
             <tr>
                 <td>2008</td><td>7</td><td>16</td><td>7</td><td>2</td><td>0</td><td>32</td>
             </tr>
             <tr>
                 <td>2009</td><td>10</td><td>8</td><td>12</td><td>7</td><td>0</td><td>37</td>
             </tr>
             <tr>
                 <td>2010</td><td>8</td><td>12</td><td>10</td><td>4</td><td>2</td><td>36</td>
             </tr>
             <tr>
                 <td>2011</td><td>10</td><td>8</td><td>17</td><td>2</td><td>0</td><td>37</td>
             </tr>
             <tr>
                 <td>2012</td><td>9</td><td>11</td><td>11</td><td>3</td><td>0</td><td>34</td>
             </tr>
             </table>
             <h3>Sensormøtet</h3>
             De som skal være tilstede er sensor og veilederne for de prosjektene som har vært presentert,
             men det er også ønskelig at flest mulig av de andre veilederne deltar. Formelt fastsettes karakteren
             på et prosjekt i felleskap av sensor og prosjektets veileder. På sensormøtet blir imidlertid alle
             prosjektene diskutert i plenum og målet er å komme frem til en felles konsensus for karaktersettingen
             av alle prosjektene.
             <h3>Spørsmål</h3>
             Ta kontakt med undertegnede hvis det skulle være uklarheter eller hvis dere skulle ha spørsmål
             som det ikke gis svar på her.<br/><br/>
             Tor Krattebøl <br/>
             E-post: tor.krattebol(a)hioa.no
        </div>
   </body>
</html>
