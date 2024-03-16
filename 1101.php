<?php
while (true) {
    $input = fgets(STDIN);
    $na = array_map("intval", explode(" ", $input));

    if ($na[0] <= 0 || $na[1] <= 0) {
        break;
    }

    sort($na);

    $number_line = "";
    $sum = 0;

    for ($i = $na[0]; $i < $na[1] + 1; $i++) {
        $number_line .= "$i ";
        $sum += $i;
    }

    $number_line .= "Sum=$sum\n";
    echo ($number_line);
}
