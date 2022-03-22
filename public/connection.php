<?php 
try{
$con=mysqli_connect("localhost","root","","crud"); // connection to database
}
catch(con $e) {
    echo "ERROR: " . $e->getMessage();
}

?>