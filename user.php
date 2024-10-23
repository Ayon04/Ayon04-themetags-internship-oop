<?php

require '../controller/userAction.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
</head>
<body>

<form method="POST" action="../controller/userAction.php"  novalidate>

 email: <input type="email" name="email">  
 <br>  <br>
 password : <input type="password" name="password">        
    
 <input type="submit">

</form>
    
<?php


if(isset($_SESSION['empty_error'])){
    echo $_SESSION['empty_error'] ;
   
}


echo "<br>";
echo "<br>";


if(isset($_SESSION['invalid_email_format'])){
    echo $_SESSION['invalid_email_format'] ;
   
}
echo "<br>";
echo "<br>";


if(isset($_SESSION['password_error'])){
    echo $_SESSION['password_error'] ;
   
}


?>

</body>
</html>