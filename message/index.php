<?php
    session_start();
    if (!isset($_SESSION['uid'])) header('Location: http://localhost./l33tmario/login/');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Message | Mario: The Hacker</title>
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
        <h2>Bowser Message Portal</h2>
        <br><br>
        <div class="msg-box">
            <?php
                function sendRequest($url, $data) {
                    $options = array(
                        'http' => array(
                            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                            'method'  => 'POST',
                            'content' => http_build_query($data)
                        )
                    );
                    $context  = stream_context_create($options);
                    $result = file_get_contents($url, false, $context);
                    if ($result === FALSE) { die('<h1 style="color: red;">Something Went Wrong!</h1>'); }
                    return $result;
                }

                if (isset($_POST['message'])) {
                    $message = $_POST['message'];

                    $profile_photo = sendRequest(
                        'http://localhost./l33tmario/api/getProfilePhoto.php',
                        array('uid' => $_SESSION['uid'])
                    );

                    if (empty($_SESSION['bowser_inbox'])) {
                        $_SESSION['bowser_inbox'] = array($message);
                    } else {
                        array_push($_SESSION['bowser_inbox'], $message);
                    }

                    echo '
                        <br><br>
                        <div class="msg-container">
                            <img src="'.$profile_photo.'" class="right" style="width:100%;">
                            <p>'.htmlspecialchars($message, ENT_QUOTES, 'UTF-8').'</p>
                            <span class="msg-time-left">'.date('h:i:s A').'</span>
                        </div>
                        <div class="msg-container msg-darker">
                            <img src="http://localhost./l33tmario/assets/images/bowser.png" style="width:100%;">
                            <p>Your message has been stored in the Bowser Panel<br><br><i>** This is an automated reply **</i></p>
                            <span class="msg-time-right">'.date('h:i:s A').'</span>
                        </div>
                        ';
                }
            ?>
            <br><br>
            <form method="POST" accept="#">
                <input type="text" name="message">
                <button>Send</button>
            </form>
        </div>
        <br><br><br>
        <br><br><br>
        <a href="http://localhost./l33tmario/dashboard/"><button>Go Back</button></a>        
    </center>
</body>
</html>