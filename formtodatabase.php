<?php

$con=mysqli_connect('127.0.0.1', 'root', '');
if(!$con){
    echo "not connected to server";
}

if(!mysqli_select_db($con, 'myproject')){
    echo "database not selected";
}

$FN=$_POST['fname'];
$LN=$_POST['lname'];
$EM=$_POST['email'];
$AD=$_POST['add'];
$MO=$_POST['mymobile'];
$DB=$_POST['dob'];
$CR=$_POST['mycourse'];

$sql= "INSERT INTO newtable (firstname, lastname, email, addresss, mobile, dateofbirth, course)
        VALUES ('$FN','$LN','$EM','$AD','$MO','$DB','$CR')";

if(!mysqli_query($con, $sql)){
    echo "not inserted";
}
else{
    echo "inserted";
}
header("refresh:1; url=register.html");

?>