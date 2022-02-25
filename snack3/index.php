<!-- Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. -->
<?php
$rand_num = [];

// for ($i = 0; $i < 15; $i++) {

// }
$i = 0;
while (count($rand_num) <= 15) {
    $n = random_int(1, 17);
    if (!in_array($n, $rand_num)) {
        $rand_num[$i] = $n;
    }
    $i++;
}



var_dump($rand_num)

?>