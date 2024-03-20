<?php
function print_ascii_array($array) {
    $string = "";
    foreach ($array as $chr) {
        $string .= chr($chr);
    }
    echo $string . "\n";
}

$cases = fgets(STDIN);

for ($i = 0; $i < $cases; $i++) {
    $cypher = fgets(STDIN);
    $offset = fgets(STDIN);

    $cypher = rtrim($cypher); //remove whitespaces

    $ascii_array = unpack("C*", $cypher);

    for ($j = 1; $j < sizeof($ascii_array) + 1; $j++) {
        $ascii_array[$j] -= $offset;

        //uppercase ascii 65-90
        if ($ascii_array[$j] < 65)
            $ascii_array[$j] += 26;
    }
    print_ascii_array($ascii_array);
}
