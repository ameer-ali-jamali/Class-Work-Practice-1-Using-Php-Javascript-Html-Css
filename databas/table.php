<?php

// $conn=mysqli_connect("localhost","root","","class5");
//     // mysqli_connect_error($conn);
// if(!$conn){
//     die("no connect"); 
// }

include "db_php.php";
// if(isset($_REQUEST['delete'])){
  $quri="DELETE FROM person WHERE id = {$_REQUEST['id']}";
   if(mysqli_query($conn,$quri)){
     echo"Deleted";
      
   }
    else{
        echo "Error DELETed";
       }
  // // echo "submit";
  // }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
<div class="container">
    <?php
echo'<table class="table">';
  echo  "<thead>";
    echo<<< from
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Country</th>
      <th scope="col">Country code </th>
      <th scope="col">ACTION </th>
    </tr>
   from; 
  echo "</thead>";
  echo "<tbody>";
  $result="SELECT * FROM tab3";
$data=mysqli_query($conn,$result);
while($db=mysqli_fetch_assoc($data)){

    echo" <tr>";
    echo "<th scope='row'>".$db['ID']."</th>";
    echo"<td>".$db['SNAME']."</td>";
    echo"<td>".$db['COUNTRY']."</td>";
  
    echo"<td>".$db['COUNTRYCODE']."</td>";
    // echo '<td> < button type="submit" name="id" > DELETE </button> </td>';
    echo'<td><form action="" method="GET">
    <input type="hidden" name="id" value='.$db['ID'].'>
    <input type="submit" class="btn btn-sm btn-danger" name="delete" value="DELETE">
    </form>
    </td>';
  echo"</tr>"."<br>";

    }
  echo "</tbody>";
  ?> 
  
  </table>
</div>
   
  
  </body>
</html>