<?php
    $serverIP = '185.254.97.89';
    $players = file_get_contents('http://' . $serverIP . ':30120/players.json');
    $infos = file_get_contents('http://' . $serverIP . ':30120/info.json');
    $players = json_decode($players, true);
    $infos = json_decode($infos, true);

    $serverPrefix = "Awanta";
    $teamlerCount = 0;
?>

<title><?php echo $infos['vars']['sv_projectName']; ?> - <?php echo count($players); ?> Spieler</title>
<meta name="description" content="Spielerldaten des Servers <?php echo $infos['vars']['sv_projectName']; ?> mit <?php echo count($infos['resources']); ?> Resourcen.">
<meta name="author" content="nico-pergande.dev">

<div class="playerlist">
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Steam ID</th>
            <th>Discord ID</th>
            <th>FiveM ID</th>
            <th>Rockstar license</th>
            <th>Ping</th>
        </tr>
        <?php foreach($players as $player) { 
            
            $steamid = '';
            $discordid = '';
            $license = '';
            $fivem = '';

            // check, if playername contains serverprefix
            if (str_contains($player['name'], $serverPrefix)) {
                $teamlerCount++;
            }
            
            ?>

            <?php
                foreach($player['identifiers'] as $identifier) {
                    if (str_starts_with($identifier, 'steam:')) {
                        $steamid = $identifier;
                    } elseif (str_starts_with($identifier, 'discord:')) {
                        $discordid = $identifier;
                    } elseif (str_starts_with($identifier, 'license:')) {
                        $license = $identifier;
                    } elseif (str_starts_with($identifier, 'fivem:')) {
                        $fivem = $identifier;
                    };
                }
            ?>

            <tr>
                <td><?php echo $player['id'] ?></td>

                <td><?php echo $player['name'] ?></td>

                <td><?php echo $steamid ?></td>

                <td><?php echo $discordid ?></td>

                <td><?php echo $fivem ?></td>

                <td><?php echo $license ?></td>

                <td><?php echo $player['ping'] ?></td>
            </tr>
        <?php }; ?>
    </table>

    <br>
    <br>
    <br>
    <br>
    <br>

    <p>Es befinden sich <?php echo(count($players)) ?> Spieler auf dem Server, wovon <?php echo $teamlerCount ?> Teammitglieder sind.</p>
</div>