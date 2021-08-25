<?php

if (!isset($_POST["btn_entry"])) {
    ///Receive the values from the user
    $Name = $_POST["q"];
    $Quantity = $_POST["r"];
    $Price = $_POST["s"];
    $Discount = $_POST["t"];

    //Connect to the database to start saving
    require_once "db_connection.php";

    //To save the data prepare the INSERT query
    $insert_query = "INSERT INTO `Inventory`(`id`, `jina`, `kiasi`, `bei`,`kipunguzo`) 
                    VALUES (null,'$Name','$Quantity','$Price','$Discount')";

    //Finally the save the data using the mysqli_query
    $Save = mysqli_query($connection, $insert_query);

    //Check if the connection was successful
    if (isset($Save)) {
        header("location:stock_entry.php");
    } else {
        echo "Incorrect entry";
    }
}