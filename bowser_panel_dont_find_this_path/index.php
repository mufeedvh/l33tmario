<?php
    session_start();
    if (!isset($_SESSION['uid'])) header('Location: http://localhost./l33tmario/login/');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bowser Inbox Panel</title>
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
        <h2>Bowser's Inbox Panel</h2>
        <br><br>
        <form method="POST" action="#">
            <input style="cursor: pointer;" type="submit" name="clear_inbox" value="Clear Inbox">
        </form>
        <?php
            if (isset($_POST['clear_inbox'])) {
                $_SESSION['bowser_inbox'] = array();
                header("Refresh: 0");
            }

            // generating a new cage key for every request to this endpoint
            $_SESSION['cage_key'] = bin2hex(openssl_random_pseudo_bytes(20));

            echo '<br><br>';
            echo '<h1>Cage Key:</h1>';
            echo '<img src="http://localhost./l33tmario/assets/images/key.png" height="69" width="69">';
            echo '<span style="font-size: 25px;">'.$_SESSION['cage_key'].'</span>';
            echo '<br><br>';

            if (isset($_SESSION['bowser_inbox'])) {
                foreach ($_SESSION['bowser_inbox'] as $messages) {
                    echo '<br><hr><br>';
                    echo '<h3>'.$messages.'</h3>';
                    echo '<br><hr><br>';
                }
            }
        ?>
    </center>
</body>
</html>