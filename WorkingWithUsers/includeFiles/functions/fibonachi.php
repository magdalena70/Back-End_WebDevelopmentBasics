<?php
function print_Fibonachi(){
    $a = $b = 1;
    echo "1 1 ";
    for($i = 0;$i < 10;$i++){
        echo ($a + $b) . " ";
        $b = $a + $b;
        $a = $b - $a;
    }
}