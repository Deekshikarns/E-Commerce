<?php
session_start();
include("connection.php");

if(isset($_POST["submit"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email) && !empty($password) && !is_numeric($email)) {
        $query= "SELECT * FROM signup WHERE email='$email' LIMIT 1";
        $result = mysqli_query($conn, $query);

        if($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            if($user_data['password'] == $password) {
                $_SESSION['email'] = $email;
                header("Location: index.php");
                exit; 
            } else {
                echo "<script type='text/javascript'>alert('Wrong username or password....')</script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('Wrong username or password....')</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Invalid email or password....')</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tech2etc Ecommerce Tutorial</title>
        <link rel="stylesheet" href="style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <style>#header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 80px;
    background: #E3E6F3;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
    z-index: 999;
    position: sticky;
    top: 0;
    left: 0;
}

                        #login-details{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url(image/b184.jpg);
            background-size: cover;
            background-position: center;
            }
            #login-details .wrapper{
            width: 420px;
            background: transparent;
            border: 2px solid rgba(255,255,255, .2);
            backdrop-filter: blur(20px);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            color: #fff;
            border-radius: 10px;
            padding: 30px 40px;

            }
            #login-details .wrapper h1{
            font-size: 36px;
            text-align: center;
            color: #fff;
            }
            #login-details .wrapper .input-box{
            width: 100%;
            height: 50px;
            margin: 30px 0;
            }
            #login-details .input-box input{
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(255, 255, 255, .2);
            border-radius: 40px;
            font-size: 16px;
            color: #fff;
            padding: 20px 45px 20px 20px;
            }
            #login-details .input-box input::placeholder{
            color: #fff;
            }
       
            #login-details .wrapper .remember-forget{
            display: flex;
            justify-content: space-between;
            font-size: 14.5px;
            margin: -15px 0 15px;
            }
            #login-details .remember-forget label{
            accent-color: #fff;
            margin-right: 3px;
            }
            #login-details .remember-forget input{
            accent-color: #fff;
            margin-right: 3px;
            }
            #login-details .remember-forget a{
            color: #fff;
            text-decoration: none;
            }
            #login-details .remember-forget a:hover{
            text-decoration: underline;
            }
            #login-details .wrapper .btn{
            width: 45%;
            height: 45px;
            background: #07cc6c;
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px  rgba(0,0,0, .1);
            cursor: pointer;
            font-size: 16px;
            color: #333;
            font-weight: 600;
            margin-left: 80px;
            }
            #login-details .wrapper h1{
            font-size: 44px;
            color: #fff;
            }
            #login-details .wrapper h2{
            font-size: 32px;
            color: #fff;
            }
            #login-details .wrapper h3{
            font-size: 28px;
            color: #fff;
            }
            #login-details .wrapper .register-link{
            font-size: 14.5px;
            text-align: center;
            margin-top: 20px 0 15px;
            }
            #login-details .register-link p {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            }
            #login-details .register-link a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            }
            #login-details .register-link a:hover{
            text-decoration: underline;
            }
            #login-details .register-link a:hover{
            text-decoration: underline;
            }
        </style>
    </head>

    <body>
        
    <section id="header">
        <a href="#"><img src="image/logo.jpg" class="logo" alt=""></a>
    </section>
<section id="login-details"> 
    <div class="wrapper">
       <form action="" method="POST">
        <h1>Sign In</h1>
        <div class="input-box">
            <input type="email" name="email" placeholder="User Name" required>
            
        </div> 
        <div class="input-box">
            <input type="password" name="password" placeholder="Password" required>
           
        </div>
        <div class="remember-forget">
            <label><input type="checkbox">Remember me</label>
            <a href="#" onclick="window.location.href='forget_password.php';">Forget password?</a>
        </div>
        <button type="submit" class="btn"name="submit">Sign In</button>
        <div class="register-link">
            <p>Don't have an account? <a href="#" onclick="window.location.href='register.php';">Sign Up </a></p>
        </div>
        </form>
    </div>
   
</section> 
  

        <script src="script.js"></script>
    </body>

</html>