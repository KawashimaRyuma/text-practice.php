<?php
$name = "ryuma";
if ($name == "ryuma") {
    echo "私は" . $name ."です";
    echo"\n";
}else {
    echo $name . "ではありません";
    echo "\n";
}

$total = 0;

for ($i = 1; $i <= 10000; $i++){
$total += $i;
}
echo $total;
echo "\n";

$fruits = array("apple", "peach", "melon", "orange", "pear");

foreach($fruits as $fruits){
    echo "要素は" .  $fruits;
    echo "\n";
}

