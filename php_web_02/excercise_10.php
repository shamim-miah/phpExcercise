<?php

//Create array.

$ct=array("Tokyo","Mexico City","New York City","Mumbai","Seoul","Shanghai","Lagos","Buenos Aires","Cairo","London"); 

foreach($ct as $c){

  echo "$c, ";

}


sort($ct);


echo "\n<ul>\n" ;

foreach($ct as $c){

  echo "<li>$c</li>\n";

}

echo "</ul>" ;

array_push($ct, "Los Angeles", "Calcutta", "Osaka", "Beijing") ;

sort($ct);

echo "\n<ul>\n";

foreach($ct as $c){

  echo "<li>$c</li>\n";

}

echo "</ul>";

?>