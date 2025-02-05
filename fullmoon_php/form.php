<?php 
session_start();
if(isset($_POST['table'])):
    $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resort booking form</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src=
    "https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" >
        </script>

        <style>
                input::placeholder{
                    color: #000000;
                }                     
                            
        </style>
</head>
<body>
  
    <div class="container">
        <br><br>
        <form action="book.php" method="post">
            
            <div class="card mx-auto" style="margin-top: 7%;">
                <div class="card-body">
                    <h1 class="text-center">Room Booking</h1>
                    <br>    
                    <?php 
                    $conn = new mysqli("localhost","root","","fullmoon");
                    $sql = "select * from room_no where Status='Available'";
                    $res = mysqli_query($conn,$sql);
                    $cont = mysqli_num_rows($res);
                    ?>
                    <h4 class="text-center">Available rooms <span style="color: red;"><?php echo $cont; ?></span></h4>
                    <br>
                    
                    <div class="row ">
                        <div class="col-sm-6 mb-4">
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" name="f_name" placeholder="First Name" required />
                            </div>
                        </div>

                        <div class="col-sm-6 mb-4">
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" name="l_name" placeholder="Last Name" required />
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-phone-fill"></i></span>
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile" required />
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                                <input type="email" class="form-control" name="email" placeholder="Email" required />
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-calendar-range-fill"></i></span>
                                <input type="text" class="form-control" name="arr_date" id="my_date_picker" value="Arrival date"  />
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-calendar-range-fill"></i></span>
                                <input type="text" class="form-control" name="dep_date" id="my_date_picker1" value="Departure date"  />
                            </div>
                        </div>
                    </div>

                    <script>
                        $(document).ready(function() {
                            $("#my_date_picker").click(function(){
                                document.getElementById("my_date_picker").value = "Arrival Date";
                            })             
                            
                                $( "#my_date_picker" ).datepicker();
                                $("#my_date_picker1").click(function(){
                                document.getElementById("my_date_picker1").value = "Departure Date";
                            })             
                            
                                $( "#my_date_picker1" ).datepicker();
                        
                        })
                    </script>
        
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person-plus-fill"></i></span>
                                <select class="form-control" name="guests">
                                    <option  selected disabled>No.of guests</option>
                                    <option >1-5</option>
                                    <option >6-10</option>
                                    <option >11-20</option>
                                </select>
                                
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-hospital-fill"></i></span>
                                <select class="form-control" name="room-type" >
                                    <option  selected disabled>Room Type</option>
                                    <option >AC</option>
                                    <option >Non-AC</option>
                                    <option >Single Bed</option>
                                    <option >Double Bed</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Book" class="btn btn-outline-secondary w-25" name="room_submit" />
                    </div>
                    
                </div>
            </div>
            
        </form>
    </div>
</body>
</html>
<?php
else:
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resort booking form</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src=
    "https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" >
        </script>

        <style>
                input::placeholder{
                    color: #000000;
                }                     
                            
        </style>
</head>
<body>
  
    <div class="container">
        <br><br>
        <form action="book.php" method="post">
            
            <div class="card mx-auto" style="margin-top: 7%;">
                <div class="card-body">
                    <h1 class="text-center">Table Booking</h1>
                    <br>    
                    <?php 
                    $conn = new mysqli("localhost","root","","fullmoon");
                    $sql = "select * from table_no where Status='Available'";
                    $res = mysqli_query($conn,$sql);
                    $cont = mysqli_num_rows($res);
                    ?>
                    <h4 class="text-center">Available Table <span style="color: red;"><?php echo $cont; ?></span></h4>
                    <br>
                    
                    <div class="row ">
                        <div class="col-sm-6 mb-4">
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" name="f_name" placeholder="First Name" required />
                            </div>
                        </div>

                        <div class="col-sm-6 mb-4">
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" name="l_name" placeholder="Last Name" required />
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-phone-fill"></i></span>
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile" required />
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                                <input type="email" class="form-control" name="email" placeholder="Email" required />
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-calendar-range-fill"></i></span>
                                <input type="text" class="form-control" name="arr_date" id="my_date_picker" value="Arrival date"  />
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-calendar-range-fill"></i></span>
                                <input type="time" class="form-control" name="time" />
                            </div>
                        </div>
                    </div>

                    <script>
                        $(document).ready(function() {
                            $("#my_date_picker").click(function(){
                                document.getElementById("my_date_picker").value = "Arrival Date";
                            })             
                            
                                $( "#my_date_picker" ).datepicker();
                                $("#my_date_picker1").click(function(){
                                document.getElementById("my_date_picker1").value = "Departure Date";
                            })             
                            
                                $( "#my_date_picker1" ).datepicker();
                        
                        })
                    </script>
        
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person-plus-fill"></i></span>
                                <select class="form-control" name="guests">
                                    <option  selected disabled>No.of guests</option>
                                    <option >1-5</option>
                                    <option >6-10</option>
                                </select>
                                
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-hospital-fill"></i></span>
                                <select class="form-control" name="table-type" >
                                    <option  selected disabled>Table type</option>
                                    <option >AC</option>
                                    <option >Non-AC</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Book" class="btn btn-outline-secondary w-25" name="table_submit" />
                    </div>
                    
                </div>
            </div>
            
        </form>
    </div>
</body>
</html>
<?php 
endif;
?>

