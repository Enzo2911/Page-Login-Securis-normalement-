<?php
session_start();
function verif_login() {
    if(!isset($_SESSION['user'])) {
        header('Location: index.php');
    }
}

if(isset($_POST['logout'])) {
    session_destroy();
    header('Location: index.php?logout=1');
}

verif_login();  
?>
<?php if(isset($_SESSION['user'])) {?>
<form method="POST" class="box">
    <button type="submit" name="logout"> Logout </button>
</form>
<?php } ?>