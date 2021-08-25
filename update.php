<?php
//Check if button update has been clicked
if (isset($_GET["my_id"])){
    $received_id = $_GET["my_id"];
    $received_name = $_GET["my_name"];
    $received_quantity = $_GET["my_quantity"];
    $received_price= $_GET["my_price"];
    $received_discount = $_GET["my_discount"];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <h1 class="text-info, text-center">Updating Stock</h1>
        <form action="update_handler.php" method="post">
            <label><input value="<?php echo $received_id;?>" type="hidden" name="a"></label>
            <div class="form-group">
                <label><input value="<?php echo $received_name;?>" type="text" class="form-control" placeholder="Update name" name="q"></label>
            </div>
            <div class="form-group">
                <label><input value="<?php echo $received_quantity;?>" type="text" class="form-control" placeholder="Update quantity" name="r"></label>
            </div>
            <div class="form-group">
                <label><input value="<?php echo $received_price;?>" type="text" class="form-control" placeholder="Update price" name="s"></label>
            </div>
            <div class="form-group">
                <label><input value="<?php echo $received_discount;?>" type="text" class="form-control" placeholder="Update discount " name="t"></label>
            </div>
            <div>
                <input type="submit" class="btn btn-outline-info btn-block" value="Update" name="btn_update">
                <a href="inventory.php" class="btn btn-outline-danger btn-block">Cancel</a>
            </div>
        </form>
    </div>
    <div class="col-2"></div>

</div>
</body>
</html>


