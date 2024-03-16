<?php
$n1 = fgets(STDIN);
$n2 = fgets(STDIN);

if ($n2 < $n1) {
    $tmp = $n2;
    $n2 = $n1;
    $n1 = $tmp;
}

$sum = 0;
for ($i = $n1 + 1; $i < $n2; $i++) {
    if ($i % 2 != 0) {
        $sum += $i;
    }
}

echo ("$sum\n");
