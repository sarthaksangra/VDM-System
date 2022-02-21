<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "vdata";

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
  die("sorry".mysqli_connect_error());
}
else{
  //echo "Connection to db successful<br>";
}
if(isset($_POST['Name'])) 
{


    $Name = $_POST['Name'];
    $License_Number = $_POST['License_Number'];
    $Number_Plate = $_POST['Number_Plate'];
    $Car_Color = $_POST['Car_Color'];
    $Car_Model = $_POST['Car_Model'];
    $Location = $_POST['Location'];
    $Reason = $_POST['Reason'];

    $sql = "INSERT INTO complaint (Name, License_Number, Number_Plate, Car_Color, Car_Model, Location, Reason) VALUES ('{$Name}', '{$License_Number}', '{$Number_Plate}', '{$Car_Color}', '{$Car_Model}', '{$Location}', '{$Reason}')";
    $query = mysqli_query($conn,$sql);

    if($query)
    {

           echo "<script> alert('Complaint Registered Successfully!');
           window.location='Home_page.html';
                 </script>";
      }
      else
      {
        echo "ERROR: $sql <br/> $conn->error";
      }
                    $conn->close();
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Complaint Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="pages.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>

<body>
    <section class="colored-part" id="title">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="Home_page.html">VDM System</a>     
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">    <span class="navbar-toggler-icon"></span> </button>  
                <div class="collapse navbar-collapse" id="navbarSupportedContent">    
                    <ul class="navbar-nav ml-auto"> 
                        <li class="nav-item">            
                            <a class="nav-link" href="Signup.php">Sign Up</a>      
                        </li>         
                        <li class="nav-item">            
                            <a class="nav-link" href="Users.php">Users</a>        
                        </li>        
                        <li class="nav-item">            
                            <a class="nav-link" href="Search_page.php">Search</a>       
                        </li>
                        <li class="nav-item">            
                            <a class="nav-link" href="Complaint.php">Complaint</a>       
                        </li>     
                        <li class="nav-item">            
                            <a class="nav-link" href="About_us.html">About Us</a>      
                        </li>   
                        <li class="nav-item">            
                            <a class="nav-link" href="Contact_us.html">Contact Us</a>      
                        </li>  
                    </ul> 
                </div>
            </nav>
        </div>
    </section>

    <section class="white-part" id="body-part">
        <br>
        <h1> Register a Complaint here!</h1>
        <br>
        <h2>Enter the vehicles Details against which you would like to register a complaint against!</h3>
        <br>
        <br> 
        <form action="" method="post">
            <h4>Enter your Name: </h4>
            <input type="text" name="Name" id="Name" placeholder="Enter your Name" required>
            <br>
            <br>
            <h4>Enter your License Number: </h4>
            <input type="text" name="License_Number" id="License_Number" placeholder="Enter your License Number" required>
            <br>
            <br>
            <h4>Enter the Car's Number Plate against which you want to register a complaint against:</h4>
            <input type="text" name="Number_Plate" id="Number_Plate" placeholder="Enter the car's Number Plate" required>
            <br>
            <br>
            <h4>Enter the Car's Color: </h4>
            <input type="text" name="Car_Color" id="Car_Color" placeholder="Enter the car's color" required>
            <br>
            <br>
            <h4>Enter the Car's Model: </h4>
            <input type="text" name="Car_Model" id="Car_Model" placeholder="Enter the Car's Model" required>
            <br>
            <br>
            <h4>Enter the Location where you witnessed the Incident: </h4>
            <input type="text" name="Location" id="Location" placeholder="Enter the location" required>
            <br>
            <br>
            <h4>Enter the Reason: </h4>
            <input type="text" name="Reason" id="Reason" placeholder="Enter the reason" required>
            <br>
            <br>
            <br>
            <button type="Submit" class="btn btn-dark btn-lg btn-block">Submit</button>
            <br>
            <br>
        </form>
    </section>


    <footer class="colored-part" id="footer">
        <i class="fa fa-twitter ficon" aria-hidden="true"></i><i class="fa fa-facebook-official ficon" aria-hidden="true"></i><i class="fa fa-instagram ficon" aria-hidden="true"></i><i class="fa fa-envelope ficonh2" aria-hidden="true"></i>
        <p>© Copyright 2021 Sangra</p>
      </footer>
</body>
</html>