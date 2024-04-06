<?php

require("index.php");

// if ($gungyuga['umur'] >= 25) {
//     echo $gungyuga['pekerjaan'] . PHP_EOL;
// } elseif ($gungyuga['umur'] <= 7) {
//     echo $gungyuga['hobi'][0] . PHP_EOL;
//     echo $gungyuga['hobi'][1] . PHP_EOL;
//     echo $gungyuga['hobi'][2] . PHP_EOL;
// } else {
// echo $gungyuga['pendidikan'];
// }

switch ($gungyuga['nilai']) {
    case'A';
        echo "Sangat Baik";
        break;
    case'B';
        echo "Baik";
        break;
    case'C';
        echo "Cukup";
        break;
    case'D';
        echo "Kurang";
        break;

    default;
        echo "Tidak Lulus";
        break;
}