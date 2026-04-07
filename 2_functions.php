<?php
function fact($n){
    $f=1;
    for($i=1;$i<=$n;$i++) $f*=$i;
    return $f;
}

function prime($n){
    for($i=2;$i<$n;$i++){
        if($n%$i==0) return "Not Prime";
    }
    return "Prime";
}

function rev($s){
    return strrev($s);
}

echo "Factorial of 5: ".fact(5)."<br>";
echo "7 is ".prime(7)."<br>";
echo "Reverse: ".rev("Hello");
?>