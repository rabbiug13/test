<?php 
require_once("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $query="UPDATE maisha SET Name =?, Email =?,Telephone =?, message =? WHERE ID = ?";

    $stmt= mysqli_prepare($connect,$query);
    $id=$_POST['id'];
    $n=$_POST['name'];
    $e=$_POST['email'];
    $t =$_POST['telephone'];
    $m=$_POST['message'];
    

    mysqli_stmt_bind_param($stmt,"ssssi",$n,$e,$t,$m,$id);

    mysqli_stmt_execute($stmt);

    echo "Data update successfully";

    exit;
}
?>