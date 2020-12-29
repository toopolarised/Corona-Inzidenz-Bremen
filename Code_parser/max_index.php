<?php 
//Vorraussetzung für scraping
require ('simple_html_dom.php');
//Daten scrapen mit simple hmtl
$index_general = file_get_html("https://www.butenunbinnen.de/nachrichten/gesellschaft/corona-virus-zahlen-infektion-bremen-100.html");
//only the span from index
$index_scrape = $index_general->find('span[class=corona-infections-entry-limit-number -corona-infections-entry-limit-number-second-warning]');
//get innertext not html
$index_str = $index_scrape[0]->innertext;
//from sting to int
$index_int = intval($index_str);
//calculating days
$index_day = ($index_int-50) ;
//echo result
echo "<div><p><b><span>C</span>
     <span>L</span>
     <span>O</span>
     <span>S</span>
     <span>E</span>  <span>D</span> </b><br><span> Open in" . ceil($index_day) . "days! </span></p>
</div>";

?>