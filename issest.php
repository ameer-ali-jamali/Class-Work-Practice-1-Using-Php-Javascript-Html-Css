<?php

if(isset($_POST['uname']) && isset($_POST['pass'])){
    echo "<h1>".$_POST['uname']."</h1>";
}else{
    echo "<h1>".$_POST['pass']."</h1>";
   echo "invaild data";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="">
    <input type="text" name="uname" id="">
    <input type="text" name="pass" id="">
    <input type="submit" name="submit" value="submit">
    
</form>
</body>
</html>
