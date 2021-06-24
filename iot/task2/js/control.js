
//this function will be called when the save button is pressed so it handels sending the values to the server
function sendMove(id) {

    //preparing the data to be sent
    var datastr = "move=" + id;

    //data will be sent as http request using this method
    var xhttp = new XMLHttpRequest();

    //the url, update it to match your case
    var url = "http://localhost/task2/php/receiver.php?" + datastr;

    //this method will open the http request
    xhttp.open("GET", url, true);
    xhttp.setRequestHeader('Content-Type', 'text/html; charset=UTF-8'); // setting headers for the response

    //to wait for the server response and log it to the console
    xhttp.onload = function () {
        if (xhttp.readyState === xhttp.DONE) {
            if (xhttp.status === 200) {
                console.log(xhttp.responseText);
            }
        }
    };

    xhttp.send(); // sending the data to the server 
}
