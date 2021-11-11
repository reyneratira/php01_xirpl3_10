<?php

echo date("d-m-Y") ." ".  date("h:i:sa"). "<br>";

for($i=1; $i<=6; $i++) {
for($j=6; $j>=$i; $j--)
{
echo '*';
}
echo '<br>';
}
?>