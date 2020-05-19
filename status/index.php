<?php
    session_start();
    if (!isset($_SESSION['uid'])) header('Location: http://localhost./l33tmario/login/');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Player Status | Mario: The Hacker</title>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!-- jquery -->
    <script type="text/javascript" src="http://localhost./l33tmario/js/jquery.js"></script>
    <!-- javascript -->
    <script type="text/javascript" src="http://localhost./l33tmario/js/main.js"></script>
</head>
<body onload="loadPlayerStatus();">
    <center>
        <br><br>
        <h2>Player Status</h2>
        <br><br>
        <h3 id="you-are"></h3>
        <br><br>
        <h3 id="player-level"></h3>
        <br><br>
        <img id="profile-photo" height="300" width="200">
        <br><br>
        <h3 id="alive"></h3>
        <br><br><br>
        <br><br><br>
        <a href="http://localhost./l33tmario/dashboard/"><button>Go Back</button></a>
    </center>
</body>
</html>