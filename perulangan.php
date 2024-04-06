<?php

require("index.php");

// for ($i = 0; $i < count($gungyuga['hobi']); $i++) {
//     echo $gungyuga['hobi'][$i] . PHP_EOL;
// }

// $a = [
//     'katak', 'kodok', 'laptop', 'lele', 'ikan', 'sate', 'tidur', 'pulang'
// ];

// echo $a[0] . PHP_EOL;
// echo $a[1] . PHP_EOL;
// echo $a[2] . PHP_EOL;
// echo $a[3] . PHP_EOL;
// echo $a[4] . PHP_EOL;

// for ($i =0; $i < count($a); $i++) {
//     echo $a[$i] . PHP_EOL;
// }

// $a = 1;
// while ($a <= 10) {
//     echo "ini perulangan while ke-$a" . PHP_EOL;
//     $a++;
// }

// foreach ($gungyuga as $key => $value) {
//     echo $key . " : " . $value . PHP_EOL;
//     foreach ($gungyuga['hobi'] as $hobi);
//         for ($x = 0; $x < count($gungyuga['hobi']); $x++) {
//             echo $gungyuga['hobi'][$x] . PHP_EOL;
//             }
// }

// foreach ($gungyuga as $key => $value) {
//     if ($key === 'hobi') {
//         echo $key . ' : ' . PHP_EOL;
//         foreach ($value as $hobi) {
//             echo $hobi . PHP_EOL;
//         }
//     } else {
//         echo $key . ' : ' . $value . PHP_EOL;
//     }
// }

foreach ($gungyuga as $key => $value) {
    if ($key == "hobi") {
        echo "hobi" . ":" . PHP_EOL;
        $a = 1;
        foreach ($value as $hobi) {
            echo $a . ". " . $hobi . PHP_EOL;
            $a++;
        }
    } else {
        echo $key . " : " . $value . PHP_EOL;
    }
}