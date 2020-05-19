<?php

if (isset($_POST['uid'])) {
    $uid = $_POST['uid'];

    if ($uid == 'd9a1ba39aeddd435f62ce008711f34dfea6d08f4') {
        die('http://localhost./l33tmario/assets/images/mario.png');
    } elseif ($uid == 'a86956a1b31e42522980b5f162f9348fa7215744') {
        die('http://localhost./l33tmario/assets/images/luigi.png');
    } elseif ($uid == '1d03bf51eb9b82b3b67e60f71b24c88dc738b380') {
        die('http://localhost./l33tmario/assets/images/bowser.png');
    } else {
        die("ERROR: Given UID does not associate with any account.");
    }
} else {
    die("ERROR: 'uid' parameter missing.");
}

?>