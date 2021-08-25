<?php
//Check if the delete button has been clicked
if (isset($_GET["my_id"])){
    $id = $_GET["my_id"];

    //To delete, connect to the db
    require_once "db_connection.php";

    //Prepare the delete query
    $delete_query = "DELETE FROM `inventory` WHERE id = '$id'";

    //Finally execute the delete query using the mysqli_query()
    $delete = mysqli_query($connection,$delete_query);
    //Check if the deletion was successful
    if (isset($delete)){
        //Return to users.php to see the changes
        header("location:inventory.php");
    }else{
        echo "Deleting failed";
    }
}