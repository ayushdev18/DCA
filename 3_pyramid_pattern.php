<?php
$n = 9;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= ($n * 2) - 1; $j++) {
        if ($j >= $n - ($i - 1) && $j <= $n + ($i - 1)) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp";
        }
    }
    echo "<br/>";
}
