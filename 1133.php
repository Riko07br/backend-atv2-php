<?php
$n1 = fgets(STDIN);
$n2 = fgets(STDIN);

if ($n2 < $n1) {
    $tmp = $n2;
    $n2 = $n1;
    $n1 = $tmp;
}

for ($i = $n1 + 1; $i < $n2; $i++) {
    if ($i % 5 == 2 || $i % 5 == 3) {
        echo ("$i\n");
    }
}
