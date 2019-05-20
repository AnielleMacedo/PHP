<?php 






 $vetor = array(
 		"Campeao"=> "vasco",
 		"Vice"=> "vghg",
 		"Terceiro"=> "flamengo");


    $keys = array_keys($vetor);
    $values = array_values($vetor);

    $result = array();
           foreach ($keys as $i => $k) {
             $result[$k][] = $values[$i];
           }
    return  $result;
print_r($result);







 ?>