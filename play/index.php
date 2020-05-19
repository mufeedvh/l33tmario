<?php
    session_start();
    if (!isset($_SESSION['uid'])) header('Location: http://localhost./l33tmario/login/');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Play | Mario: The Hacker</title>
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
        <h2>Objective: Get Inside Bowser's Castle</h2>
        <br><br>
        <img src="http://localhost./l33tmario/assets/images/bowser-castle.png" height="300" width="300">
        <br><br>
        <h3 id="response"></h3>
        <br><br>
        <?php
            if (isset($_SESSION['inside_castle']) && $_SESSION['inside_castle'] == true) {
                echo '<h3>You are inside the castle</h3>';
                echo '<br>';
                echo '<a href="http://localhost.:/l33tmario/level2/"><button>Level 2</button></a>';
            } else {
                echo '<button onclick="getIntoCastle();">Get In</button>';
            }
        ?>
        <br><br><br>
        <br><br><br>
        <a href="http://localhost./l33tmario/dashboard/"><button>Go Back</button></a>
    </center>
</body>
</html>