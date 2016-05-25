<?php require('db.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Filmovi</title>
</head>

<body>
<h1>
    Filmovi
</h1>

<p>
    <?php
    $sql = "DELETE FROM Naziv WHERE  id=" . $_GET['id'];
    $result = $conn->query($sql);

    header('Location: index.php');
    ?>


</p>
</body>
</html>


