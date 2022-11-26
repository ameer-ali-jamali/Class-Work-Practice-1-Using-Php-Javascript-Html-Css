<?php
include "db.php";


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <title>Hello, world!</title>
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

  echo"</tr>"."<br>";

    }
  echo "</tbody>";
  ?>
  

  </div>
</body>
</html>