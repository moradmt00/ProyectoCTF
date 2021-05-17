<?php      
    $host = "localhost";  
    $user = "proyecto";  
    $password = 'root';  
    $db_name = "proyecto";  
    $db_port = "3306";
      
    $con = new mysqli($host, $user, $password, $db_port, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 
    
?>  
