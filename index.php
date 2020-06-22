<?php
$db_host = "localhost";
$db_id = "root";
$db_pass = "";
$db_name = "players";
$conn = new mysqli($db_host,$db_id,$db_pass,$db_name);
 
if($conn->connect_error){
    die ("connection not build<br>");
}else{
    echo "database connected<br>";
}

$sql = "SELECT * FROM data_list";
$result = $conn->query($sql);
//echo $result-> num_rows;
if($result-> num_rows>0){
   while($row=$result->fetch_assoc()){
    foreach($row as $key=>$val){
        echo $key ." : " . $val . "<br>" ;
    }
    
}
}


?>