<?php
$inputs = fgets(STDIN);
$numbers = array_map("intval", explode(" ", $inputs));

$a = $numbers[0];
$b = $numbers[1];
$c = $numbers[2];

$biggerAB = ($a + $b + abs($a - $b)) / 2;

$biggest = ($c + $biggerAB + abs($c - $biggerAB)) / 2;

echo ("$biggest eh o maior");
