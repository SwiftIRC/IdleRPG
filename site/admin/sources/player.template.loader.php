<?php

# Nav array
$nav_array = array(
    'home' => '',
    'player' => 'active',
    'world' => '',
    'quest' => '',
);

$smarty->assign('nav', $nav_array);

if (isset($_GET['player'])) {
    $_GET['player'] = substr($_GET['player'], 0, 30);

    if ($_GET['player'] == "") {
        header('Location: ' . URL . 'players/');
    }

    $smarty->assign('title', 'Player Info - ' . $_GET['player']);
    $smarty->assign('tpl_file', 'player.tpl');

    $file = fopen(IDLE_DB, "r");
    fgets($file, 1024);
    $found = 0;
    while ($line = fgets($file, 1024)) {
        if (substr($line, 0, strlen($_GET['player']) + 1) == $_GET['player'] . "\t") {
            list($user, , $isadmin, $level, $class, $secs, , $uhost, $online, $idled, $x, $y, $pen['mesg'], $pen['nick'], $pen['part'], $pen['kick'], $pen['quit'], $pen['quest'], $pen['logout'], $created, $lastlogin, $item['amulet'], $item['charm'], $item['helm'], $item['boots'], $item['gloves'], $item['ring'], $item['leggings'], $item['shield'], $item['tunic'], $item['weapon'], $alignment) = explode("\t", trim($line));
            $found = 1;
            break;
        }
    }

    if (!$found) {

        $smarty->assign('link', URL . 'players');

        $file = file(IDLE_DB);
        unset($file[0]);
        usort($file, 'cmp_level_desc');
        $players = array();
        foreach ($file as $line) {
            list($user, , $isadmin, $level, $class, $secs, , $uhost, $online, $idled, $x, $y, $pen['mesg'], $pen['nick'], $pen['part'], $pen['kick'], $pen['quit'], $pen['quest'], $pen['logout'], $created, $lastlogin, $item['amulet'], $item['charm'], $item['helm'], $item['boots'], $item['gloves'], $item['ring'], $item['leggings'], $item['shield'], $item['tunic'], $item['weapon'], $alignment) = explode("\t", trim($line));
            $class = str_replace("<", "&lt;", $class);
            $user = str_replace("<", "&lt;", $user);
            $class = str_replace(">", "&gt;", $class);
            $user = str_replace(">", "&gt;", $user);

            $players[$user]['user'] = $user;
            $players[$user]['level'] = $level;
            $players[$user]['ttl'] = duration($secs);
            $players[$user]['class'] = $class;
            $players[$user]['online'] = $online;
        }

        $smarty->assign('not_found', $_GET['player']);
        $smarty->assign('players', $players);
        $smarty->assign('tpl_file', 'playernotfound.tpl');
        $smarty->assign('title', 'Player Not Found');
        $smarty->display(CURRENT_TEMPLATE_PATH . 'wrapper.tpl');
    } else {
        # Player found load data
        $player = array(
            'user' => $user,
            'isadmin' => $isadmin,
            'level' => $level,
            'class' => $class,
            'secs' => duration($secs),
            'host' => $uhost,
            'online' => ($online ? "Online" : "Offline"),
            'idled' => duration($idled),
            'x' => $x,
            'y' => $y,
            'pen' => array(
                'mesg' => duration($pen['mesg']),
                'nick' => duration($pen['nick']),
                'part' => duration($pen['part']),
                'kick' => duration($pen['kick']),
                'quit' => duration($pen['quit']),
                'quest' => duration($pen['quest']),
                'logout' => duration($pen['logout']),
                'total' => duration(array_sum($pen)),
            ),
            'created' => date("D jS M Y \a\t H:i:s", $created),
            'lastlogin' => date("D jS M Y \a\t H:i:s", $lastlogin),
            'item' => array(
                'amulet' => $item['amulet'],
                'charm' => $item['charm'],
                'helm' => $item['helm'],
                'boots' => $item['boots'],
                'gloves' => $item['gloves'],
                'ring' => $item['ring'],
                'leggings' => $item['leggings'],
                'shield' => $item['shield'],
                'tunic' => $item['tunic'],
                'weapon' => $item['weapon'],
            ),
            'alignment' => ($alignment == 'e' ? "Evil" : ($alignment == 'n' ? "Neutral" : "Good")),
        );

        $item = sort_user_items($item);
        ksort($item);

        $player['sum'] = $item['sum'];
        unset($item['sum']);

        ksort($player['pen']);
        $smarty->assign('pen', $player['pen']);

        $smarty->assign('player', $player);
        $smarty->assign('item', $item);
        $smarty->assign('tpl_file', 'player.tpl');
        $smarty->display(CURRENT_TEMPLATE_PATH . 'wrapper.tpl');
    }
} else {
    # Show player list. No player defined.
    $smarty->assign('title', 'Player List');
    $smarty->assign('tpl_file', 'playerlist.tpl');
    $smarty->assign('link', URL . 'players');

    $file = file(IDLE_DB);
    unset($file[0]);
    usort($file, 'cmp_level_desc');
    $players = array();
    foreach ($file as $line) {
        list($user, , $isadmin, $level, $class, $secs, , $uhost, $online, $idled, $x, $y, $pen['mesg'], $pen['nick'], $pen['part'], $pen['kick'], $pen['quit'], $pen['quest'], $pen['logout'], $created, $lastlogin, $item['amulet'], $item['charm'], $item['helm'], $item['boots'], $item['gloves'], $item['ring'], $item['leggings'], $item['shield'], $item['tunic'], $item['weapon'], $alignment) = explode("\t", trim($line));
        $class = str_replace("<", "&lt;", $class);
        $user = str_replace("<", "&lt;", $user);
        $class = str_replace(">", "&gt;", $class);
        $user = str_replace(">", "&gt;", $user);

        $players[$user]['user'] = $user;
        $players[$user]['level'] = $level;
        $players[$user]['ttl'] = duration($secs);
        $players[$user]['class'] = $class;
        $players[$user]['online'] = $online;
    }

    $smarty->assign('players', $players);
    $smarty->display(CURRENT_TEMPLATE_PATH . 'wrapper.tpl');
}

function duration($s)
{
    $s = abs(intval($s));
    if ($s == 0) {
        return "None";
    }

    return sprintf("%d day%s, %02d:%02d:%02d", $s / 86400, intval($s / 86400) == 1 ? "" : "s", ($s % 86400) / 3600, ($s % 3600) / 60, $s % 60);
}

function cmp_level_desc($a, $b)
{
    list(, , , $level1, , $time1) = explode("\t", trim($a));
    list(, , , $level2, , $time2) = explode("\t", trim($b));
    if ($level1 == $level2) {
        return ($time1 <= $time2) ? -1 : 1;
    }

    return ($level1 > $level2) ? -1 : 1;
}

function sort_user_items($items)
{
    $sum = 0;
    foreach ($items as $slot => $item) {
        $sum += $item;
        if ($slot == "helm" && substr($item, -1, 1) == "a") {
            $item = intval($item) . " (Mattt's Omniscience Grand Crown)";
        }if ($slot == "tunic" && substr($item, -1, 1) == "b") {
            $item = intval($item) . " (Res0's Protectorate Plate Mail)";
        }if ($slot == "amulet" && substr($item, -1, 1) == "c") {
            $item = intval($item) . " (Dwyn's Storm Magic Amulet)";
        }if ($slot == "weapon" && substr($item, -1, 1) == "d") {
            $item = intval($item) . " (Jotun's Fury Colossal Sword)";
        }if ($slot == "weapon" && substr($item, -1, 1) == "e") {
            $item = intval($item) . " (Drdink's Cane of Blind Rage)";
        }if ($slot == "boots" && substr($item, -1, 1) == "f") {
            $item = intval($item) . " (Mrquick's Magical Boots of Swiftness)";
        }if ($slot == "weapon" && substr($item, -1, 1) == "g") {
            $item = intval($item) . " (Jeff's Cluehammer of Doom)";
        }if ($slot == "ring" && substr($item, -1, 1) == "h") {
            $item = intval($item) . " (Juliet's Glourious Ring of Sparkliness)";
        }
        $items[$slot] = $item;
    }
    $items['sum'] = $sum;

    return $items;
}
