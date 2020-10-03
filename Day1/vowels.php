<?php
$word=array("S","h","r","e","y","a");
$val=array_values($word)[0];
$v=strtolower($val);
        switch($v){
            case 'a':echo "$v  is a vowel.";
                 break;
            case 'e':echo "$v is a vowel.";
                 break;
            case 'i':echo "$v is a vowel.";
                 break;
            case 'o':echo "$v is a vowel.";
                 break;
            case 'u':
            echo "$v is a vowel.";
                 break;
            default: echo " It is consonant."; break;
        }
    


?>