<?php
$count = 10;
function Addcount(){
    $count = 100;
    $count = $count+$count;
    echo $count;
    echo "<br/>";
}
Addcount();
echo $count;
?>