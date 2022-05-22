function showPass() {
    var pass = document.getElementById("password");
    if (pass.type === "password") {
        pass.type = "text";
    } else {
        pass.type = "password";
    }
}

function showPassAgain() {
    var x = document.getElementById("repassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}