<?php
/**
 * AdvancedHosters vendor configuration for HiDev
 *
 * @link      https://github.com/advancedhosters/hidev-advancedhosters
 * @package   hidev-advancedhosters
 * @license   proprietary
 * @copyright Copyright (c) 2015-2017, AdvancedHosters (https://advancedhosters.com/)
 */

error_reporting(E_ALL & ~E_NOTICE);

$bootstrap = __DIR__ . '/../src/_bootstrap.php';

require_once file_exists($bootstrap) ? $bootstrap : __DIR__ . '/../vendor/autoload.php';
