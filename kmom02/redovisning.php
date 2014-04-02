<?php
/* Report-page */

include("config.php");

// Create the data array which is to be used in the template file
$data['title'] = "Redovisning";
$data['meta_description'] = "Alla redovisningar";
$data['main'] = <<<EOD
<h1> Redovisning</h1>
<article class='justify'> 
<h2>KMOM02</h2>
<p> Jag har sett att många namnger det som ska namnges med deras smeknamn sen lång tid tillbaka. Därför valde jag Jorre (j0rr3) som jag kallades från det att jag var ung till att jag blev gammal. </p>

<p> Då jag inte känner mig alltför säker på detta än så valde jag inte att göra några avsteg från Lydia utan följde tutorialen utan att avvika ifrån den. Jag fann den svår men det börjar bli klarare. Speciellt när man såg slutresultatet av sin kod. Eftersom att jag följde tutorialen stötte jag inte på annat än slarvfel, men det gjorde inte momentet mindre tungt då det var mycket man skulle förstå. Jag skulle väl ljuga fall jag förstod allt, men jag ska gå igenom alla länkar som det länkades till och läsa igenom mina anteckningar så kommer nog det sjunka ner också. Jag valde att göra denna uppgift i lugn och ro, då jag tidigare har fått stressat och bara skjutit på oklarheter som i sin tur självklart har försvårat det för mig senare i kursen. </p>

<p> Jag gjorde inte extrauppgiften. Däremot tog jag tag i github. Jag gillar det redan trots att jag inte förstår allt av det. Det verkar vara ett smidigt sätt att lägga upp sina filer på servern och terminal är mer tacksamt att jobba med än filezilla tycker jag. Dessutom är det roligare då man får koda upp det och inte bara dra i lite filer. Nu ska vi se fall jag lyckas uppdatera detta och lägga upp det på studentservern! </p>

<p> Jag kollade också de två länkar på andra MVC ramverk men jag känner mig fortfarande för osäker för att välja vilket som verkar bäst. Jag litar blint på coachen i detta fall. De verkar dock vara snarlika och när man väl förstår sig på allt man kodar kan jag inspireras av andra än det jag får serverat framför och förmodligen kommer kunna göra anpassningar som gör det bäst för mig. Men än så länge är jag bara eleven och lyssnar på min lärare. </p>
<hr>

<h2>KMOM01</h2>

<p> Precis som i föregående kurs använder jag mig av Coda 2, FileZilla och firefox samt safari. </p>

<p>Hittills vet jag inte fall jag är så positiv till Boilerplate. Men det är väl precis som förra kursen. Jag blir putt för att jag precis har börjat gilla anax och sen ska man börja på något annat. Lagom till att jag börjar gilla detta blir det väl dags att lära sig något nytt... Men, jag förstår att Boilerplate förenklar och att det används av en anledning. Just nu måste jag bara släppa anax, ta med det som hör samman och sen gå vidare. När det är gjort kommer detta att kännas bra. Man känner ju igen en del från anax, men samtidigt är mycket ändrat. Jag vet som sagt inte vad jag föredrar än. Template är väl det som tenderar att förvirra mig mest. Sidorna som me.php och redovisning.php är det inga konstigheter med, men samma där så var det likadant när det kom till Anax. Jag tror att mitt problem är att jag fortfarande är lite av en nybörjare och inte förstår alla buggfix etc som Boilerplate står för.
</p>

<p>Jag vägrade att ändra på min struktur i CSS, vet inte fall det var meningen att man skulle göra det eller inte men jag kände mig väldigt bekväm med vad jag hade. Jag kollade igenom main och normalize och de verkar vara komplement till min css-mall. Jag läste om Boilerplates "common helpers" i CSS och de tilltalar mig. Jag ser faktiskt fram emot att kunna nyttja deras funktioner och få det förenklat för mig. Det jag finner roligast att jobba med är just det CSS gör, alltså layouten.
Utseendet på denna sida blev dock väldigt lik, nästintill identisk, min me sida från förra kursen. Anledningen är den klassiska tidsbristen (denna gång gick faktiskt min dator sönder) och att jag köper mig själv tid genom att göra klart de två första uppgifterna i denna kurs. Är dock rätt nöjd med hur det ser ut så det är inte fyskam för det. 
</p>

<p> Jag tänkte inte så mycket när jag gjorde min Boilerplate. Det var mest "jaha, nu gör vi så", "okej, då ska vi ha en sån här". Ibland ifrågasatte jag lite, ibland undrade jag fall jag gjorde rätt för det kändes enkelt, ibland försökte jag förstå och ibland nickade jag bara godkännande.
</p>

<p> Nu när jag har analyserat Boilerplate lite så är jag väl ganska så sugen på att lära mig mer om det ändå. Som jag skrev ovan så verkar det besitta funktioner som underlättar för ens programmerande och det är väl det vi alla är ute efter?
</p>
<hr>
</article>
EOD;

// hand over to the template engine
include(__DIR__."/theme/template.php"); 