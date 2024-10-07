<?php
require_once("db_connect.php");

$query = "DELETE FROM maisha WHERE ID = ?";
$stmt = mysqli_prepare($connect,$query);

$id = $_GET['param'];
mysqli_stmt_bind_param($stmt,"i",$id);

mysqli_stmt_execute($stmt);

header("Location: display_data.php?message=Item%20delete%20Successfully");
?>