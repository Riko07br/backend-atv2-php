<?php
$cases = fgets(STDIN);

for ($i = 0; $i < $cases; $i++) {
    $input = fgets(STDIN);
    $array = str_split(strval($input));

    $leds = 0;

    for ($j = 0; $j < sizeof($array); $j++) {
        switch ($array[$j]) {
            case '1':
                $leds += 2;
                break;
            case '2':
            case '3':
            case '5':
                $leds += 5;
                break;
            case '4':
                $leds += 4;
                break;
            case '6':
            case '9':
            case '0':
                $leds += 6;
                break;
            case '7':
                $leds += 3;
                break;
            case '8':
                $leds += 7;
                break;
            default:
                break;
        }
    }
    echo "$leds leds\n";
}
