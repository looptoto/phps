<?php
$link = mysqli_connect("localhost", "lptw","mimatw123");
if(!$link){

    echo "Error: Unable to connect mysql." .PHP_EOL;
    echo "Debugging errno: ". mysqli_connect_errno() .PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() .PHP_EOL;
    exit;
}

echo "SuccessL A proper connection to MySQL was made ! The my_db databases is great." .PHP_EOL;
echo "Host Info. :". mysqli_get_host_info($link) .PHP_EOL;
mysqli_close($link);

?>
