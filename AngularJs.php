<?php
header("Access-control-Allow-Origin:*");
header('Content-Type: text/html;charset=utf-8');
$server_name = "localhost";
$user_name = "root";
$password = "root";
$database_name = "wt";
$user = $_POST["User_name"];
$pass = $_POST["Password"];
$con = new mysqli($server_name,$user_name,$password,$database_name);
if($con->connect_error){
die("Failed");
}
else {
$sql = "select * from Login_cred";
$data[] = array();
$result = $con->query($sql);
while($row = $result->fetch_assoc()){
$data[] = array("User_name"=>$row['User_name'],"Password"=>$row['Password']);
}
}
echo json_encode($data);
?>
