<?php

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
