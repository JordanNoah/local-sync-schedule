<?php

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'local_sync_schedule';
$plugin->version = 2024060020;
$plugin->requires = 2022041200;
$plugin->release = '1.0.0' ;
$plugin->maturity = MATURITY_STABLE;
$plugin->dependencies = [
    'local_message_broker' => 2023061200
];