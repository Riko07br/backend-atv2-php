<?php
$cases = fgets(STDIN);

$even_array = [];
$odd_array = [];

for ($i = 0; $i < $cases; $i++) {
    $input = fgets(STDIN);

    if ($input % 2 == 0)
        $even_array[] = $input;
    else
        $odd_array[] = $input;
}

sort($even_array);
rsort($odd_array);

for ($i = 0; $i < sizeof($even_array); $i++) {
    echo "$even_array[$i]";
}
for ($i = 0; $i < sizeof($odd_array); $i++) {
    echo "$odd_array[$i]";
}
