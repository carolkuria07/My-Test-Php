<?php
//Check if button update has been clicked
if (isset($_POST["btn_update"])){
    $id = $_POST["a"];
    $update_name = $_POST["q"];
    $update_quantity = $_POST["r"];
    $update_price = $_POST["s"];
    $update_discount = $_POST["t"];

    //Connect to the db
    require_once "db_connection.php";
    //Prepare an update query
    $update_query = "UPDATE `inventory` SET jina`='[$update_name]',
                       `kiasi`='[value-3]',`bei`='[value-4]',`kipunguzo`='[value-5]' WHERE 1 UPDATE `Inventory` SET`jina`='$update_name',
    `kiasi`='$update_quantity',`bei`='$update_price',`kipunguzo`='$update_discount' WHERE id='$id'";

    //Finally update the user by use of mysqli_query()
    $update = mysqli_query($connection, $update_query);

    //Check if the updating was successful
    if (isset($update)){
        //Redirect back to the users.php to see the changes
        header("location:users.php");
    }else{
        echo "Updating failed";
    }
}