<?php
function is_letter($ascii_char): bool {
    //uppercase ascii 65-90
    //lowercase ascii 97-122
    return ($ascii_char >= 65 && $ascii_char <= 90) || ($ascii_char >= 97 && $ascii_char <= 122);
}

function print_ascii_array($array) {
    $string = "";
    foreach ($array as $chr) {
        $string .= chr($chr);
    }
    echo $string . "\n";
}

$cases = fgets(STDIN);

for ($i = 0; $i < $cases; $i++) {
    $input = fgets(STDIN);
    $input = rtrim($input); //remove whitespaces

    $ascii_array = unpack("C*", $input);

    //move +3
    for ($j = 1; $j < sizeof($ascii_array) + 1; $j++) {
        if (is_letter($ascii_array[$j]))
            $ascii_array[$j] += 3;
    }

    //invert
    $ascii_array = array_reverse($ascii_array, false);

    //move half -1
    $start = floor(sizeof($ascii_array) / 2);
    for ($j = $start; $j < sizeof($ascii_array); $j++) {
        $ascii_array[$j] += -1;
    }

    print_ascii_array($ascii_array);
}
