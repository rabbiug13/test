<?php
//connecting to the database
require_once("db_connect.php");

//creating the query for insertion
$query = "INSERT INTO maisha (Name, Email, Telephone, Message ) VALUES (?, ?, ?, ?)";

//prepared statement
$stmt=mysqli_prepare($connect,$query);

//validating if connection and prepared statements are correct
if (!$stmt){
    echo "Prepared statement failed" .mysqli_error($connect);
}

//Get form items when the form is submitted
$n=$_POST['name'];
$e=$_POST['email'];
$t=$_POST['telephone'];
$m=$_POST['message'];

//Binding variables with database names or columns
mysqli_stmt_bind_param($stmt,"ssss",$n,$e,$t,$m);
if(mysqli_stmt_execute($stmt)){
    echo "Data inserted successfully";
}
else{
    echo "You have errors in your form". mysqli_error($connect);
}
?>