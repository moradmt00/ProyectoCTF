<?php      
    include('config.php');  
    $usuario = $_POST['user'];  
    $password = $_POST['pass'];  
      
        
        $sql = " select * from login where usuario = '$usuario' and password = '$password' ";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result);  
        $count = mysqli_num_rows($result);  
          
        if($count >= 1){  
            echo "<h1><center> Login successful, tu bandera es: flag{Gr4cias_Sol3} </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  