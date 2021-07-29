
<?php
echo "查询： ".$_POST["name"]. " 从 ".$_POST["startDt"]." 到 ".$_POST["endDt"]."的考勤"; 


$serverName = "118.31.63.36";
$username ="ytcheckin";
$pw = "Yunteng123";
$dbname ="ytcheckin";
$tableName="koudai_checkin_test1";
$col_dt= "checkin_dt";


// where `姓名`='' and checkin_dt between<?php


$conn = new mysqli($serverName,$username,$pw , $dbname);
if($conn -> connect_error){
    die("fail connection: " . $conn->connect_error);
}
echo "<br>connection successful" ."<br>";
echo  "<a href=\"form.html\"> shangyiye</a>";


$sql = "Select distinct * from ".$tableName." where ".$col_dt." between '" .$_POST["startDt"]. "' and '". $_POST["endDt"]."' and `姓名`='" .$_POST["name"]."' order by ".$col_dt;
echo "<br>".$sql."<br>";
$result = $conn ->query($sql);
if ($result -> num_rows >0){
    while($row = $result->fetch_assoc()){
        echo "<br>";
        echo $row["姓名"]. "--". $row["checkin_dt"] . "--" .$row["签到状态"]."---".$row["签到位置"];
    }

}
else{
    echo " 0 record!";
}
$conn ->close();
?>
<br>




