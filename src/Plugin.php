<?php

/*
 * AdvancedHosters general hidev config
 *
 * @link      https://github.com/advancedhosters/hidev-config
 * @package   hidev-config
 * @license   No license
 * @copyright Copyright (c) 2015, AdvancedHosters (https://advancedhosters.com/)
 */

namespace advancedhosters\hidev\config;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'configFiles' => [
            '@advancedhosters/hidev/config/config.yml',
        ],
        'views' => [
            '@advancedhosters/hidev/config/views',
        ],
    ];
}
