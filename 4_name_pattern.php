<?php
$str = "ayush";
$count = strlen($str);
/*

for ($i = 0; $i < $count; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "  $str[$j]  ";
    }

    echo "<br/>";
}
    */
for ($i = $count; $i > 0; $i--) {
    for ($j = 0; $i > $j; $j++) {
        echo "  $str[$j]  ";
    }

    echo "<br/>";
}
