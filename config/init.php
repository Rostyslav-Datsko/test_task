<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/wfm');
define("HELPERS", ROOT . '/vendor/wfm/helpers');
define("LOGS", ROOT . '/tmp/logs');
define("CONFIG", ROOT . '/config');
define("LAYOUT", 'test-task');
define("PATH", 'http://test-task');
define("NO_IMAGE", 'uploads/no_image.jpg');

require_once ROOT . '/vendor/autoload.php';
