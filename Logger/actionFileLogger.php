<?php

require_once 'FileLogger.php';

for ($n = 0; $n < 10; $n++) {
    $logger = new FileLogger("test{$n}", './Logger/test.log');
    $logger->log('Hello!');
}