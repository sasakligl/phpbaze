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
    echo ($_GET['id']);
    $sql = "SELECT id, Naziv, Godina_izdanja, Redatelj FROM Naziv WHERE id=" . $_GET['id'];
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
    } else {
        echo "Nema filmova";
        die();
    }
    $conn->close();
    ?>
<form action="update.php" method="post">
    Naziv:<br>
    <input type="text" name="Naziv" value="<?php echo ($row['Naziv']); ?> "><br>
    Godina_izdanja:<br>
    <input type="text" name="Godina_izdanja" value="<?php echo ($row['Godina_izdanja']); ?> "><br>
    Redatelj:<br>
    <input type="text" name="Redatelj" value="<?php echo ($row['Redatelj']); ?> "><br>
    <input type="hidden" name="id" value="<?php echo ($row['id']); ?> "><br>
    <input type="submit" value="Unesi film">
</form>

</p>
</body>
</html>