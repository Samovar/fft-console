#!/usr/bin/env php

<?php

if (php_sapi_name() !== 'cli') {
    exit('Run in console');
}

require_once (__DIR__ . '/index.php');
