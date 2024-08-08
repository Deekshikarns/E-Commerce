<?php
      session_start();

      include("connection.php");

      if(isset($_POST["submit"]))
	{
	  $firstname = $_POST['firstname'];
	  $lastname = $_POST['lastname'];
	  $email = $_POST['email'];
	  $password = $_POST['password'];
      $confirmpassword=$_POST['confirmpassword'];


      if($password !== $confirmpassword) {
        echo "<script type='text/javascript'> alert('Passwords do not match')</script>";
    } else {
        
      if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        $stmt = $conn->prepare("insert into signup(firstname,lastname,email,password) values(?, ?, ?,  ?)");
		$stmt->bind_param("ssss", $firstname, $lastname, $email, $password);
        $execval = $stmt->execute();
        echo $execval;
        echo "<script type='text/javascript'> alert('Registration successfully...')</script>";
        $stmt->close();
        $conn->close();
		
    }
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
        <style>
            
            #header{
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    min-height: 3vh;
                    padding: 10px 50px;
                    background: #E3E6F3;
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
                    z-index: 999;
                    position: sticky;
                    top: 0;
                    left: 0;
                 }
                 #header a img{
                    width: 50px;
                    height: 50px;
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
            #login-details .input-box i{
            position: absolute;
            right: 50px;
            transform: translateY(50%);
            font-size: 20px;
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
            #login-details .abcd{
    font-size: 18px;
    text-align: center;
    margin: 15px 0 20px;
    color: #081b29;
    
}
 .abcd p{
    color: whitesmoke;
    text-decoration: none;
    
 }
 .abcd a{
    color: whitesmoke;
    text-decoration: underline;
    
 }

        </style>
    </head>

    <body>
        
    <section id="header">
        <a href="#"><img src="image/logo.jpg" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="login.php">Login</a></li>
            </ul>
        </div>

    </section>
    <section id="login-details"> 
        <div class="wrapper">
           <form action="" method="POST">
            <h1>Sign Up</h1>
            <div class="input-box">
            <label for="firstname"></label>
                <input type="text" name="firstname" id="firstname" placeholder="FIRST NAME" required>

            </div> 
            <div class="input-box">
            <label for="lastname"></label>
                <input type="text" name="lastname" id="lastname" placeholder="LAST NAME" required>
                
            </div> 
            <div class="input-box">
            <label for="email"></label>
                <input type="email" name="email" id="email" placeholder="E-MAIL" required>

            </div>
            <h2>Create a password</h2>
            <div class="input-box">
            <label for="password"></label>
                <input type="password" name="password" id="password" placeholder="PASSWORD" required>
            </div> 
            <div class="input-box">
            <label for="password"></label>
                <input type="password" name="confirmpassword" id="password" placeholder="CONFIRMPASSWORD" required>
            </div> 
            <button type="submit" class="btn" name="submit">SIGN UP</button>
            </form>
        </div>
    </section> 
      
</body>
</html>