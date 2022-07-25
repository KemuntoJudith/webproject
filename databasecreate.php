<?php
$sql = "CREATE DATABASE daisyHousekeepers";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();

$sql = "CREATE TABLE daisyHousekeepers.clients (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname varchar(30) not null,
    lastname varchar(30) not null,
    city varchar(30) not null,
    servicetype varchar(50) not null,
    phone INT(12) not null,
    email varchar(50),
    password_needs_rehash varchar(15))";

    if (mysqli_query ($conn, $sql)) {
        echo "Table clients created successfully";
      } else {
        echo "Error creating table: " . mysqli_error($conn); 
      }
      
     mysqli_close($conn);
 

     $sql = "CREATE TABLE daisyHousekeepers.housekeepers (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname varchar(30) not null,
        lastname varchar(30) not null,
        age INT(10) not null,
        gender varchar(10) not null,
        phone INT(12) not null,
        email varchar(50),
        password_needs_rehash varchar(15))";
    
        if (mysqli_query ($conn, $sql)) {
            echo "Table housekeepers created successfully";
          } else {
            echo "Error creating table: " . mysqli_error($conn); 
          }
          
         mysqli_close($conn);


         $sql = "CREATE TABLE daisyHousekeepers.admins (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            userrole varchar(30) not null,
            username varchar(30) not null,
            password_needs_rehash varchar(15))"; 
        
            if (mysqli_query ($conn, $sql)) {
                echo "Table admins created successfully";
              } else {
                echo "Error creating table: " . mysqli_error($conn); 
              }
              
             mysqli_close($conn);
            
             
             $sql = "INSERT INTO daisyHousekeepers.admins (userrole, username, password_needs_rehash)
            VALUES ('MainAdmin', 'Admin1', 'administrator123')";

                if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
                } else {
                 echo "Error: " . mysqli_error($conn);
                    }

                mysqli_close($conn);
                

                $sql = "INSERT INTO daisyHousekeepers.admins (userrole, username, password_needs_rehash)
                VALUES ('DeputyAdmin', 'Admin1001', 'deputy123456')";
    
                    if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
                    } else {
                     echo "Error: " . mysqli_error($conn);
                        }
    
                    mysqli_close($conn);
                   

                    $sql = "CREATE TABLE daisyHousekeepers.tickets (
                        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        fullname varchar(30) not null,
                        email varchar(30) not null,
                        city varchar(15),
                        requesttype varchar(30),
                        ticketsubject varchar(30))"; 
                    
                        if (mysqli_query ($conn, $sql)) {
                            echo "Table tickets created successfully";
                          } else {
                            echo "Error creating table: " . mysqli_error($conn); 
                          }
                          
                         mysqli_close($conn);

?>
