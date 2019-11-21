<?php

echo "<table border=\"1\">";



for ($r=1; $r<=7; $r++){

  echo "<tr>\n";

  for ($c=1; $c<=7; $c++){

    $x=$c * $r;

    echo "<td>$x</td>\n";

  }

  echo "</tr>";

}

echo "</table>";

?>