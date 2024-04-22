<?php

$n=5;

for ($i=0;$i<2*$n-1;$i++) {

    if($i<$n){
        $c = 2*($n-$i)-1;
    }else{
        $c = 2*($i-$n+1)+1;
    }

    for ($j=0;$j<$c;$j++) {
        echo " ";

    }

    for ($k=0;$k<2*$n-$c;$k++) {
        echo "* ";
    }

    echo "\n";
}