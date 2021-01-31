<html>
<head>
<link rel="stylesheet" type="text/css" href="./css/index.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
</head>
<?php
include_once('./src/verif.php');
?>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-7">
                <form action="./src/loginverif.php" method="POST" class="box">
                    <h1>Login</h1>
                    <p class="text-muted"> Please enter your login and password!</p> <input type="text" name="user" placeholder="Username" required pattern="^[A-Za-z0-9-_ '-]+$" maxlenght="15"> <input type="password" name="password" placeholder="Password" required pattern="^\b(?!<).*$(?!>)\b"> <input type="submit" name="Done" value="Login">
                    <?php
                        verif_get();
                    ?>
                    <div class="col-md-12">
                        <ul class="social-network social-circle">
                            <li><a href="https://github.com/Enzo2911" class="icoGithub" title="Github"><i class="fab fa-github"></i></a></li>
                        </ul>
                    </div>
                </form>
        </div>
    </div>
</div>
</body>
</html>