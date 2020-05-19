<?php
    session_start();
    if (!isset($_SESSION['uid'])) header('Location: http://localhost./l33tmario/login/');
    if (!isset($_SESSION['inside_castle'])) {
    	echo "<script>alert('You are not inside the castle');</script>";
        echo "<script>window.location = 'http://localhost./l33tmario/play/';</script>";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Level 2 | Mario: The Hacker</title>
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
        <h2>Objective: Rescue The Princess</h2>        
        <br><br>
        <?php
            if (isset($_POST['cage_key'])) {
                $original_cage_key = strval($_SESSION['cage_key']);
                $input_cage_key = strval($_POST['cage_key']);

                if (strcmp($input_cage_key, $original_cage_key)) {
                    $_SESSION['rescued_princess'] = true;
                    echo "<script>alert('Princess: Thank You Mario for rescuing me!');</script>";
                    echo "<script>alert('Congratulations Mario!');</script>";
                    echo "<script>alert('But... are you L33T yet?');</script>";
                    echo "<script>alert('Can you kill Bowser and you will be Level L33T... 😈');</script>";
                } else {
                    echo "<h3>ERROR: Wrong Cage Key!</h3>\n\t<br>\n";
                }
            }
        ?>        
        <div class="container">
            <img src="http://localhost./l33tmario/assets/images/princess.png" height="180" width="180">
            <div class="centered">
                <img src="http://localhost./l33tmario/assets/images/cage.png" height="500" width="500">s
            </div>
        </div>
        <form method="POST" action="#">
            <input type="hidden" name="cage_key">
        </form>
        <br><br><br>
        <a href="http://localhost./l33tmario/dashboard/"><button>Go Back</button></a>
    </center>
</body>
</html>