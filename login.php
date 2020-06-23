<?php 
    
    session_start();
    if(isset($_SESSION["login"]) ) {
        header("Location: index.php");
        exit;
    }


    require 'functions.php';

    if (isset($_POST["login"] ) ) {
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM login WHERE username ='$username'");

        //cek username
        if( mysqli_num_rows($result) === 1) {

            //cek password
            $row  = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"] ) ) {
                //cek session
                $_SESSION["nama_user"] = $username;

                header("Location: index.php");
                exit;
            }

            $error = true;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <?php if( isset($error) ): ?>
        <script>
            alert('Username / Password Salah!')
        </script>
    <?php endif; ?>
	<div class="main" style="padding-bottom: unset; padding-top: unset;">
		<!-- Sing in  Form -->
        <section class="sign-in" style="margin-bottom: unset;">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/kategori2.jpg" alt="sing up image"></figure>
                        <a href="registrasi.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form action="" method="POST" class="register-form">
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <!-- <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit" name="login" id="login" class="form-submit"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="facebook.com"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="www.twitter.com"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="www.gmail.com"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
     <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>