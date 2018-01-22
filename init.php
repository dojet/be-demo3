<?php
require PRJ.'../dojet3/dojet.php';
// require PRJ.'../be-global/init.php';

define('UI', PRJ.'ui/');
define('CONFIG', PRJ.'config/');
define('MODEL', PRJ.'model/');

Config::load([
    CONFIG.'runtime',
    CONFIG.'route',
    CONFIG.'database',
    // CONFIG.'fileupload',
]);

Autoloader::getInstance()->addAutoloadPath([
    PRJ.'dal/',
]);
