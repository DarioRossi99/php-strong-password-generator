<?php

/**
 * 
 */

function randomPass($lunghezza){
    $small ="abcdefghilmnopqrstuwvxyjz";
    $big ="ABCDEFGHILMNOPQRSTUWVXYJZ";
    $number ="0123456789";
    $symbol ="-_.:,;";

    $passRandom = $small . $big . $number . $symbol;

    $finalPassword = '';

    for($i=0; $i < $lunghezza; $i++) {
       $charsIndex = rand(0, strlen($passRandom) - 1);
       $finalPassword .=  $passRandom[$charsIndex];
    }

    return $finalPassword;
}
?>