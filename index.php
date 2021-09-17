<meta name="description" content="LoxRP - Spielerliste">
<meta name="author" content="Nico Pergande">
<link rel="shortcut icon" href="server.png" />
<style> @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap'); </style>
<link rel="stylesheet" href="./style.css">

<?php
    $players = file_get_contents('http://193.42.12.52:30120/players.json');
    $players = json_decode($players, true);
    $count = count($players);
    
    ?>

<title>LoxRP ( <?php echo $count . " Spieler"; ?> )</title>

<script>
    window.onload = {
        let ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function(){
            ajax.open("GET", "playerlist.php");
            ajax.send();
        }
    }

    setInterval(reload, 3000)

    function reload() {
        ajax.onreadystatechange = function(){
            ajax.open("GET", "playerlist.php");
            ajax.send();
        }
    }
</script>

<div class="head">
    <p class="mp1">Spielerliste</p>
    <p class="mp2"><?php echo $count ?> / 1024</p>
    <hr>
</div>


<br>
<br>
<br>

<section>

</section>


<hr>
<p class="bottom">powerd by <a class="bottom" href="https://nico-pergande.dev">nico-pergande.dev</a></p>
<hr>