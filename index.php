<?php
include("view/templete.php");
include('control/getChartData.php');
$print=0;
// while(true)
// {
//     $print=$print+10;
//     sleep(5);
// }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/Systemsage/css/mycss.css">
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>
    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>
</body>
</html>
<script src="JavaScript/myjs.js"></script>
<script>
    //var value=$val;
    //console.log(data);
    $(document).ready(function () {
            //showGraph();
            //getdata();
        });
</script>


