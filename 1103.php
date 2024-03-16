<?php
while (true) {
    $inputs = fgets(STDIN);
    $numbers = array_map("intval", explode(" ", $inputs));

    if ($numbers[0] == 0 && $numbers[1] == 0 && $numbers[2] == 0 && $numbers[3] == 0)
        break;

    $h1 = $numbers[0];
    $m1 = $numbers[1];
    $h2 = $numbers[2];
    $m2 = $numbers[3];

    $total = 0;

    if ($h1 < $h2) {
        $total = (($h2 - $h1) * 60) + $m2 - $m1;
    } else if ($h1 == $h2) {
        if ($m1 > $m2)
            $total = (24 * 60);

        $total += $m2 - $m1;
    } else {
        $total = ((24 + $h2 - $h1) * 60) + $m2 - $m1;
    }
    echo ("$total\n");
}
