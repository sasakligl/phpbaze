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
    $sql ="UPDATE Naziv SET Naziv='" . $_POST['Naziv'] . "', Godina_izdanja='" . $_POST['Godina_izdanja'] . "', Redatelj='" . $_POST['Redatelj'] . "' WHERE id=" . $_POST['id'];
    $result = $conn->query($sql);

    header('Location:index.php');
    ?>


</p>
</body>
</html>
