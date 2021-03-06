<?php
 
 include '../Manager/userManager.php';

if(isset($_POST['fullname'],$_POST['email'],$_POST['password'])){

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $registerUser = new user();

    $registerUser->register($fullname,$email,$password);
    
 
}









?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>

    <style>


.row{

margin-left: 2%;
margin-right: 2%;
margin-top:5%;
}
.page{

width: 100%;
height:auto;
min-height:100vh;
background-color:#ede7e6;
background-size: 100% 100%;
background-position: top center;
padding:10px;
}

.signintext{
margin-right:20%!important;
color:#969799;

}

.top{
color: #64C97D;
}

.btn{
width: 30%;
margin-top:5%;
margin-bottom: 5%;
margin-left: 25%;

}

.ForgotPassBtn{
background-color:white; 
color:black;
border-bottom: 1px solid #c7c5c5;
padding-bottom: 3px;
text-decoration: none!important;
margin-right: 20%;
border-top-color: none;

}
.LoginBtn{
  border-radius: 25px;
  background-image:url(http://i.imgur.com/S4zmPRw.png);
  border:none;
}



.signupbtn{
border-radius: 25px;
width: 25%;
margin:auto;
background-image:url(http://i.imgur.com/S4zmPRw.png);
border:solid 1px white;
font-size: 10px;
}

form{
padding: 0;
margin-left: 15%;
}

.signin{
background-color: white;
padding: 2%;
margin: auto;
}

.signup{
  background-image:url(http://i.imgur.com/S4zmPRw.png);
padding: 2%;
}

.form-control{
width: 80%;
margin-bottom: 5%;
    margin-top: 5%;
    background-color: #ebe8e8;

}





.custom-control{
margin-bottom: 2%;
} 

h2.HelloFriend{
color:#fff !important;
font-weight:200px;
margin-top:30%;
margin-bottom:10%;
}

.SignupText{
color:#fff;
margin-bottom:15%;
font-size:16px;
font-weight: 10px!important;
font-family: Garamond;
}

@media only screen and (max-width: 600px) {
row{


    margin-top: 5%;
    margin-left: 1%;
    margin-right: 1%;
}    }

input, input:focus{
    border-width: 0px;
    outline:0; 
    -webkit-appearance:none;
    box-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
}


.social-btn .btn {
    color: #fff;
    margin: 8px 0 0 30px;
    font-size: 15px;
   width: 45px;
height: 40px;
line-height: 25px;
    border-radius: 50%;
    font-weight: normal;
    text-align: center;
    border: solid 0.5px grey;
    transition: all 0.4s;
}	
.social-btn .btn:first-child {
    margin-left: 0;
}
.social-btn .btn:hover {
    opacity: 0.8;
}

.social-btn .btn i {
    font-size: 20px;
}

.social-btn{
margin-right: 20%;
margin-bottom: 7%;
margin-top: 5%;
}
    </style>
</head>
<body>
    
<!--For all screen-->
<div class="page">


<!--Login & Signup in single row-->
<div class="row">

  
<!--Column for signin-->
  <div class="col-sm-8 text-center signin">


    <!-- Default form login -->
      <p class="h4 mb-4 text-center signintext top"><strong>Sign up to this Website</strong></p>

<!--Login with Social Media Buttons-->
<form method="POST">
<input name="fullname" type="text" class="form-control mb-4"  placeholder=" Full Name" style="font-family:Arial ,fa-solid fa-user">
 

      <!-- Email -->
      <input name="email"  email="" type="email" class="form-control mb-4"  placeholder=" Email" style="font-family:Arial, FontAwesome">

      <!-- Password -->
      <input name="password" type="password" class="form-control mb-4" placeholder="  Password" style="font-family:Arial, FontAwesome">

     

      <!-- Sign up button -->
      <button class="btn btn-info btn-block LoginBtn" type="submit"  >Sign up</button>

</form>

  </div>

<!--Column for signin-->
  <div class="col-sm-4 signup text-center">
    <h2 class="HelloFriend">Hello, Friend!</h2>
    <h4 class="SignupText">Enter your personal details<br>and start journey with us</h4>
    <a  href="login.php" class="btn btn-info btn-block signupbtn" type="submit">sign in</a>

  </div>
</div>
</div>
</body>
</html>