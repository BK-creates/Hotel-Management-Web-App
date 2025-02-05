<?php 
session_start();
$conn = new mysqli("localhost","root","","fullmoon");
    if($conn -> connect_error){
        echo "Not connected".$conn -> connect_error;
    }
    else{
        echo "Connected";
    }
$username = $_SESSION['username'];
$sql = "insert into signout(Username)values('$username')";
        $result = mysqli_query($conn,$sql);
        header("location: index.php");
        session_destroy();

    

?>