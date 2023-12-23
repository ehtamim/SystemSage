<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "systemsage";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }

 function LastRow($conn,$table)
 {
    $result=$conn->query("SELECT * FROM $table ORDER BY id DESC LIMIT 1");
    return $result;
 }
 
 function CheckUser($conn,$table,$username,$password,$status)
 {
   $result = $conn->query("SELECT * FROM $table WHERE username='$username' AND password='$password' AND status='$status'");
   return $result;
 }

 function UpdateUser($conn,$table,$id,$name,$email,$status)
 {
  $result = $conn->query("UPDATE $table SET name='$name',email='$email',status='$status' WHERE id='$id'");
  return $result;
 }

 function DeleteData($conn,$table,$id1,$id2)
 {
  $result = $conn->query("DELETE FROM $table WHERE photo_id='$id1' AND user_id='$id2'");
  return $result;
 }

 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }

 function FindById($conn,$table,$id)
 {
$result = $conn->query("SELECT * FROM  $table WHERE id='$id'");
 return $result;
 }

 function InsertBirthRate($conn,$table,$year,$rate)
 {
  $result = $conn->query("INSERT INTO $table (year,birth) VALUES ('$year','$rate')");
  return $result;
 }

 function InsertDeathRate($conn,$table,$year,$rate)
 {
  $result = $conn->query("INSERT INTO $table (year,death) VALUES ('$year','$rate')");
  return $result;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>