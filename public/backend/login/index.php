<?php

// Inisialisasi Sesi
session_start();

// Check jika pengguna sudah login, makan akan diarahakan ke Halaman Home
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome/");
    exit;
}
 
// Mengikutkan file Config.php
require_once "../stuff-code/config.php";
require_once "auth/index.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>FATechID - Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="../assets/images/icons/favicon-192x192.png"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/colorlib/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.css" />
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/colorlib/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="../assets/colorlib/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/colorlib/css/main-login.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/colorlib/css/util.css">
<!--===============================================================================================-->

<style type="text/css">

body{
  background-image:url(../assets/colorlib/wave-bot1.svg);
  background-repeat: no-repeat;
  background-size:cover;
  background-attachment: fixed;
  opacity:0.94;
    }
    
</style>

</head>
<body>
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="../assets/images/img-01.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <span class="login100-form-title">
                        <a href="../../learning-project" <i class="fas fa-home fa-1x"></a>&nbsp;</i>&nbsp;Member Login
                    </span>

                    <div class="wrap-input100 validate-input <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="username" placeholder="Email" value="<?php echo $username; ?>">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                        <span class="help-block"><?php echo $username_err; ?></span>
                    </div>

                    <div class="wrap-input100 validate-input <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                        <span class="help-block"><?php echo $password_err; ?></span>
                    </div>

                    <td colspan="2"><font color="#D80B24"><?php echo $_SESSION['checking']; ?><?php echo $_SESSION['checking']="";?></font></td>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="#">
                            Password?
                        </a>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="../register">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    
<!--===============================================================================================-->  
    <script src="../assets/colorlib/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="../assets/colorlib/vendor/bootstrap/js/popper.js"></script>
    <script src="../assets/colorlib/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="../assets/colorlib/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="../assets/colorlib/vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="../assets/colorlib/js/main.js"></script>

</body>
</html>