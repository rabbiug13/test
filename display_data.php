<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Clients</title>
    <?php include ("css.html");
    require_once("db_connect.php");
    ?>
    <script>
        function confirmDelete(varID){
            if( confirm("Are you sure you want to delete this?")){
                window.location.href="process_delete.php?param=" + varID;
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
             
        </div>
        <div class="row">
            <!--this is the table for the data--->
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>Client No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Message</th>
                        <th>Action</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //the query to fetch data from a registration table in the database
                    $sql="SELECT * FROM maisha";
                    $result=mysqli_query($connect,$sql);
                    while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['ID']?></td>
                        <td><?php echo $row['Name']?></td>
                        <td><?php echo $row['Email']?></td>
                        <td><?php echo $row['Telephone']?></td>
                        <td><?php echo $row['Message']?></td>
                        <td><a href="update_form.php?param=<?php echo $row['ID'];?>">Edit</a></td>
                       <td><button class="btn btn-danger" onclick="confirmDelete(<?php echo $row['ID'];?>)">Delete</button></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>



    </div>




    <?php include ("js.html")?>
</body>
</html>