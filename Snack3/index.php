<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
    $array=[];
    while (count($array) < 15) {
        $numero=rand(1,100);
        if (!in_array($numero, $array)) {
            $array[]=$numero;
        }
    }
    var_dump($array);
    for ($i=0; $i < count($array); $i++) { 
       echo "<p>". "$array[$i]" ."</p>";
    }
?>