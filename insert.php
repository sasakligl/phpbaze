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
    $sql = "INSERT INTO Naziv  (Naziv, Godina_izdanja, Redatelj) VALUES('" . $_POST['Naziv'] . "', '" . $_POST['Godina_izdanja'] . "', '" . $_POST['Redatelj'] . "')";
    $result = $conn->query($sql);

    echo('Filmovi su uneseni!<br>');
    echo('<a href="index.php">Povratak na prikaz filmova</a>');
    ?>


</p>
</body>
</html>
