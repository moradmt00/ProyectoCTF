<?php      
    $host = "p:localhost:3306";  
    $user = "proyecto";  
    $password = 'root';  
    $db_name = "proyecto";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 
    
?>  
