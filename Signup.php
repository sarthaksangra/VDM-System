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

if(isset($_POST['Owner_Name'])) 
{

    $Owner_Name = $_POST['Owner_Name'];
    $Year_of_Purchase = $_POST['Year_of_Purchase'];
    $Number_Plate= $_POST['Number_Plate'];
    $Owner_Number = $_POST['Owner_Number'];
    $License_Number = $_POST['License_Number'];
    $Car_Color = $_POST['Car_Color'];
    $Car_Model = $_POST['Car_Model'];
    $Pollution_Test = $_POST['Pollution_Test'];
    $Insurance = $_POST['Insurance'];
    $Insurance_Company = $_POST['Insurance_Company'];

    $sql = "INSERT INTO vehicles (Owner_Name, Year_of_Purchase, Number_Plate, Owner_Number, License_Number, Car_Color, Car_Model, Pollution_Test, Insurance, Insurance_Company) VALUES ('{$Owner_Name}', '{$Year_of_Purchase}', '{$Number_Plate}', '{$Owner_Number}', '{$License_Number}', '{$Car_Color}', '{$Car_Model}', '{$Pollution_Test}', '{$Insurance}', '{$Insurance_Company}')";
    $query = mysqli_query($conn,$sql);

        if($query)
        {
           echo "<script> alert('New Record Created Successfully!');
           window.location='Users.php';
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
    <title>Sign Up!</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="table.css">
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
        <h1>Welcome to VDM Systems!</h1>
        <br>
        <h2>Sign Up and join the wave!</h3>
        <br>
        <br> 
        <form action="Signup.php" method="post">
            <h4>Enter vehicle's Owner's Name : </h4>
            <input type="text" name="Owner_Name" id="Owner_Name" placeholder="Enter Owner's Name" required>
            <br>
            <br>
            <h4>Enter the year of Purchase of the vehicle : </h4>
            <input type="number" name="Year_of_Purchase" id="Year_of_Purchase" placeholder="Enter Year of Purcahse" required>
            <br>
            <br>
            <h4>Enter the Car's Number Plate :</h4>
            <input type="text" name="Number_Plate" id="Number_Plate" placeholder="Enter the car's Number Plate" required>
            <br>
            <br>
            <h4>Enter the Owner's Number : </h4>
            <input type="text" name="Owner_Number" id="Owner_Number" placeholder="Enter the Owner's Number" required>
            <br>
            <br>
            <h4>Enter the License Number : </h4>
            <input type="text" name="License_Number" id="License_Number" placeholder="Enter the Lisene Number" required>
            <br>
            <br>
            <h4>Enter the Car's Color :</h4>
            <input type="text" name="Car_Color" id="Car_Color" placeholder="Enter the Color of the Vehicle" required>
            <br>
            <br>
            <h4>Enter the Car's Model :</h4>
            <input type="text" name="Car_Model" id="Car_Model" placeholder="Enter the Model of the Vehicle" required>
            <br>
            <br>
            <h4>Enter if the Pollution Test of the vehicle is done or not(Yes/No) :</h4>
            <input type="text" name="Pollution_Test" id="Pollution_Test" placeholder="Enter Yes or No" required>
            <br>
            <br>
            <h4>Enter if the car is insured or not(Yes/No) :</h4>
            <input type="text" name="Insurance" id="Insurance" placeholder="Enter Yes or No" required>
            <br>
            <br>
            <h4>Enter the Company it is insured by :</h4>
            <input type="text" name="Insurance_Company" id="Insurance_Company" placeholder="Enter the Companies Name" required>
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