<?php
session_start();
if(isset($_POST['submit1'])){
    $date = $_POST['date'];
    $time = $_POST['time'];
    $members = $_POST['members'];
    $adult = $_POST['adult'];
    $child = $_POST['child'];
    $username = $_SESSION['username'];

    $conn = new mysqli("localhost","root","","fullmoon");
    if($conn -> connect_error){
        echo "Not connected".$conn -> connect_error;
    }
    else{
        echo "Connected";
    }
    $sql1 = "select * from signup where Username='$username'";
    $result1 = mysqli_query($conn,$sql1);
    $adhi = mysqli_fetch_assoc($result1);
        $name = $adhi['Name'];
        $sql = "insert into room(Name,Username,Adult,Children,Date,Time,Members)values('$name','$username','$adult',
        '$child','$date','$time','$members')";
    $result = mysqli_query($conn,$sql);
    if($result){
        
        $_SESSION['msg'] = "Registered";
        $_SESSION['alert'] = "Room reserved successfully!";
        header("location: index.php");
    }
    else{      
        $_SESSION['msg'] = "Not registered";
        $_SESSION['alert'] = "Oops something wrong try later!";
        header("location: index.php");
    }
    }


