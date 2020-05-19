<?php
    session_start();
    if (!isset($_SESSION['uid'])) header('Location: http://localhost./l33tmario/login/');
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Status | Mario: The Hacker</title>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
    <!-- jquery -->
    <script type="text/javascript" src="http://localhost./l33tmario/js/jquery.js"></script>
    <!-- javascript -->
    <script type="text/javascript" src="http://localhost./l33tmario/js/main.js"></script>
</head>
<body>
    <center>
        <br><br>
        <h2>User Status</h2>
        <br><br>
        <h3>Bowser</h3>
        <br><br>
        <img src="http://localhost./l33tmario/assets/images/bowser.png" height="300" width="200">
        <br><br>
        <?php
            $read_config = file_get_contents('../../conf/27841365/user.conf');

            if (strpos($read_config, 'alive=1') !== false) {
                echo "<h3>Alive</h3>";
            } else {
                $_SESSION['bowser_dead'] = true;
                echo "<h3>STATUS ⬇️</h3>";
                echo '
                    <video id="ded" width="600" height="400" autoplay loop muted>
                        <source src="../ded.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <script>alert("Congratulations Bowser is fkin ded!!!!");</script>
                    <script>alert("Level upgraded to L33T");</script>
                ';
            }
        ?>
        <br><br><br>
        <br><br><br>
        <a href="http://localhost./l33tmario/users/"><button>Go Back</button></a>
        <br><br><br>
        <br><br><br>        
    </center>
</body>
</html>