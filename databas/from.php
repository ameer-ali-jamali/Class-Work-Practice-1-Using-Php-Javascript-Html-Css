<?php

include_once "connection.php";

// $qri="INSERT INTO tab3 ( SNAME, COUNTRY, COUNTRYCODE) VALUES ('Ameer','Pakistan',7100)";
// $name=$_REQUEST['sname'];
// $name=$_REQUEST['Country'];
// $name=$_REQUEST['code'];

if(isset($_REQUEST['submit'])){
    if(($_REQUEST['sname'] == "")||($_REQUEST['sname'] == "")||($_REQUEST['sname']== "")){
        echo "<small style='color:red;'>filled invaild ..... </small>";
    }
    else{
        
$name=$_REQUEST['sname'];
$cotry=$_REQUEST['Country'];
$cde=$_REQUEST['code'];
$qri="INSERT INTO tab3 ( SNAME, COUNTRY, COUNTRYCODE) VALUES ('$name','$cotry',$cde)";
$result=mysqli_query($conn,$qri);



    }
}else{
    echo "not submit";
}

// $qri="DELETE FROM `tab3` WHERE id=10";
// $result=mysqli_query($conn,$qri);



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
    <div class="row">
    <div class="col-sm-4">
        <form action="" method="POST">
  <div class="mb-3 mt-3">
    <label for="Name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="sname">
  </div>
  <div class="mb-3">
    <label for="Country" class="form-label">Country</label>
    <input type="text" class="form-control" id="Country" placeholder="Enter Country" name="Country">
  </div>
  <div class="mb-3">
    <label for="Code" class="form-label">Country Code</label>
    <input type="text" class="form-control" id="Code" placeholder="Enter CountryCode" name="code">
  </div>
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
 </div>
 <div class="col-sm-4">
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
    </div>
</div>
   
   
  </body>
</html>