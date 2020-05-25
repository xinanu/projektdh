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
        <li><a href="form_users.php">Users</a></li>
        <li><a href="advertisements.php">Advertisements</a></li>
        <li class="active"><a href="add_advertisement.php">Add your own advertisement</a></li>
    </ul>
</div>

<div class="container">
    <h2>Add advertisement</h2>
    <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2" for="username">Title:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" placeholder="Enter the title">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="ad">Text:</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="5" id="ad"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>