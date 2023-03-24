<?php

use App\Services\Logs\FileLogManager;
use App\Services\Logs\StdoutLogManager;

require 'vendor/autoload.php';

//$logManager = new StdoutLogManager();
//$logManager->log('info', 'testing...');

$logManager = new FileLogManager(__DIR__ . '/log');
$logManager->log('info', 'testing...');