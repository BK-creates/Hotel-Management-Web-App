<?php
session_start();

    if(isset($_POST['table_submit'])){
        $fname = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $arr = $_POST['arr_date'];
        $time = $_POST['time'];
        $guests = $_POST['guests'];
        $table = $_POST['table-type'];
        $username = $_SESSION['username'];
        $status = "Booked";


        $conn = new mysqli("localhost","root","","fullmoon");
    if($conn -> connect_error){
        echo "Not connected".$conn -> connect_error;
    }
    else{
        echo "Connected";
    }

    $sql1 = "select * from table_no where Status='Available'";
    $result1 = mysqli_query($conn,$sql1);
    $adhi = mysqli_num_rows($result1);
    $sim = mysqli_fetch_assoc($result1);
    $tab_no = $sim['Table_No'];
    
    $sql = "update table_no set Status='Booked' where Table_No='$tab_no'";
    $result2 = mysqli_query($conn,$sql);

    $sql2 = "insert into desk(Table_No,Username,First_name,Last_name,Mobile,Email,Arrival,Time,No_of_guests,Table_type,Status)values
    ('$tab_no','$username','$fname','$lname','$mobile','$email','$arr','$time','$guests','$table','$status')";
    $result3 = mysqli_query($conn,$sql2);
    $sql3 = "insert into wallet(Username,Points,Points_for)values('$username','2','Table')";
    $result4 = mysqli_query($conn,$sql3);
    echo "inserted";
    $_SESSION['alert'] = "Table booked!";
    header("location: index.php");


    }
    else{
        $fname = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $arr = $_POST['arr_date'];
        $dep = $_POST['dep_date'];
        $guests = $_POST['guests'];
        $table = $_POST['room-type'];
        $username = $_SESSION['username'];
        $status = "Booked";


        $conn = new mysqli("localhost","root","","fullmoon");
    if($conn -> connect_error){
        echo "Not connected".$conn -> connect_error;
    }
    else{
        echo "Connected";
    }

    $sql1 = "select * from room_no where Status='Available'";
    $result1 = mysqli_query($conn,$sql1);
    $adhi = mysqli_num_rows($result1);
    $sim = mysqli_fetch_assoc($result1);
    $tab_no = $sim['Room_No'];
    
    $sql = "update room_no set Status='Booked' where Room_No='$tab_no'";
    $result2 = mysqli_query($conn,$sql);

    $sql2 = "insert into room(Room_No,Username,First_name,Last_name,Mobile,Email,Arrival,Departure,No_of_guests,Room_type,Status)values
    ('$tab_no','$username','$fname','$lname','$mobile','$email','$arr','$dep','$guests','$table','$status')";
    $result3 = mysqli_query($conn,$sql2);
    $sql3 = "insert into wallet(Username,Points,Points_for)values('$username','5','Room')";
    $result4 = mysqli_query($conn,$sql3);
    echo "inserted";
    $_SESSION['alert'] = "Room booked!";
    header("location: index.php");
    }

?>