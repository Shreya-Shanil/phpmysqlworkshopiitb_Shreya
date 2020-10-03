<?php
   $number1 = 15;
    $number2 = 20;
    
       if($number1>$number2){
            echo "$number1 is greater than $number2.<br>";
            $number2++;
        }elseif($number1==$number2){
            echo "$number1 is equal to $number2.<br>";
            $number2++;
        }else{
            echo "$number2 is greater than $number1.<br>";
            $number2++;
        }

    
?>