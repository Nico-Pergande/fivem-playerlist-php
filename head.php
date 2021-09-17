<?php
    $players = file_get_contents('http://193.42.12.52:30120/players.json');
    $players = json_decode($players, true);
    $count = count($players);  
?>

<title>LoxRP ( <?php echo $count . " Spieler"; ?> )</title>

<div class="head">
    <p class="mp1">Spielerliste</p>
    <p class="mp2"><?php echo $count ?> / 1024</p>
    <hr>
</div>