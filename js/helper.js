function signup() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let pass = document.getElementById("pass").value;
    let img = document.getElementById("img").value;
    if (name && email && pass && img != "") {
        if (confirm(" Please Confirm For Registration !! ") == true) {
            $(document).ready(function () {
                $("#signup").click();
            });
        } else {
            window.location = "index.php";
        }
    } else {
        alert("Please Fill Registration Form => !!");
    }
}
