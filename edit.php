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
<?php echo($_GET['id']);
$sql = "SELECT id, registracija, ime FROM automobili WHERE id=" . $_GET['id'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    } else {
    echo "Nema automobila"
    die();
}
$conn->close();
?>
<form action="update.php" method="post">
    Registracija:<br>
    <input type="text" name="registracija" value="<?php echo($row['registracija']); ?>"><br>
    Ime:<br>
    <input type="text" name="ime"> value="<?php echo($row['ime']); ?>"><br>
    <input type="text" name="id"> value="<?php echo($row['id']); ?>"><br>
    <input type="submit" value="Unesi automobil">
</form>
</p>
</body>
</html>
