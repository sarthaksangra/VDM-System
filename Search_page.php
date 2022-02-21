<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Search Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="Search.css">
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
        <h1> Search for a Vehicle here!</h1>
        <br>
        <h4>This is the Search Page where one can search for a particular vehicle using its Number Plate and receive all the details regarding the vehicle.</h4>
        <br>
        <h4> It displays the details of the vehicle such as Owner Name, Model of the Vehicle, if the vehicle is insured or not, Name of Insurance Company that the vehicle is insured from, Date of Purchase, Owner Mobile Number, Previous Complaints against vehicle, Pollution Certificate, Vehicle Fitness etc. </h4>
        <br>
        <br>

        <form action="" method="post">
        <br>
        <br>
        <h4>Enter the Car's Number Plate You are Searching for :</h4>
        <input type="text" name="Number_Plate" id="Number_Plate" placeholder="Enter the car's Number Plate" required>
        <br>
        <br>
        <button type="Submit" name="Search" class="btn btn-dark btn-lg btn-block">Search</button>
        <br>
        <br>
        </form>

        <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "vdata";
        
        $conn = mysqli_connect($servername,$username,$password,$database);
        
        if(!$conn)
        {
          die("sorry".mysqli_connect_error());
        }
        else
        {
          //echo "Connection to db successful<br>";
        } 

        if(isset($_POST['Search']))
        {
            $Number_Plate = $_POST['Number_Plate'];

            $query = "SELECT * FROM vehicles WHERE Number_Plate = '$Number_Plate' ";
            $query_run = mysqli_query($conn, $query);

            while($row = mysqli_fetch_array($query_run))
            {
                ?>
                    
                <h5 name="Owner_Name">OWNER'S NAME: <em><?php echo $row['Owner_Name'];?></em></h5>  
                <br>
                <h5 name="Year_of_Purchase">YEAR OF PURCHASE: <em><?php echo $row['Year_of_Purchase'];?></em></h5>  
                <br>
                <h5 name="Number_Plate">NUMBER PLATE: <em><?php echo $row['Number_Plate'];?></em></h5>  
                <br>
                <h5 name="License_Number">LICENSE NUMBER: <em><?php echo $row['License_Number'];?></em></h5>  
                <br>
                <h5 name="Car_Color">CAR'S COLOR: <em><?php echo $row['Car_Color'];?></em></h5>  
                <br>
                <h5 name="Car_Model">CAR'S MODEL: <em><?php echo $row['Car_Model'];?></em></h5>  
                <br>
                <h5 name="Pollution_Test">POLLUTION TEST DONE: <em><?php echo $row['Pollution_Test'];?></em></h5>  
                <br>
                <h5 name="Insurance">VEHICLE IS INSURED: <em><?php echo $row['Insurance'];?></em></h5>  
                <br>
                <h5 name="Insurance_Company">INSURNCE COMPANY: <em><?php echo $row['Insurance_Company'];?></em></h5>  
                <br>

                <?php
            }

            if($query_run)
            {

                echo "<script> alert('Searching for the Record!');
                 </script>";
            }
            else
            {
                echo "ERROR: $sql <br/> $conn->error";
            }
            $conn->close();
        }
        ?>
        
        </table>    
    </section>
    <br>
    <br>
    <footer class="colored-part" id="footer">
        <i class="fa fa-twitter ficon" aria-hidden="true"></i><i class="fa fa-facebook-official ficon" aria-hidden="true"></i><i class="fa fa-instagram ficon" aria-hidden="true"></i><i class="fa fa-envelope ficonh2" aria-hidden="true"></i>
        <p>© Copyright 2021 Sangra</p>
      </footer>
</body>
</html>