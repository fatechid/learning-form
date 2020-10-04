<!----- Create by Mayer ----->

<?php

// Memuat file Config, register-system dan verification
require "../stuff-code/config.php";
require_once "register-system.php";
require_once "verification.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FATechID Client - Register">
    <meta name="author" content="FATechID">
    <meta name="keywords" content="FATechID - Registration">

<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../assets/images/icons/favicon-192x192.png"/>
<!--===============================================================================================-->
    <!-- Title Page-->
    <title>FATechID - Register</title>

    <!-- Icons font CSS-->
    <link href="../assets/colorlib/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../assets/colorlib/vendor/select2/select2.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../assets/colorlib/css/main-register.css" rel="stylesheet" media="all">

    <style type="text/css">

    body{
      background-image:url(../assets/colorlib/wave-bot.svg);
      background-repeat: no-repeat;
      background-size:cover;
      background-attachment: fixed;
      opacity:0.95;
        }
        
  </style>

</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group <?php echo (!empty($firstname_err)) ? 'has-error' : ''; ?>">
                                    <label class="label">First Name</label>
                                    <input class="input--style-4" type="text" name="firstname" value="<?php echo $firstname; ?>">
                                    <span class="help-block"><?php echo $firstname_err; ?></span>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group<?php echo (!empty($lastname_err)) ? 'has-error' : ''; ?>" data-validate = "Valid email is required: ex@abc.xyz">
                                    <label class="label">Last Name</label>
                                    <input class="input--style-4" type="text" name="lastname" value="<?php echo $lastname; ?>">
                                    <span class="help-block"><?php echo $firstname_err; ?></span>
                                </div>
                            </div>

                        </div>


                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group<?php echo (!empty($username_err)) ? 'has-error' : ''; ?>" data-validate = "Valid email is required: ex@abc.xyz">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="text" name="username" value="<?php echo $username; ?>">
                                    <span class="help-block"><?php echo $username_err; ?></span>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender" value="Male">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="Female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="password" value="<?php echo $password; ?>">
                                    <span class="help-block"><?php echo $password_err; ?></span>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                                    <label class="label">Confirm Password</label>
                                    <input class="input--style-4" type="password" name="confirm_password" value="<?php echo $confirm_password; ?>">
                                    <span class="help-block"><?php echo $confirm_password_err; ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <label class="label">Status</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="status" value="<?php echo $status; ?>">
                                    <option disabled="disabled" selected="selected">Pilih Status</option>
                                    <option>Pelajar</option>
                                    <option>Mahasiswa</option>
                                    <option>Pekerja</option>
                                </select>
                                <span class="help-block"><?php echo $status_err; ?></span>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                        <br>

                    <div class="text-center p-t-136">
                        Already Registered? <a class="txt2" href="../login">
                             Login Here!
                        </a>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../assets/vendor-in-one/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../assets/colorlib/vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="../assets/colorlib/js/global.js"></script>


</body>

</html>