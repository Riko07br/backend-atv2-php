<?php

$ignoredInput = fgets(STDIN);

//empty enter has 2 chars for some reason, so this breaks this condition is met
while (strlen($ignoredInput) > 2) {
    $inputs = fgets(STDIN);
    $slugs = array_map("intval", explode(" ", $inputs));

    rsort($slugs);

    if ($slugs[0] < 10)
        echo ("1\n");
    else if ($slugs[0] < 20)
        echo ("2\n");
    else
        echo ("3\n");

    $ignoredInput = fgets(STDIN);
}
