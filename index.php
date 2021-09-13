<title>LoxRP - Players</title>
<meta name="description" content="Portfolio des Software Engeneer & Webdeveloper's Nico Pergande.">
<meta name="author" content="Nico Pergande">
<link rel="shortcut icon" href="server.png" />
<style> @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap'); </style>

<?php
    $players = file_get_contents('http://193.42.12.52:30120/players.json');
    $players = json_decode($players, true);
    $count = count($players);
?>

<script>
    setInterval(reload, 3000)

    function reload() {
        location.reload()
    }
</script>

<div class="head">
    <p class="mp1">Spielerliste</p>
    <p class="mp2"><?php echo $count ?> / 1024</p>
    <hr>
</div>

<style>
    .head_connect {
        padding: 1em;
        margin-right: auto;
    }
</style>

<br>
<br>
<br>

<div class="mainpage">
    <div class="playerlist">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Steam</th>
                <th>Ping</th>
                <th>GTA License</th>
            </tr>
            <?php foreach($players as $player) { ?>
            <tr>
                <td><?php echo $player['id'] ?></td>
                <td><?php echo $player['name'] ?></td>
                <td><?php echo $player['identifiers'][0] ?></td>
                <td><?php echo $player['ping'] ?></td>
                <td><?php echo $player['identifiers'][1] ?></td>
            </tr>
            <?php }; ?>
        </table>
    </div>
</div>

<style>

    .mp1 {
        color: #ECF0F1;
        font-size: 40;
        text-align: center;
        padding-bottom: 0em;
    }

    .mp2 {
        color: #ECF0F1;
        text-align: center;
    }
</style>

<hr>
<p class="bottom">powerd by <a class="bottom" href="https://nico-pergande.dev">nico-pergande.dev</a></p>
<hr>


<style>
    * {
        font-family: "Montserrat";
        background-color: #191919;
        
    }
    
    th {
        color: #E67E22;
        padding-bottom: 2.5em;
    }

    td {
        text-align: center;
        color: #ECF0F1;
        padding-bottom: 5;
    }

    td:hover {
        color: #F39C12;
    }

    th, td {
        padding-left: 5px;
        padding-right: 5px;
    }

    table {
        margin-left: auto;
        margin-right: auto;
        width: 75em;
        color: #1e1e1e;
    }

    .bottom {
        text-align: center;
        color: #2ECC71;
    }

    a.bottom {
        color: #E74C3C;
    }

    a.bottom:hover {
        color: #16A085;
    }

    hr {
        color: #16A085;
    }
</style>