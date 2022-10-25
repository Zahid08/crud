<!DOCTYPE html>
<html>
<head>
    <title>Crud || Person</title>
    <link rel="stylesheet" type="text/css" href="../assets/style.css"
</head>
<body>
<form method="post" action="../controller/PersonController.php" >
    <?php
    session_start();
    if (isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>
    <div class="input-group">
        <label>Name</label>
        <input type="text" name="name" value="">
    </div>
    <div class="input-group">
        <label>Address</label>
        <input type="text" name="address" value="">
    </div>
    <div class="input-group">
        <button class="btn" type="submit" name="save" >Save</button>
    </div>
</form>
</body>
</html>