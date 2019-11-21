<?php
$month=date('F', time());
if ($month == 'August'){
  echo "<p>It's August, so it's really hot.</p>";
}else{

  echo "<p>Not August, so at least not in the peak of the heat.</p>";

}
?>