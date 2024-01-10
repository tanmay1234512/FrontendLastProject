<?php
// Replace these variables with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trip";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    

 


    // Insert data into the database
    $sql = "INSERT INTO trip (name, email,phone,password) VALUES ('$name', '$email','$phone','$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
   header("Location:verify_otp.php");
   exit();
   
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trendy Clothes</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">



    <style>
        body{
    background-color: #dee9ff;
}

.registration-form{
	padding: 50px 0;
}

.registration-form form{
    background-color:rgba(255, 192, 203,0.2);
    max-width: 600px;
    margin: auto;
    padding: 50px 70px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
    border: 1px solid pink;
    padding-top:2px;
}


.registration-form .item{
	border-radius: 20px;
    margin-bottom: 25px;
    padding: 10px 20px;
}

.registration-form .create-account{
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    background-color: #5791ff;
    border: none;
    color: white;
    margin-top: 20px;
}

.registration-form .social-media{
    max-width: 600px;
    background-color: #fff;
    margin: auto;
    padding: 35px 0;
    text-align: center;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    color: #9fadca;
    border-top: 1px solid #dee9ff;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.registration-form .social-icons{
    margin-top: 30px;
    margin-bottom: 16px;
}

.registration-form .social-icons a{
    font-size: 23px;
    margin: 0 3px;
    color: #5691ff;
    border: 1px solid;
    border-radius: 50%;
    width: 45px;
    display: inline-block;
    height: 45px;
    text-align: center;
    background-color: #fff;
    line-height: 45px;
}

.registration-form .social-icons a:hover{
    text-decoration: none;
    opacity: 0.6;
}

@media (max-width: 576px) {
    .registration-form form{
        padding: 50px 20px;
    }
    .logo {
    width: 80px;
    margin: auto;
}

.logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaa7,
        -8px -8px 15px #fff;
}
#name{
padding-left: 30%;
}


}
body{
    background-image: url(New.img);
    background-size: cover;
}

.logo {
    width: 80px;
    margin: auto;
}

.logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaa7,
        -8px -8px 15px #fff;
}

.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #0f0f0f;
}
.navbar{
    background-color: pink;
}

    </style>
    <link rel="icon" type="image/x-icon" href="final.png">
</head>
<body>
  <!-- Image and text -->
<nav class="navbar navbar-light bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img
          src="final.png"
          class="me-2"
          height="20"
          alt="MDB Logo"
          loading="lazy"
        />
        <small> <b>Trendy Clothes</b></small>
      </a>
    </div>
  </nav>
    <div class="registration-form" >
        <form action="index.php" method="post">
            <div class="wrapper">
                <div class="logo">
                    <img src="final.png" alt="">
                </div>
                <div class="text-center mt-4 name">
                  <h5 id="name">Trendy Clothes</h5>  
                </div>
            <div class="form-group">
                <input type="text" name="name" class="form-control item" id="username" placeholder="Full Name" required="name">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control item" id="email" placeholder="E-Mail">
            </div>
            <div class="form-group">
                <input type="tel" name="phone" class="form-control item" id="phone-number" placeholder="Phone-Number">
                <label for='otp'>Enter OTP:</label>
        <input type='text' name='otp' required>
        
        <input type='submit' value='Verify'>
            </div>
           
            <div class="form-group">
                <input type="password" name="password" class="form-control item" id="password" placeholder="Password">
            </div>
           
           
           
            


            <div class="form-group">
                <button type="submit" class="btn btn-block create-account" style="width: 35%; margin: auto;">Sign-Up</button>
            
        </div>
        
        </form>
      
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>

