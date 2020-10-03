<?php
    $num1 = 10;
    $num2 = 10;
    $arr = array("\nAddition of $num1+$num2="=>$num1+$num2,
                "\nSubtraction of $num1-$num2="=>$num1-$num2,
                 "\nMultiplication of $num1*$num2="=>$num1*$num2,
                "\nDivision of $num1/$num2="=>$num1/$num2);
    foreach($arr as $operation=>$result){
        echo "$operation"."$result<br>";
    }
?>