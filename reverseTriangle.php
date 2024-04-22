<?php 
for ($i=0;$i<5;$i++){
    for($j=0;$j<2*$i;$j++){ 
        echo " ";
    }
    
    for($k=0;$k<5-$i;$k++){
        echo "* ";
    }
    echo "\n";
}