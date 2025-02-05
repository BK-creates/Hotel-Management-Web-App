<?php
$conn = new mysqli("localhost","root","","fullmoon");
 if($conn -> connect_error){
    echo "Not connected".$conn -> connect_error;
}
else{
    echo "Connected";
}
$i=0;
$no = array("1-5","6-10","11-20");
$sd = 0;
while($i<50)
{
    if($sd<3){
    $sql = "update room_no set guests = '$no[$sd]'";
    mysqli_query($conn,$sql);
    
$sd++;
echo "inserted";
    }
    else{
        $sd = 0;
    }
 
    $i++;

 
}

?>