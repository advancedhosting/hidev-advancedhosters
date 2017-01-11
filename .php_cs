<?php

$header = <<<EOF
AdvancedHosters vendor configuration for HiDev

@link      https://github.com/advancedhosters/hidev-advancedhosters
@package   hidev-advancedhosters
@license   proprietary
@copyright Copyright (c) 2015-2017, AdvancedHosters (https://advancedhosters.com/)
EOF;

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@PSR2' => true,
        'header_comment'                             =>  [
            'header'        => $header,
            'separate'      => 'bottom',
            'location'      => 'after_declare_strict',
            'commentType'   => 'PHPDoc',
        ],
    ))
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
            ->notPath('vendor')
            ->notPath('runtime')
            ->notPath('web/assets')
            ->notPath('vendor')
            ->notPath('runtime')
            ->notPath('web/assets')
        )
;
