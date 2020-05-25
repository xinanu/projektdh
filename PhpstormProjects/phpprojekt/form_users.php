<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="form.php">Log in / Register</a></li>
        <li class="active"><a href="form_users.php">Users</a></li>
        <li><a href="advertisements.php">Advertisements</a></li>
        <li><a href="add_advertisement.php">Add your own advertisement</a></li>
    </ul>
</div>

<?php include "connection.php";

$result = mysqli_query($conn,"SELECT * FROM users");


echo
"<table class=\"table table-striped\">
<tr>
<th>id</th>
<th>username</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "</tr>";
}
echo "</table>";


?>
