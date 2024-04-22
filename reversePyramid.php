<?php

$n=5;

for ($i=0;$i<$n;$i++) {

    for ($j=0;$j<2*$i;$j++) {
        echo " ";

    }

    for ($k=0;$k<2*($n-$i)-1;$k++) {
        echo "* ";
    }

    echo "\n";
}