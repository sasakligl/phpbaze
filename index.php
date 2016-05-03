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
    $sql = "SELECT id, registracija, ime FROM automobili";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        echo('<table>');
        while($row = $result->fetch_assoc()) {
            echo('<tr>');
            //echo "id: " . $row["id"]. " - registracija: " . $row["registracija"]. " " . $row["ime"]. "<br>";
            echo('<td>' . $row['id'] . '</td>');
            echo('<td>' . $row['registracija'] . '</td>');
            echo('<td>' . $row['ime'] . '</td>');
            echo('<td><a href="delete.php?id=' . $row['id'] . '"><img src="delete.png"></a></td>');
            echo('<td><a href="edit.php?id=' . $row['id'] . '"><img src="edit.png"></a></td>');
            echo('td><a <img src="delete.png"></a></td>');
            echo('</tr>');
        }
        echo('</table>');
    } else {
        echo "Nema automobila";
    }
    $conn->close();
    ?>

</p>
<p>
    <a href="unos.php">Unos novog automobila</a>
</p>
</body>
</html>
