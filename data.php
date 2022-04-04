<!DOCTYPE html>
 <html>
 <head>
 	
 </head>
 <body>


 <?php

// Create connection
$conn = new mysqli("localhost", "jc", "1549100", "hr");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM notification_data";
$result = $conn->query($sql);




if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
    }
} else {
    echo "0 results";
}

$conn->close();
?>





<h1><?php echo $result->num_rows;
?></h1>




 </body>
 </html> 