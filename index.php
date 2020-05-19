<?php
    session_start();
    if (isset($_SESSION['uid'])) header('Location: http://localhost./l33tmario/dashboard/');
?>
<!DOCTYPE html>
<html>
<head>
    <title>L33T Mario The Game</title>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- jquery -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- javascript -->
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
    <center>
        <br><br>
        <h1>$ L33T Mario The Game<span class="blinking-underscore">_</span></h1>
        <br>
        <h4>Mario the game but you rescue the princess by hacking</h4>
        <br><br><br><br>
        <img src="assets/images/mario.png" height="300" width="200">
        <img src="assets/images/luigi.png" height="300" width="200">
        <img src="assets/images/bowser.png" height="300" width="200">
        <img src="assets/images/princess.png" height="300" width="200">
        <br><br><br><br>
        <a href="login/"><button>Login</button></a>
    </center>
</body>
</html>