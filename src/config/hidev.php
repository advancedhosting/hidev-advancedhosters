<?php

/*
 * AdvancedHosters general hidev config
 *
 * @link      https://github.com/advancedhosters/hidev-config
 * @package   hidev-config
 * @license   No license
 * @copyright Copyright (c) 2015, AdvancedHosters (https://advancedhosters.com/)
 */

return [
    'components' => [
        'config' => [
            'include' => [
                '@advancedhosters/hidev/vendor/config/goals.yml',
            ],
            'views' => [
                '@advancedhosters/hidev/vendor/views',
            ],
        ],
    ],
];
