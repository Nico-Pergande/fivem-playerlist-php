<?php 
    require('index.php');
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