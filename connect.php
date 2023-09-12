<?php
   session_start();
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "dec";

   // connect the database with the server
   $conn = new mysqli($servername,$username,$password,$dbname);
     
   // if error occurs 
   if ($conn -> connect_error){
      echo "Failed to connect to MySQL: " . $conn -> connect_error;
      exit();
   }
     
   $sql = "SELECT * FROM projecto ORDER BY `pro_id` ASC";

    
   $result = ($conn->query($sql));
   //declare array to store the data of database
   $row = []; 
 
   if ($result->num_rows > 0) 
   {
       // fetch all data from db into array 
       $row = $result->fetch_all(MYSQLI_ASSOC);  
   }  

   $sql2 = "SELECT * FROM imagens INNER JOIN projecto ON imagens.id_pro = projecto.pro_id ORDER BY `id_pro` ASC";

    
   $result2 = ($conn->query($sql2));
   //declare array to store the data of database
   $row2 = []; 
 
   if ($result2->num_rows >= 0) 
   {
       // fetch all data from db into array 
       $row2 = $result2->fetch_all(MYSQLI_ASSOC);  
   } 

   function phpAlert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
?>

<?php 