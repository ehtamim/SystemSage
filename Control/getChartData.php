<?php
require_once('Model/database.php');
$val=10;

$birthrate = "SELECT year,birth FROM yearlybirth ORDER BY id";
$deathrate = "SELECT year,death FROM yearlydeath ORDER BY id";

$connection = new db();
$conobj=$connection->OpenCon();
$birthResult = mysqli_query($conobj,$birthrate);
$deathResult = mysqli_query($conobj,$deathrate);

$birthData = array();
foreach ($birthResult as $row) {
	$birthData[] = $row;
}
$deathData = array();
foreach ($deathResult as $row) {
	$deathData[] = $row;
}

mysqli_close($conobj);

$birthjson= json_encode($birthData);
$deathJson= json_encode($deathData);
echo "<script>var birthdata = $birthjson;</script>";
echo "<script>var deathdata = $deathJson;</script>";
?>