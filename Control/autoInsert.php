<?php
include('../Model/database.php');

$previousBirthYear=$previousDeathYear=$previousBirth=$previousDeath="";

$connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->LastRow($conobj,"yearlybirth");

while($row = $userQuery->fetch_assoc())
    {
        $previousBirthYear=$row['year'];
        $previousBirth= $row['birth'];
    }

$userQuery=$connection->LastRow($conobj,"yearlydeath");
while($row = $userQuery->fetch_assoc())
    {
        $previousDeathYear=$row['year'];
        $previousDeath= $row['death'];
    }

    $birthyear=$previousBirthYear+1;
    $birth=$previousBirth+rand(1500, 5000);
    $deathyear=$previousDeathYear+1;
    $death=$previousDeath+rand(500, 2000);
    $userQuery=$connection->InsertBirthRate($conobj,"yearlybirth",$birthyear,$birth);
    $userQuery1=$connection->InsertDeathRate($conobj,"yearlydeath",$deathyear,$death);

if($userQuery==TRUE && $userQuery1==TRUE)
{
    echo "Sucessfully Inserted";
}
$connection->CloseCon($conobj);

?>