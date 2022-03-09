<?php
    // $players = file_get_contents('http://141.95.72.179:30120/players.json');
    $players = file_get_contents('http://ic.npdev.eu:30120/players.json');
    $infos = file_get_contents('http://ic.npdev.eu:30120/info.json');
    $players = json_decode($players, true);
    $infos = json_decode($infos, true);
?>

<title><?php echo $infos['vars']['sv_projectName']; ?> - <?php echo count($players); ?> Spieler</title>
<meta name="description" content="Spielerldaten des Servers <?php echo $infos['vars']['sv_projectName']; ?> mit <?php echo count($infos['resources']); ?> Resourcen.">
<meta name="author" content="nico-pergande.dev">

<div class="playerlist">
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>SteamId</th>
            <th>DiscordId</th>
            <th>FiveM License</th>
            <th>Ping</th>
        </tr>
        <?php foreach($players as $player) { ?>
            <tr>
                <td><?php echo $player['id'] ?></td>

                <td><?php echo $player['name'] ?></td>

                <?php
                foreach($player['identifiers'] as $identifier) {
                    if (str_starts_with($identifier, 'steam:')) {
                        ?> <td><?php echo $identifier ?></td> <?php
                    };
                }
                ?>

                <?php
                    foreach($player['identifiers'] as $identifier) {
                        if (str_starts_with($identifier, 'discord:')) {
                            ?> <td><?php echo $identifier ?></td> <?php
                        };
                    }
                ?>

                <?php
                foreach($player['identifiers'] as $identifier) {
                    if (str_starts_with($identifier, 'license:')) {
                        ?> <td><?php echo $identifier ?></td> <?php
                    };
                }
                ?>
                <td><?php echo $player['ping'] ?></td>
            </tr>
        <?php }; ?>
    </table>
</div>
