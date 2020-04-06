<?php

     $dbhost = "localhost";
     $dbuser =  "root";
     $dbpass = "";
     $db     = "mydb";

     $conn = new mysqli ($dbhost,$dbuser,$dbpass,$db);

     // check connection 
	 
     if($conn->connect_error) {
	     echo "connection was failed";
    }
     else{
	     echo "connection was successful";
    }
	

?>
