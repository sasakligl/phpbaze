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
    $sql = "UPDATE automobili SET registracija='" . $_POST['registracija'] . "', ime='" . $_POST['ime'] . "' WHERE id=" . $_POST['id'];
    $result = $conn->query($sql);

   header('Location: index.php');
    ?>
</p>
</body>
</html>


