<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Long Ding Huo Guo</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('a1_userMainPage.jpg');
            background-size: cover;
            font-family: 'Roboto', sans-serif;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center; 
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
        }

        form{
            text-align: center;
            margin: 70px 50px;
            color: #ffffff;
            float: center;
            background-color: black;
            width: 600px;
            padding: 40px;
            border-radius: 6px;
            opacity: 0.8;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }

        #logo-container {
            display: flex;
            align-items: center;
        }

        #logo {
            width: 85px;
            height: auto;
            margin-right: 20px;
            border-radius: 10px;
        }

        #company-name {
            color: #ffffff;
            font-weight: bold;
            font-size: 1.5em;
            margin-top: -5px;
        }

        #nav {
            display: flex;
        }

        #nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            transition: color 0.3s;
        }

        #nav a:hover {
            color: #ff4848;
        }

        img {
            width: 300px;
            height: 300px;
            float:right;
        }
        
        .wrapper {
            display: flex;
            justify-content: center;
            align-items: left;
        }

        .p {
            color: red;
        }

        input[type="text"]{
            width: 60%;
            border: 1px solid black;
            padding: 10px;
            border-radius: 25px;
        }

        input[type="email"]{
            width: 60%;
            border: 1px solid black;
            padding: 10px;
            border-radius: 25px;
        }

        input[type="tel"]{
            width: 60%;
            border: 1px solid black;
            padding: 10px;
            border-radius: 25px;
        }

        input[type="number"]{
            width: 20%;
            border: 1px solid black;
            padding: 10px;
            border-radius: 25px;
        }

        input[type="date"]{
            width: 20%;
            border: 1px solid black;
            padding: 10px;
            border-radius: 25px;
        }

        input[type="time"]{
            width: 20%;
            border: 1px solid black;
            padding: 10px;
            border-radius: 25px;
        }

        button{
            width: 50%;
            border: 1px solid black;
            margin-top: 10px;
            padding: 10px;
            border-radius: 25px;
            font-size: 20px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

    </style>
</head>
<body>

    <!-- top bar -->

    <header>
        <div id="logo-container">
            <a href="default.asp"><img id="logo" src="logo.jpg"></a>
            <span id="company-name">LONG DING HUO GUO</span>
        </div>

        <nav id="nav">
            <a href="a5_userAboutUsPage.html">HOME</a>
            <a href="a7_userReservationPage.html">RESERVATION</a>
            <a href="a6_userFAQs.html">FAQS</a>
        </nav>
    </header>

    <!-- le form -->


<div class="wrapper">
<form action="a9_paxBookNow.php" method="POST">

    <h1>Booking</h1>

    <h3>Full name</h3>
    <input type="text" name="name" id="name" pattern="[a-zA-Z][a-zA-Z ]+">

    <h3>Contact Number</h3>
    <input type="tel" name="tel" id="tel" pattern="^(\+?6?01)[0-46-9]-*[0-9]{7,8}$">

    <h3>Email</h3>
    <input type="email" name="email" id="email" pattern="/^[a-zA-Z0-9. _-]+@[a-zA-Z0-9. -]+\. [a-zA-Z]{2,4}$/">

    <h3>Choose number of people</h3>
    <input type="number" name="NumOfP" id="NumOfP">

    <h3>Date</h3>
    <input type="date" name="date" id="date">

    <h3>Time</h3>
    <input type="time" name="time" id="time">

    <br>
    <br>

    <button name="submit" id="btn" value="Submit">Book Now</button>

    <br>
    <br>

    <p>REMINDER! All fields must be filled up.</p>

</form>
</div>