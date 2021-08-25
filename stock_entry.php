<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stock Entry</title>
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <h1 class="text-info, text-center">Bite of Sweet</h1>
        <form action="stock_entry_handler.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter name" name="q">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter quantity" name="r">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter price" name="s">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter discount" name="t">
            </div>
            <div>
                <input type="submit" class="btn btn-outline-info btn-block" value="Entry" name="btn-entry">
                <a href="inventory.php" class="btn btn-outline-success btn-block">Inventory List</a>
            </div>
        </form>
    </div>
    <div class="col-4"></div>

</div>
</body>
</html>