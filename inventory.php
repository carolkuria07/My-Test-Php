<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory</title>
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<a href="stock_entry.php" class="btn btn-outline-primary btn-block">Add Products</a>
<h1 class="text-info text-center">Inventory</h1>
<table class="table table-info table-hover">
    <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Discount</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    <?php
    //Connect to the database to fetch data
    require_once "db_connection.php";
    //Prepare select query
    $select_query ="SELECT * FROM `inventory` WHERE 1";

    //Use the mysqli_query() to fetch the users
    $Inventory = mysqli_query($connection, $select_query);

    //Write a loop to display the respective users from the db
    while ($row = mysqli_fetch_assoc($Inventory)){
        extract($row);
        echo "<tr>
                <td>$jina</td>
                <td>$kiasi</td>
                <td>$bei</td>
                <td>$kipunguzo</td>
                <td><a class='btn btn-danger' href='delete.php?my_id=$id'>Delete</a></td>
                <td><a class='btn btn-info' href='update.php?my_id=$id&my_name=$jina&my_quantity=$kiasi&my_price=$bei&my_discount=$kipunguzo'>Update</a></td>
               </tr>" ;
    }
    ?>

</table>
</body>
</html>