<?php
/* My own me-page to start with */

include("config.php");

// Get small bits and pieces from various views
// $skoghImage   = file_get_contents(__DIR__."/incl/mos_as_small_image.html");
$skoghByline  = file_get_contents(__DIR__."/incl/byline.html");

// Create the data array which is to be used in the template file
$data['title'] = "Min me.sida med HTML5Boilerplate";
$data['meta_description'] = "Min egna me-sida";
$data['main'] = <<<EOD
<article class='justify'> 
<figure class='standard'> 
	<img src='img/me2.jpg' alt='Johanna Skogh'/> 
</figure>

<p>Jag heter Johanna Skog om man kallar passet, Johanna Skogh fall man frågar pappa men själv brukar jag stava det Schough. Mycket beror på att folk jämt antar att Skog stavas med 1 eller 2 o:n och inga andra konstigheter alls. Jag vill alltså krångla till det och det är väl det enda i livet jag vill krångla till. </p> 

<p>Jag har alltid sagt åt mig själv att jag ska börja göra hemsidor. Att börja med en till mig själv för att sedan kunna expandera ut i någon slags verksamhet. Jag har samtidigt alltid varit dålig på att ta tummen ur. Det är lite därför jag är här idag. För att lyssna på vad jag alltid har sagt, och göra något åt saken. 
</p> 

<p> Annars i livet vill jag mest bli författare. Helst av allt skriva manus. Eller filma dokumentärt. Då kan man resa, filma, lära sig något och sprida information samtidigt. När det kommer till intressen är det ju då redan underförstått att jag gillar film, design, skriva, resa, kreativitet och kunskap. Men jag har faktiskt fler intressen utöver det. Till exempel idrott, främst innebandy och fotboll men jag kan se på allt. Till och med snooker och dart. Jag tycker även om min hund eller spendera en kväll i soffan med min sambo. Ni vet, låtsas vara vuxen fast att man aldrig kommer sluta vara barn.
</p> 
</article>
{$skoghByline}

EOD;

// hand over to the template engine
include(__DIR__."/theme/template.php"); 