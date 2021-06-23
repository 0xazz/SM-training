
//the following lines are for updating the sliders' values as the user change them
var eng1 = document.getElementById("eng1");
var out1 = document.getElementById("out1");
out1.innerHTML = eng1.value;
eng1.oninput = function () {
    out1.innerHTML = this.value;
}
var eng2 = document.getElementById("eng2");
var out2 = document.getElementById("out2");
out2.innerHTML = eng2.value;
eng2.oninput = function () {
    out2.innerHTML = this.value;
}
var eng3 = document.getElementById("eng3");
var out3 = document.getElementById("out3");
out3.innerHTML = eng3.value;
eng3.oninput = function () {
    out3.innerHTML = this.value;
}
var eng4 = document.getElementById("eng4");
var out4 = document.getElementById("out4");
out4.innerHTML = eng4.value;
eng4.oninput = function () {
    out4.innerHTML = this.value;
}
var eng5 = document.getElementById("eng5");
var out5 = document.getElementById("out5");
out5.innerHTML = eng5.value;
eng5.oninput = function () {
    out5.innerHTML = this.value;
}
var eng6 = document.getElementById("eng6");
var out6 = document.getElementById("out6");
out6.innerHTML = eng6.value;
eng6.oninput = function () {
    out6.innerHTML = this.value;
}

//this function will be called when the save button is pressed so it handels sending the values to the server
function sendData() {

    //preparing the data to be sent
    var datastr = "eng1=" + eng1.value + "&eng2=" + eng2.value + "&eng3=" + eng3.value + "&eng4=" + eng4.value + "&eng5=" + eng5.value + "&eng6=" + eng6.value;

    //data will be sent as http request using this method
    var xhttp = new XMLHttpRequest();

    //the url, update it to match your case
    var url = "http://localhost/IOT/task1/php/ajax.php?" + datastr;

    //this method will open the http request
    xhttp.open("GET", url, true);
    xhttp.setRequestHeader('Content-Type', 'text/html; charset=UTF-8'); // setting headers for the response

    //to wait for the server response and alert it
    xhttp.onload = function () {
        if (xhttp.readyState === xhttp.DONE) {
            if (xhttp.status === 200) {
                alert(xhttp.responseText);
            }
        }
    };

    xhttp.send(); // sending the data to the server 
}

//similar to the method above but handles the start button
function start() {
    var xhttp = new XMLHttpRequest();
    var url = "http://localhost/IOT/task1/php/ajax.php?botstat=1";
    xhttp.open("GET", url, true);
    xhttp.onload = function () {
        if (xhttp.readyState === xhttp.DONE) {
            if (xhttp.status === 200) {
                alert(xhttp.responseText);
            }
        }
    };
    xhttp.send();
}