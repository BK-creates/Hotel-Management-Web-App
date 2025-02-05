<?php
session_start();
if(isset($_POST['submit'])){
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    $conn = new mysqli("localhost","root","","fullmoon");
    if($conn -> connect_error){
        echo "Not connected".$conn -> connect_error;
    }
    else{
        echo "Connected";
    }
    $sql1 = "select * from signup where Username='$username'";
    $result1 = mysqli_query($conn,$sql1);
    $bha = mysqli_num_rows($result1);
    $val = mysqli_fetch_assoc($result1);
    $pass = $val['Password'];
    if($bha > 0){
        if($pass == $password){
            $_SESSION['msg'] = "Registered";
        $_SESSION['alert'] = "Login!";
        $_SESSION['username'] = $username;
        $sql = "insert into signin(Username,Password)values('$username','$password')";
        $result = mysqli_query($conn,$sql);
        header("location:index.php");
        }
        else{
            $_SESSION['alert'] = "Check your password!";
            header("location:index.php");
        }
        
    }
    else{
        $_SESSION['msg'] = "Not registered!";
        $_SESSION['alert'] = "Check your username!";
        header("location:index.php");
    }
    

}

?>