<?php
// 0<=n<m
function euclides_r($m, $n): int {
    if ($n == 0) return $m;
    return euclides_r($n, $m % $n);
}

$cases = fgets(STDIN);

$final_ans = "";
for ($i = 0; $i < $cases; $i++) {
    $inputs = explode(" ", fgets(STDIN));
    $f1 = (int)$inputs[0];
    $f2 = (int)$inputs[1];

    if ($f1 == $f2) {
        $final_ans .= "1\n";
    }

    if ($f1 == 1) {
        $final_ans .= "$f2\n";
        continue;
    }

    if ($f2 == 1) {
        $final_ans .= "$f1\n";
        continue;
    }

    if ($f1 > $f2) {
        $tmp = $f1;
        $f1 = $f2;
        $f2 = $tmp;
    }

    $ans = euclides_r($f1, $f2);

    $final_ans .= "$ans\n";
}

echo $final_ans;
