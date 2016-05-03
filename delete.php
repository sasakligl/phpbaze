<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Automobili</title>
</head>
<body>
<h1>
    Automobili
</h1>
<p>
    <?php
    $sql = "DELETE FROM automobili WHERE id=" . $_GET['id'];
    $result = $conn->query($sql);

    header('Location : index.php');
    ?>
</p>
</body>
</html>


