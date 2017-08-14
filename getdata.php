<?php
$serverName="localhost";
$username="root";
$password="";
$dbName="locationmaster";

$con=mysql_connect($serverName,$username,$password,$dbName);
if(!$con)
{
    die("connection failed");
}
mysql_select_db($dbName)or die ("canot select db");
$sql="select locations from locationmaster";
$result=mysql_query($sql);
$data =array();
while($row=mysql_fetch_array($result))
{
    $data[]=$row;

}
   
   header('Content-Type: application/json');

echo json_encode($data);
?>