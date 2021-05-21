<?php session_start(); ?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sparks National Bank</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
<style>
p{
  margin: 0;
  padding: 0;
}
body{
  display: flex;
  flex-direction: column;
  height: 100vh;
}
nav{
  background: linear-gradient(to right, #000066 0%, #3366ff 100%);
  box-shadow: 0 5px 10px black;
}
.navbar-brand{
  font-size: 50px;
  font-weight: bold;
  color: white;
  text-decoration: none;
  padding: 0 55px;
}
.navbar-brand:hover{
  color: white
}
nav ul li{
  padding: 7px 16px;
}
nav ul li a{
  font-size: 18px;
  color: white;
  text-transform: uppercase;
  text-align: center;
}
nav ul li a:hover{
  background: #000066;
  border-radius: 4px;
  color: white;
  transition: 0.5s;
}
.navbar-toggler{
  margin-right: 15px;
}
.navbar-toggler-icon{
  background: white;
  border-radius: 50%;
}
.h2{
  font-size: 60px;
  font-weight: 700;
  margin-top: 120px;
  text-align: center;
  color: #fff;
}
.h1{
  font-size: 80px;
  font-weight: 900;
  text-align: center;
  color: #fff;
}
.h1,.h2{
  background-image: url('images/g29.jpg');
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
  animation:animate 5s linear infinite;
  -webkit-backface-visibiity:hidden;
}
@keyframes animate {
    0%{
      background-position: 0% -50%;
    }
    100%{
      background-position: 100% -50%;
    }
}
.button{
  display:flex;
  justify-content: center;
  align-items: center;
}
.btn1{
  padding: 12px 36px;
  margin: 10px;
  color: #fff;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 20px;
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;
  background: linear-gradient(to right, #000066 0%, #3366ff 100%);
}
.btn2{
  padding: 12px 36px;
  margin: 10px;
  color: #fff;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 20px;
  border-top-right-radius: 20px;
  border-bottom-right-radius: 20px;
  background: linear-gradient(to right, #000066 0%, #3366ff 100%);
}
.btn1:hover,.btn2:hover{
  background: linear-gradient(90deg,#0162c8,#55e7fc);
  text-decoration: none;
  color:white;
}
.footer{
  width: 100vw;
  height: 50px;
  background: linear-gradient(to right, #000066 0%, #3366ff 100%);
  margin-top: auto;
}
.footer p{
  color: #fff;
  font-size: 21px;
  text-align: center;
  line-height: 50px;
}
.main{
  width: 85%;
  background: linear-gradient(to right, #000066 0%, #3366ff 100%);
  border-radius: 6px;
  padding: 20px 60px 30px 40px;
  margin-top: 20px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.main .content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.main .content .left-side{
  width: 25%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  position: relative;
}
.content .left-side::before{
  content: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #fff;
}
.content .left-side .details{
  margin: 14px;
  text-align: center;
}
.content .left-side .details i{
  font-size: 30px;
  color: #fff;
  margin-bottom: 10px;
}
.content .left-side .details .topic{
  font-size: 18px;
  font-weight: 500;
  color: #fff;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two{
  font-size: 14px;
  color: #fff;
}
.main .content .right-side{
  width: 75%;
  margin-left: 75px;
}
.content .right-side .topic-text{
  font-size: 23px;
  font-weight: 600;
  color: #fff;
}
.right-side .input-box{
  height: 50px;
  width: 100%;
  margin: 12px 0;
}
.right-side .input-box input,
.right-side .input-box textarea{
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
}
.right-side .message-box{
  min-height: 110px;
}
.right-side .input-box textarea{
  padding-top: 6px;
}
.right-side .button{
  display: inline-block;
  margin-top: 12px;
}
.right-side .button input[type="button"]{
  color: #fff;
  font-size: 18px;
  outline: none;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  background: linear-gradient(90deg,#0162c8,#55e7fc);
  cursor: pointer;
  transition: all 0.3s ease;
}
.button input[type="button"]:hover{
  background: linear-gradient(90deg,#0162c8,#55e7fc);
}

@media (max-width: 950px) {
  .main{
    width: 90%;
    padding: 30px 40px 40px 35px ;
  }
  .main .content .right-side{
   width: 75%;
   margin-left: 55px;
}
}
@media (max-width: 820px) {
  .main{
    margin: 40px 0;
    height: 100%;
    margin-left: 30px;
  }
  .main .content{
    flex-direction: column-reverse;
  }
 .main .content .left-side{
   width: 100%;
   flex-direction: row;
   margin-top: 40px;
   justify-content: center;
   flex-wrap: wrap;
 }
 .main .content .left-side::before{
   display: none;
 }
 .main .content .right-side{
   width: 100%;
   margin-left: 0;
 }
}
.wrapper{
  font-family: 'raleway';
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background: #fafafa;
}
.wrapper h1{
  font-size: 3em;
  margin: 25px 0;
  margin-top: 50px;
  text-align: center;
  font-weight: 500;
}
.content-box{
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  width: 1000px;
  margin-top: 20px;
}
.card{
  min-height: 260px;
  width: 320px;
  padding:30px;
  border-radius: 7px;
  display: flex;
  justify-content: center;
  align-items:center;
  flex-direction: column;
  background: linear-gradient(to right, #000066 0%, #3366ff 100%);;
  margin: 10px 4px;
  box-shadow: 0px 15px 30px black;
  transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
}
.card h2{
  margin-bottom: 12px;
  font-weight: 400;
  text-align: center;
  color: white;
}
.card p{
  color:white;
  text-align: center;
}
.card:hover{
  transform: scale(1.05, 1.05);
}
@media(max-width:991px) {
  .wrapper{
    padding: 25px;
  }
  .wrapper h1{
    font-size: 2.5em;
    font-weight: 600;
  }
  .content-box{
    flex-direction: column;
    width: 100%;
  }
  .card{
    min-width: 300px;
    margin:10px auto;
  }
}
.btn3{
  color: #fff;
  font-size: 17px;
  outline: none;
  border: none;
  border-radius: 6px;
  background: #000066;
  cursor: pointer;
  transition: all 0.3s ease;
}
.tab{
  background: linear-gradient(to right, #000066 0%, #3366ff 100%);
}
.tab th{
  color: white;
}
.tab td{
  color: white;
}
.tab2{
  background: linear-gradient(to right, #000066 0%, #3366ff 100%);
}
.tab2 th{
  color: white;
}
.tab2 td{
  color: white;
}
.tab3{
  background: linear-gradient(to right, #000066 0%, #3366ff 100%);
}
.tab3 th{
  color: white;
}
.tab3 td{
  color: white;
}
#mybtn{
  color: #fff;
  font-size: 18px;
  outline: none;
  border: none;
  border-radius: 6px;
  background: linear-gradient(to right, #000066 0%, #3366ff 100%);
  cursor: pointer;
  transition: all 0.3s ease;
}
</style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg ">
    <a class="navbar-brand" href="#">SNB</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customers.php">Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transaction_history.php">Transaction History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact_us.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
