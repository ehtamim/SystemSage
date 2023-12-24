setInterval(autoInsert, 3000000);
function autoInsert() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() 
    {
        if (this.readyState == 4 && this.status == 200) 
        {
            console.log(this.responseText);
        }
    };
    xhttp.open("GET", "http://localhost/SystemSage/Control/autoInsert.php", true);
    xhttp.send();
  }


var birthyear=[];
var birthrate=[];
var prevBirthData=[];
var prevDeathData=[];

setInterval(getdata, 1000);
function getdata()
{
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() 
    {
        if (this.readyState == 4 && this.status == 200) 
        {
            console.log(birthdata);
            console.log(deathdata);
        }
    };
    xhttp.open("GET", "http://localhost/SystemSage/Control/getChartData.php", true);
    xhttp.send();

    if(prevBirthData!==birthdata)
    {
        prevBirthData=birthdata;
        prevDeathData=deathdata;
        checkdata();
    }
}

function checkdata(){
    for (var i in birthdata) {
        birthyear.push(birthdata[i].year);
        birthrate.push(birthdata[i].birth);
    }
    prevBirthData=[];
    prevDeathData=[];
}

function showGraph(){
    var chartdata = {
        labels: birthyear,
        datasets: [
            {
                label: 'Total Birth',
                backgroundColor: '#49e2ff',
                borderColor: '#46d5f1',
                hoverBackgroundColor: '#CCCCCC',
                hoverBorderColor: '#666666',
                data: birthrate
            }
        ]
    };

    var graphTarget = $("#graphCanvas");
    var barGraph = new Chart(graphTarget, {
        type: 'bar',
        data: chartdata
    });
}

