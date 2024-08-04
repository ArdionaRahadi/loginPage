let check = document.getElementById("showPw");

function showPasswd() {
    let passwd = document.getElementById("password");
    if (passwd.type === "password") {
        passwd.type = "text";
    } else {
        passwd.type = "password";
    }
}