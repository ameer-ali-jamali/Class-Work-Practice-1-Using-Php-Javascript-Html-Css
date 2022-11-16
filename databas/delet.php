<?php
include_once "db_connect.php";
    

// echo "Hello,World!";
if(isset($_REQUEST['delete'])){
$quri="DELETE FROM person WHERE id = {$_REQUEST['id']}";
if(mysqli_query($conn,$quri)){
    echo"Deleted";
    
}
    else{
        echo "Error DELETed";
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
  
  
  <?php
  
  $sql="SELECT * FROM person";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result) > 0){
    echo '<table class="table">';
    echo '<thead>';
    echo<<<tr
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Action</th>
    tr;
    echo"</thead>";
    echo'<tbody>';
    while($row=mysqli_fetch_assoc($result)){
            echo'<tr>';
            echo'<td>'.$row['id'].'</td>';
            echo'<td>'.$row['name'].'</td>';
            echo'<td><form action="" method="GET">
            <input type="hidden" name="id" value='.$row['id'].'>
            <input type="submit" class="btn btn-sm btn-danger" name="delete" value="DELETE">
            </form>
            </td>';
            echo'</tr>';
    }
} else{
    echo "0 Records";
}
    
  
  ?>
  </tbody>
  </table>