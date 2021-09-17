<?php
    $players = file_get_contents('http://193.42.12.52:30120/players.json');
    $players = json_decode($players, true);
    $count = count($players);
?>

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