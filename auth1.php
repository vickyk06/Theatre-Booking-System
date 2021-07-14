




<?php   
session_start();
   
    include('connection.php');  
    $username = $_POST['auser'];  
    $password = $_POST['apass'];  
      
	  


	  //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from adminlogin where ausername = '$username' and apassword = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
		header("Location: homea.html");
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{ 
header("Location: failhome1.html");		
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  