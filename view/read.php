<?php
require '../model/PersonModel.php';
if (isset($_REQUEST['id'])) {
    $userId = $_REQUEST['id'];
    $dataItem = singleUser($userId);
    if (empty($dataItem)){
        header('location: http://localhost/crud/view/list_user.php');
    }
}else{
    header('location: http://localhost/crud/view/list_user.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-5 mb-3">View Record</h1>
                <div class="form-group">
                    <label>Name</label>
                    <p><b><?php echo $dataItem["name"]; ?></b></p>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <p><b><?php echo $dataItem["address"]; ?></b></p>
                </div>

                <p><a href="index.php" class="btn btn-primary">Back</a></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>