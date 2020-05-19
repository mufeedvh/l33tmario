function getCookie(name) {
    var value = "; " + document.cookie;
    var parts = value.split("; " + name + "=");
    if (parts.length == 2) return parts.pop().split(";").shift();
}

function getIntoCastle() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('response').innerHTML = this.responseText;
        }
    };
    xhttp.open('POST', 'http://localhost./l33tmario/api/getIntoCastle.php', true);
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhttp.send('user=bWFyaW8=');
}

function loadDashboard() {
    getPlayerInfo();
    getPlayerLevel();
    getProfilePhoto();
    getObjective();
}

function loadPlayerStatus() {
    getPlayerInfo();
    getPlayerLevel();
    getProfilePhoto();
    getPlayerAliveStatus();
}

function getProfilePhoto() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            $("#profile-photo").attr("src", this.responseText);
        }
    };
    xhttp.open('POST', 'http://localhost./l33tmario/api/getProfilePhoto.php', true);
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    var uid = getCookie('uid');
    xhttp.send('uid='+uid);
}

function getPlayerInfo() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('you-are').innerHTML = this.responseText;
        }
    };
    xhttp.open('POST', 'http://localhost./l33tmario/api/getPlayerInfo.php', true);
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    var uid = getCookie('uid');
    xhttp.send('uid='+uid);
}

function getObjective() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('objective').innerHTML = this.responseText;
        }
    };
    xhttp.open('POST', 'http://localhost./l33tmario/api/getObjective.php', true);
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    var uid = getCookie('uid');
    xhttp.send('uid='+uid);
}

function getPlayerLevel() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('player-level').innerHTML = this.responseText;
        }
    };
    xhttp.open('POST', 'http://localhost./l33tmario/api/getPlayerLevel.php', true);
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhttp.send();
}

function getPlayerAliveStatus() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var response = this.responseText;
            if (response.includes('alive=1')) {
                document.getElementById('alive').innerHTML = 'Alive';
            } else {
                document.getElementById('alive').innerHTML = 'Dead';
            }
        }
    };
    xhttp.open('POST', 'http://localhost./l33tmario/api/getPlayerAliveStatus.php', true);
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    var account_id = getCookie('account_id');
    xhttp.send('conf=../conf/'+account_id+'/user.conf');
}

function logoutSession() {
    var message = "Logging out will reset your progress? Are you sure you want to logout?";
    if (confirm(message)) {
        window.location = "http://localhost./l33tmario/logout/";
    }
}