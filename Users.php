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

$sql = "SELECT * FROM `vehicles`";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num > 0){
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Users</title>

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
        <h1> Users!</h1>
        <br>
        <table >
        <tr>
        <th>Owner Name</th>
        <th>Year of Purcahse</th>
        <th>Number Plate</th>
        <th>Owner Number</th>
        <th>License Number</th>
        <th>Car Color</th>
        <th>Car Model</th>
        <th>Pollution Test</th>
        <th>Insurance</th>
        <th>Insurance Company</th>
        </tr>
        <?php while($row = mysqli_fetch_array($result)):?>
        <tr>
        <td><?php echo $row['Owner_Name'];?></td>
        <td><?php echo $row['Year_of_Purchase'];?></td>
        <td><?php echo $row['Number_Plate'];?></td>
        <td><?php echo $row['Owner_Number'];?></td>
        <td><?php echo $row['License_Number'];?></td>
        <td><?php echo $row['Car_Color'];?></td>
        <td><?php echo $row['Car_Model'];?></td>
        <td><?php echo $row['Pollution_Test'];?></td>
        <td><?php echo $row['Insurance'];?></td>
        <td><?php echo $row['Insurance_Company'];?></td>
        </tr>
        <?php endwhile;?>
        </table>
        <br>
        <br>
    </section>

    <footer class="colored-part" id="footer">
        <i class="fa fa-twitter ficon" aria-hidden="true"></i><i class="fa fa-facebook-official ficon" aria-hidden="true"></i><i class="fa fa-instagram ficon" aria-hidden="true"></i><i class="fa fa-envelope ficonh2" aria-hidden="true"></i>
        <p>© Copyright 2021 Sangra</p>
      </footer>
</body>
</html>