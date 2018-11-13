<?php
    session_start();
?>
<head>
    <script src="../jquery-google-api.js"></script>
</head>
<header>
    <div class="header-left">
        <img src="../images/FIRST_HorzRGB_reverse.png" class="logo"/>
    </div>
    <div class="header-center">
        <h1>FTC Competition Tracker</h1>

    </div>
    <div class="header-right">
        <h2>User: <?php echo($_SESSION["Role"])?></h2>
        <button class="button button-fade" type="submit" onclick="logOut()">Log Out</button>
    </div>
</header>


<script>
    function logOut() {

        $.get(`../logout.php`, function(result){
            window.location.reload();
        });
    }
</script>
