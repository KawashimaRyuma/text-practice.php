<?php
 function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number<$a){
     } elseif($max_number>$a) {
     }
 }
 return $max_number;
 }
 echo max_array ([5,2,3,9,7]);
 ?>