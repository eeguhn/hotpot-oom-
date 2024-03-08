<?php 

// retrieves data from a9_paxBookNow.html 

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "booking";

$db_conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if(isset($_POST["submit"])){

    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $NumOfP = $_POST['NumOfP'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno().')'
        .mysqli_connect_error());
    }
    else{
    
        $sql = "INSERT INTO BookingInfo (name, tel, email, NumOfP, date, time)
        values ('$name', '$tel', '$email', '$NumOfP', '$date', '$time')";
    
    }
    
    if ($db_conn->query($sql)){
        echo "New record is inserted successfully";
    
    }
    else{
        echo "Error: ".$sql ."<br>". $conn->error;
    }

}


    
    





?>