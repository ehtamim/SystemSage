setInterval(autoInsert, 2000);
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
    // var xhr = new XMLHttpRequest();
    // xhr.onreadystatechange = function() {
    // if (this.readyState == 4 && this.status == 200) {
    //          console.log(this.responseText);
    //     }
    // };
    // xhr.open("GET", "http://localhost/SystemSage/Control/autoInsert.php", true);
    // xhr.send();
  }