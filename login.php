<?php
include "koneksi/koneksi.php";
$eror = "";
if (isset($_POST["login"])) {
  $username = strtolower($_POST["username"]);
  $password = $_POST["password"];
  

  if ($username == "" && $password == "") {
    $eror .= "Inputan Tidak Boleh Kosong";
  }
}
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <!-- boxicon -->
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />

        <!-- my css -->
        <link rel="stylesheet" href="css/style.css" />
        <title>Login</title>
    </head>
    <body style="background-color: #eaeaea">
        <div class="container_form">
            <form method="post" accept-charset="utf-8">
                <h1>Login</h1>
                <div class="form_content">
                    <label for="username"><i class="bx bx-user"></i></label>
                    <input
                        class="username"
                        type="text"
                        name="username"
                        id="username"
                        placeholder="Email or Username"
                    />
                </div>
                <span><?php echo $eror; ?></span>
                <div class="form_content">
                    <label for="password"><i class="bx bx-lock"></i></label>
                    <input
                        class="password"
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Password"
                    />
                </div>
                <span><?php echo $eror; ?></span>
                <div class="checkbox">
                    <input onclick="showPasswd()" id="showPw" type="checkbox" />
                    <label for="showPw">Show Password</label>
                </div>

                <a class="forgot" href="#">
                    <p>Forgot Password?</p>
                </a>

                <button type="submit" name="login">Login</button>

                <p class="register">
                    Dont Have Account? <a href="register.php">Sign Up</a>
                </p>
            </form>
        </div>
        <script src="js/script.js"></script>
    </body>
</html>
