<?php
    session_start();
    if (!isset($_SESSION['uid'])) header('Location: http://localhost./l33tmario/login/');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Users | Mario: The Hacker</title>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!-- jquery -->
    <script type="text/javascript" src="http://localhost./l33tmario/js/jquery.js"></script>
    <!-- javascript -->
    <script type="text/javascript" src="http://localhost./l33tmario/js/main.js"></script>
</head>
<body>
    <center>
        <br><br>
        <h2>Users</h2>
        <br><br>
        <!-- mario user card -->
        <a href="mario/">
            <div class="user-card">
                <img src="http://localhost./l33tmario/assets/images/mario.png" height="300" width="200">
                <br><hr><br>
                <h2>Mario</h2>
            </div>
        </a>
        <br><br>
        <!-- luigi user card -->
        <a href="luigi/">
            <div class="user-card">
                <img src="http://localhost./l33tmario/assets/images/luigi.png" height="300" width="200">
                <br><hr><br>
                <h2>Luigi</h2>
            </div>
        </a>
        <br><br>
        <!-- bowser user card -->
        <a href="bowser/">
            <div class="user-card">
                <img src="http://localhost./l33tmario/assets/images/bowser.png" height="300" width="200">
                <br><hr><br>
                <h2>Bowser</h2>
            </div>
        </a>
        <br><br><br>
        <a href="http://localhost./l33tmario/dashboard/"><button>Go Back</button></a>
        <br><br><br>
        <br><br><br>        
    </center>
</body>
</html>