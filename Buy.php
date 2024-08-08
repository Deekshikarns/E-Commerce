<?php
      include("connection.php");

      if(isset($_POST["submit"]))
	{
	    $Name = $_POST['Name'];
	    $phone = $_POST['phone'];
      $email = $_POST['email'];
      $address= $_POST['address'];
      $add1 = $_POST['add1'];
      $City=$_POST['City'];
      $State= $_POST['State'];
      $pincode=$_POST['pincode'];
        $query="INSERT INTO address(Name, phone, email, address,add1,City,State,pincode) VALUES('$Name', '$phone', '$email', '$address','$add1','$City','$State','$pincode')";
		$result = mysqli_query($conn,$query);
        if($result)
        {
          echo "<script type='text/javascript'> alert('Successful...')</script>";
        }else{
          echo "<script type='text/javascript'> alert('Failed...')</script>";
        }
	  }	 
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buy Item</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  background: url("image/ba.jpg");
  background-size: cover;
  margin: 0;
  padding: 0;
}

.address-form {
  margin-top: 100px;
  margin-left: 550px;
  max-width: 500px;
  background-color:transparent;
  backdrop-filter: blur(30);
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
  text-align: left;
}

.address-form h1 {
  
  font-size: 32px;
  margin-left: 80px;
}
.address-form h2{
  
  font-size: 24px;
}

form {
  margin: 0;
}

label {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="tel"],
input[type="email"],
textarea,
select {
  width: 450px;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button {
  background-color: #0074d9;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}

  </style>
</head>
<body>
  <div class="address-form" >
    <h1>Add delivery address</h1>
    <div class="form">
    <form>
        <p>
          <label for="name"></label>
          <input type="text" id="name" name="Name" placeholder="Full Name(Required)*" required>
    </p>
    <p>
          <label for="phoneNumber"></label>
          <input type="tel" id="phoneNumber" name="phone" placeholder="phone number(Required)*"  required>
        </p>
        <p>
          <label for="email"></label>
          <input type="email" id="email" name="email" placeholder="Email(required)*" required>
    </p>
   <p>
    <h2>Address</h2>
   <p>
      <label for="address"></label>
      <input type="text" id="address" name="address" placeholder="House No.,Building Name(Required)*" required>
</p>
<p>
      <label for="address"></label>
      <input type="text" id="add" name="add1" placeholder="Road name,Area,Colony(Required)*"  required>
    </p>
      
      <label for="City"></label>
      <input type="text" id="City" name="City" placeholder="City(Required)*"  required>
    </p>
    <label for="State"></label>
    <input type="text" id="State" name="State" placeholder="State(Required)*"  required>

    <p>
      <label for="Pincode"></label>
      <input type="tel" id="Pincode" name="pincode" placeholder="Pincode(Required)*" required>
   </p>
    <button type="submit" name="submit">Add Address</button>
    <button type="reset" >Reset</button>
    </form>
  </div>
  </div>

 
</body>
</html>