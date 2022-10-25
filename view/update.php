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
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                <h2 class="mt-5">Update Record</h2>
                <p>Please edit the input values and submit to update the employee record.</p>
                <form action="../controller/UpdateController.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control <?php echo (!empty($dataItem['name'])) ? 'is-invalid' : ''; ?>" value="<?php echo $dataItem['name']; ?>">
                        <span class="invalid-feedback"><?php echo $dataItem['name'];?></span>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="address" class="form-control <?php echo (!empty($dataItem['address'])) ? 'is-invalid' : ''; ?>"><?php echo $dataItem['address']; ?></textarea>
                        <span class="invalid-feedback"><?php echo $dataItem['address'];?></span>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $dataItem['id']; ?>"/>
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>