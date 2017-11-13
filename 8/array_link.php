<?php

$bands = array("The Who", "The Beatles", "The Rolling Stones");
foreach ($bands as $band ) {
    $band = strtoupper($band);
}
echo "<pre>";
print_r($bands);
echo "</pre>";

$bands = array("The Who", "The Beatles", "The Rolling Stones");
foreach ($bands as &$band) {
    $band = strtoupper($band);
}
echo " <pre> ";
Print_r($bands);
echo " < /pre> ";
