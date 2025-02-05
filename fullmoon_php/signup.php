<?php
session_start();
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username = $_POST['username'];    
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['psw'];

    $conn = new mysqli("localhost","root","","fullmoon");
    if($conn -> connect_error){
        echo "Not connected".$conn -> connect_error;
    }
    else{
        echo "Connected";
    }
    $sql1 = "select * from signup where Mobile='$phone'";
    $result1 = mysqli_query($conn,$sql1);
    $adhi = mysqli_num_rows($result1);
    $sql2 = "select * from signup where Email='$email'";
    $result2 = mysqli_query($conn,$sql2);
    $andr = mysqli_num_rows($result2);
    $sql3 = "select * from signup where Username='$username'";
    $result3 = mysqli_query($conn,$sql3);
    $bhar = mysqli_num_rows($result3);
    if($adhi > 0){
        $_SESSION['msg'] = "Mobile exists!";
        $_SESSION['alert'] = "Mobile exists!";
        header("location: index.php");
    }
    elseif($andr > 0){
        $_SESSION['msg'] = "Email exists!";
        $_SESSION['alert'] = "Email exists!";
        header("location: index.php");
    }
    elseif($bhar > 0){
        $_SESSION['msg'] = "Username exists!";
        $_SESSION['alert'] = "Username exists!";
        header("location: index.php");
    }
    else{
        $_SESSION['username'] = $username;
        $sql = "insert into signup(Name,Email,Mobile,Username,Password)values('$name','$email','$phone','$username','$password')";
    $result = mysqli_query($conn,$sql);
    $_SESSION['username'] = $username;
    if($result){
        
        $_SESSION['msg'] = "Registered";
        $_SESSION['alert'] = "Successfully Sign up!";
        header("location: index.php");
    }
    else{      
        $_SESSION['msg'] = "Not registered";
        $_SESSION['alert'] = "Oops something wrong try later!";
        header("location: index.php");
    }
    }

}

?>