<?php
for ($i = 2; $i < 50; $i++) {
    for ($j = 2; $j < $i+1; $j++) {
        if ($i % $j == 0) {
            if ($i != $j) {break; 
        }
        else {echo "<h2>\"$i\" termasuk bilangan prima 1 - 50</h2>";}}
        }
    }

?>