<?php
$link = mysqli_connect("localhost", "root", "", "contactformdb");

if ($link === false) {
    die("ERROR: couldn't connect." . mysqli_connect_error());
}

$sql = "SELECT * FROM clienteletable";
$result = mysqli_query($link, $sql);

if (!$result) {
    die("ERROR: couldn't execute $sql." . mysqli_error($link));
}

mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Display Data</title>
   
</head>
<body>
    <div class="container">
        <h1>Display Data</h1>
        
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $row['Name'] ?></td>
                    <td><?= $row['Email'] ?></td>
                    <td><?= $row['Subject'] ?></td>
                    <td><?= $row['Message'] ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
