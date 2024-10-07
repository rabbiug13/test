<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h4>contact us through this form</h4>
        <br>
        <?php
        require_once("db_connect.php")
        
        ?>
        <?php
        // getting the id from the display data page//
        $user_id=$_GET["param"];

        // selecting a specific id which represents the details of a single row
        $query="SELECT * FROM maisha WHERE ID = ?";

        //Make a prepared statement for connecting the database with the query
        $stmt=mysqli_prepare($connect,$query);

        //Binding the id fetched from the url to the prepared statement
        mysqli_stmt_bind_param($stmt,"i",$user_id);

        // make request to the database
        mysqli_stmt_execute($stmt);

        // get a single result from the table
        $result=mysqli_stmt_get_result($stmt);

        // organizing a result into a row
        $row=mysqli_fetch_assoc($result);
        ?>
    
        

       
    <form action="processorContact.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['ID']?>" >

                    <label for="Name">Name:</label>
                    <input type="text" name="name" id="name"> <br>
    
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email"> <br>
    
                    <label for="telephone">Telephone:</label>
                    <input type="tel" name="telephone" id="telephone"> <br>
                    
                    <label for="message">Message:</label>
                    <textarea name="" id="comment" cols="25" rows="3"></textarea> <br>
    
                    <input style="background-color:black;color:white;font-weight: bold;cursor: pointer; transition: transform 0.5s eas;" type="Submit" name="submit" id="submit">
                </form>

    
  <script src="bootstrap/js/bootstrap.min.js"></script>  
</body>
</html>