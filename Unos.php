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
<form action="insert.php" method="post">
    Naziv:<br>
    <input type="text" name="Naziv"><br>
    Godina_izdanja:<br>
    <input type="text" name="Godina_izdanja"><br>
    Redatelj:<br>
    <input type="text" name="Redatelj"><br>
    <input type="submit" value="Unesi filmove">
</form>

</p>
</body>
</html>
