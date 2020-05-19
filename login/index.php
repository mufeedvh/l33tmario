<?php
    session_start();
    if (isset($_SESSION['uid'])) header('Location: http://localhost./l33tmario/dashboard/');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login | L33T Mario</title>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!-- jquery -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <!-- javascript -->
    <script type="text/javascript" src="../js/main.js"></script>
</head>
<body>
    <center>
        <br><br><br><br>
        <h1>$ Login<span class="blinking-underscore">_</span></h1>
        <br><br><br><br>
        <img src="../assets/images/mario.png" height="300" width="200">
        <img src="../assets/images/cage.png" height="300" width="300">
        <br><br><br><br>
        <form method="POST" action="#">
            <label>Username: </label>
            <input type="text" name="username" placeholder="Username...">
            <br><br>
            <label>Password:</label>
            <input type="password" name="password" placeholder="Password...">
            <br><br><br>
            <button>Login</button>
            <br><br>
            <!--
                Mario's Credentials
                Username: mario
                Password: leetmario123
            -->
        </form>
        <?php
            if (isset($_POST['username']) && isset($_POST['password'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                /*
                    I ain't got time to setup a DB...
                    I added 'luigi' and 'bowser' as players for adding extra levels
                    and for you guys to play with the application
                */

                function setupPlayer($user_data) {
                    $_SESSION['uid'] = $user_data['uid'];

                    setcookie('uid', $user_data['uid'], time()+(86400 * 30), "/");
                    setcookie('account_id', $user_data['account_id'], time()+(86400 * 30), "/");

                    header('Location: http://localhost./l33tmario/dashboard/');
                }

                if ($username === 'mario' && $password === 'leetmario123') { // mario credentials
                    $user_data = array(
                        'uid' => 'd9a1ba39aeddd435f62ce008711f34dfea6d08f4',
                        'account_id' => '18957422'
                    );

                    setupPlayer($user_data);
                } elseif ($username === 'luigi' && $password === 'luigicanfly6969') { // luigi credentials
                    $user_data = array(
                        'uid' => 'a86956a1b31e42522980b5f162f9348fa7215744',
                        'account_id' => '92198464'
                    );

                    setupPlayer($user_data);
                } elseif ($username === 'bowser' && $password === 'bowserkidnappedprincess69420') { // bowser credentials
                    $user_data = array(
                        'uid' => '1d03bf51eb9b82b3b67e60f71b24c88dc738b380',
                        'account_id' => '27841365'
                    );                    

                    setupPlayer($user_data);
                } else {
                    echo '<br><br><h3 style="color: red;">Invalid Credentials</h3>';
                }
            }
        ?>        
    </center>
</body>
</html>
