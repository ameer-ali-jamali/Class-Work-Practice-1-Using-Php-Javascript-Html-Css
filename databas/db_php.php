<?php
//data base contection
$conn=mysqli_connect("localhost","root","","class5");
if(!$conn){
    die( "database not  conntected".mysqli_connect_error());
}
// $conn1=mysqli_connect("localhost","root","","class2");
// if(!$conn){
//     die( "database not  conntected");
// }
// //table 
$result="SELECT * FROM tab3";
$qur=mysqli_query($conn,$result);
if(!$qur){
  die( " not contect table");

}else{
    echo"contecd";
}



?>