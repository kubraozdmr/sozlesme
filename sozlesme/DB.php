<?php
       $conn = mysqli_connect('localhost','root','','test');
	  
	if($conn->connect_errno > 0){
          die('Unable to connect to database [' . $db->connect_error . ']');
}   
	     
	   

?>