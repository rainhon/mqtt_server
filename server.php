<?php
define('__ROOT__', dirname(__FILE__));
require __DIR__ . '/vendor/autoload.php';

$config = require('config.php');

$server = new Core\Server();