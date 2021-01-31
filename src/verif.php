<?php

function verif_get() {
    if(isset($_GET['error'])) {
        $err = $_GET['error'];
        if($err==0) {
            echo "<center> <p style='color:red'>User Or/& MDP incorrect</p> </center>";
        }
        if($err==1) {
            echo "<center> <p style='color:red'>User incorrect</p> </center>";
        }
        if($err==2) {
            if (session_start() == 1) {
                session_destroy();
            }
            echo "<center> <p style='color:red'>Cookie Invalide (Reload Page)</p> </center>";
        }
    }
    if(isset($_GET['succes'])) {
        $succes = $_GET['succes'];
        if($succes==1)
            echo "<center> <p style='color:green'>Connecté.. Redirection en cours</p> </center>";
            echo "
            <script language='javascript'> 
            setTimeout(window.location.href = 'panel.php', 7000);
            </script>
            ";
    }
    if(isset($_GET['logout'])) {
        s²ssion_destroy();
        $logout = $_GET['logout'];
        if($logout == 1)
            echo "<center> <p style='color:green'>Vos été maintenant déconnecté</p> </center>";
    }
}


function suppallcookie() {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}

function suppcookielogin() {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        echo $name;
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000);
    }
}
?>