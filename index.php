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
    $sql = "SELECT id, Naziv, Godina_izdanja, Redatelj FROM Naziv";
    $result = $conn->query($sql);
    $i=1;
    if ($result->num_rows > 0) {
        // output data of each row
        echo('<table>');
        while($row = $result->fetch_assoc()) {
            echo('<tr>');
            echo('<td>' . $row['id'] . '</td>');
            //echo('<td>' .$i++. '</td>');
            echo('<td>' . $row['Naziv'] . '</td>');
            echo('<td>' . $row['Godina_izdanja'] . '</td>');
            echo('<td>' . $row['Redatelj'] . '</td>');
            echo('<td><a href ="delete.php?id='. $row['id'] . '"><img src="delete.png"></a></td>');
            echo('<td><a href ="edit.php?id='. $row['id'] . '"><img src="edit.png"></a></td>');
            echo('</tr>');
        }
        echo('</table>');
    } else {
        echo "Nema filmova";
    }
    $conn->close();
    ?>

</p>
<p>
    <a href="unos.php">Unos novih filmova</a>
</p>
</body>
</html>