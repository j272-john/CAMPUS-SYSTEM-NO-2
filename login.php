<?php
//contains code showing how our login page will work
include "dbconnect.php";
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
//confirming our variables are not empty
if(empty($uname)){
    header("location:index.html?error=username is required");
    exit();
}
else if(empty($pwd)){
    header("location:index.html?error=fill in your password");
    exit();
}
$sql="insert into users values('$uname','$pwd')";
if($conn -> query($sql)===true)
{
    echo "new records inserted";
}else{
    echo "error:";
}
$conn->close();
?>