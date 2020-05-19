<?php
    session_start();
    if (!isset($_SESSION['uid'])) header('Location: http://localhost./l33tmario/login/');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard | Mario: The Hacker</title>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!-- jquery -->
    <script type="text/javascript" src="http://localhost./l33tmario/js/jquery.js"></script>
    <!-- javascript -->
    <script type="text/javascript" src="http://localhost./l33tmario/js/main.js"></script>
</head>
<body onload="loadDashboard();">
    <center>
        <br><br>
        <h2>Welcome To Mario: The Hacker [BETA]</h2>
        <br><br>
        <h3 id="you-are"></h3>
        <br>
        <h3 id="player-level"></h3>
        <br>
        <img id="profile-photo" height="300" width="200">
        <br><br>
        <h3 id="objective"></h3>
        <br><br><br>
        <br><br><br>
        <a href="http://localhost./l33tmario/play/"><button>Play</button></a>
        <a href="http://localhost./l33tmario/status/"><button>Status</button></a>
        <a href="http://localhost./l33tmario/users/"><button>Users</button></a>
        <a href="http://localhost./l33tmario/message/"><button>Message Bowser</button></a>
        <br><br>
        <button onclick="logoutSession();">Logout</button>
    </center>
</body>
</html>