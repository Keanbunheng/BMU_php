<?php
    define("br"," </br>");
    echo "For Loop: ".br;
    for ($i = 1; $i <= 10; $i++){
        echo "$i".br;
    }

    echo "While Loop: ".br;
    $i = 1;
    while ( $i <= 10){
        echo "$i".br;
        $i++;
    }

    echo "Do While Loop: ".br;
    $i = 1;
    do{
        echo "$i".br;
        $i++;
    }while ( $i <= 10);
?>