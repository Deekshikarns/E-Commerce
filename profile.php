<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url("image/ba.jpg");
            background-size: cover;
            display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        }

        .pro1 .pro2 .pro{  
            width: 250px;
            border: 2px solid black;
            border-radius: 20px;
            
        }
        .pro1 .pro2 .pro a{
            font-size: 42px;
            text-decoration: none;
            color: black;
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <div class="pro1">
    <div class="pro2">
    <div class="pro">
        <a href="edit.php">Edit profile</a>
    </div>
    </div>
    <br><br>
    <div class="pro2">
    <div class="pro">
        <a href="view.php">View profile</a>
    </div> </div>
    <br><br>
    <div class="pro2">
    <div class="pro">
        <a href="logout.php">LogOut</a>
    </div> </div>
</div>
</body>
</html>