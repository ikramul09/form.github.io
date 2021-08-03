<?php
error_reporting(0);
$server ="localhost";
$usernam ="root";
$password ="";
$database ="data";

$connect = new mysqli($server, $usernam, $password, $database);
if($connect->connect_error)
echo"connection_error";
$connect->connect_error;
     //echo"connection_sucess";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="page">
        <form action="#" method="POST">
            <input style="font-size: 28px;" type="text" name="name" id="name" placeholder="Enter your name"><br>
            <input type="password" name="password" id="password" placeholder="Enter your password"><br>
              <button class="btn">Submit</button>
        </form>
    </div>
</body>
</html>
<?php
$name =$_POST['name'];
$query ="INSERT INTO form VALUE('$name')";
$data = mysqli_query($connect,$query);
if(data){
    //echo"data insert";
}
else{
    echo"failed data";
}
?>