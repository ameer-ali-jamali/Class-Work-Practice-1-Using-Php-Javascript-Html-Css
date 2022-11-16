<?php

$conn=mysqli_connect("localhost","root","","class5");
    // mysqli_connect_error($conn);
if(!$conn){
    die("no connect"); 
}
else{
    echo "Succefully Connected <hr>";
}


?>