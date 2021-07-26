<?php
$serverName = "localhost";
$username ="lptw";
$pw = "mimatw123";
$dbname ="lp";

$conn = new mysqli($serverName,$username,$pw , $dbname);
if($conn -> connect_error){
    die("fail connection: " . $conn->connect_error);
}
echo "connection successful";
$sql = "Select * from lazytbl";
$result = $conn ->query($sql);
if ($result -> num_rows >0){
    while($row = $result->fetch_assoc()){
        echo "<br>";
        echo $row["id"]. "--". $row["name"];
    }

}
else{
    echo " 0 record!";
}
$conn ->close();
?>