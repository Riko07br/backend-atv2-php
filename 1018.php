<?php
$input = fgets(STDIN);
$original_number = $input;

$notes = [100, 50, 20, 10, 5, 2, 1];
$counter = array_fill(0, sizeof($notes), 0);    //create an array of zeroes

//overengineering at its best
for ($i = 0; $i < sizeof($notes); $i++) {
    while ($input >= $notes[$i]) {
        $input -= $notes[$i];
        $counter[$i]++;
    }
}

echo ("$original_number");

for ($i = 0; $i < sizeof($notes); $i++) {
    echo ("$counter[$i] nota(s) de R$ $notes[$i],00\n");
}
