<?php
    define("br"," </br>");
    echo "Melek: ".br;
    for ($i = 1; $i <= 10; $i++){
        if($i > 2 && $i < 7){
            // echo br;
            continue;
        }else{
            echo "មេលេខ $i: ".br;
            for($j = 1; $j <= 10;$j++){
                echo "$i x $j = ".($i* $j).br;
            }
            echo "<h1><br></h1>";
        }
    }
?>