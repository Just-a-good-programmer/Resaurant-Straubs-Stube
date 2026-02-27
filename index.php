<?php
    session_start();
    if (isset($_SESSION['username'])) {
        header("Location: homepage.php");
        exit();
    }
    include 'connecties database/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    

</body>
</html>