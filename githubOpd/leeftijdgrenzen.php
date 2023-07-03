<?php
$invoer = 0;
$stop = 'stop';




$invoer = readline("voer je leeftijd : ");
if ($invoer > 118 || $invoer < 9) {
    exit;
}
if ($invoer == 10 || $invoer == 16 || $invoer == 18 || $invoer == 50 || $invoer == 67 || $invoer == 100) {
    echo "gefeliciteerd met je verjaadag ";
}
if ($invoer == 62) {
    echo "warning jij wordt 67 over 5 jaar";
}
