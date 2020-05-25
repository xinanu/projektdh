<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<?php include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    echo "Hello " . $username . " ";
    echo "your password is " . $password . " ";

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $sql = "INSERT INTO users (username, password)
    VALUES ('$username', '$password')";


    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else echo "Error: " . $sql . "<br>" . $conn->error;

}
?>

