<?php

$yourChoice = array();
$trekking = array();

echo "geef je 6 getallen tussen 1 en 42 \n";
for ($i = 1; $i <= 6; $i++) {
    echo $i . ". ";
    $invoer = readline("geef je lotto: ");

    if ($invoer == "stop") {
        return;
    }

    if ($invoer > 42 || $invoer < 1) {
        $i--;
        echo "getal is onjuist voer een getal weer \n";
        continue;
    }

    if (in_array($invoer, $yourChoice)) {
        $i--;
        echo "Getal is al gegeven \n";
        continue;
    }
    array_push($yourChoice, $invoer);
}
for ($i = 0; $i < 6; $i++) {

    $computer = rand(1, 42);

    if (in_array($computer, $trekking)) {
        $i--;
        continue;
    }

    array_push($trekking, $computer);
}

sort($yourChoice);
sort($trekking);

$points = 0;
foreach ($yourChoice as $input) {
    foreach ($trekking as $num) {
        if ($input == $num) {
            $points++;
        }
    }
}

echo "points $points \n";

echo "Your numbers: ";
foreach ($yourChoice as $num) {
    echo " $num, ";
}
echo "\nNumbers drawn: ";
foreach ($trekking as $num) {
    echo " $num, ";
}
echo "\n";

if ($points == 3) {
    echo 'you won $10';
} elseif ($points == 4) {
    echo 'you won $1000';
} elseif ($points == 5) {
    echo 'you won $1000.000';
} elseif ($points == 6) {
    echo 'you won $10.000.000';
}
