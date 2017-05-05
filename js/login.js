var attempt = 3;

function validate(){
    var username = document.getElementById("name").value;
    var password = document.getElementById("pwd").value;
    if ( username == "admin" && password == "admin"){
        alert ("Login successfully");
        window.location = "admin.php";
    }
    else {
        attempt--;
        alert("You have left " + attempt + " attempt;");

        if (attempt == 0) {
            document.getElementById("name").disabled = true;
            document.getElementById("pwd").disabled = true;
            document.getElementById("login").disabled = true;
        }
    }

}
