<?php
require '../model/PersonModel.php';
$result     =getUser();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Crud || Person</title>
    <link rel="stylesheet" type="text/css" href="../assets/style.css"
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
        table tr td:last-child{
            width: 120px;
        }
    </style>
</head>
<body>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_array($result)){ ?>
        <tr>
            <td><?=$row['name']?></td>
            <td><?=$row['address']?></td>
            <td>
                <?php
                echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                ?>
            </td>
        </tr>
    <?php } }else{ ?>
          <tr>
              <td>Not Found</td>
              <td>Not Found</td>
              <td>Not Found</td>
          </tr>
     <?php } ?>
    </tbody>
</table>
</body>
</html>