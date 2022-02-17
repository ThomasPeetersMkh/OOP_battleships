<?php

require_once __DIR__ . '/model/Ship.php';
require_once __DIR__ . '/model/BattleManager.php';
require_once __DIR__ . '/model/ShipLoader.php';
require_once __DIR__ . '/model/BattleResult.php';

$configuration = array(
    'db_dsn'  => 'mysql:host=localhost;dbname=oo_battle',
    'db_user' => 'root',
    'db_pass' => '',
);