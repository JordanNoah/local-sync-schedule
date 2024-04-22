<?php

defined('MOODLE_INTERNAL') || die();

$functions = [
    'local_sync_schedule_course_counter' => [
        'classname' => 'local_sync_schedule\external_course',
        'methodname' => 'get_course_counter',
        'description' => 'get course counter',
        'type' => 'read',
        'ajax' => true
    ],
    'local_sync_schedule_course_data' => [
        'classname' => 'local_sync_schedule\external_course',
        'methodname' => 'get_course_data',
        'description' => 'get course data by pagination',
        'type' => 'read',
        'ajax' => true
    ],
    'local_sync_schedule_group_counter' => [
        'classname' => 'local_sync_schedule\external_group',
        'methodname' => 'get_group_counter',
        'description' => 'get course group counter',
        'type' => 'read',
        'ajax' => true
    ],
    'local_sync_schedule_group_data' => [
        'classname' => 'local_sync_schedule\external_group',
        'methodname' => 'get_group_data',
        'description' => 'get course group data by pagination',
        'type' => 'read',
        'ajax' => true
    ],
    'local_sync_schedule_grouping_counter' => [
        'classname' => 'local_sync_schedule\external_grouping',
        'methodname' => 'get_grouping_counter',
        'description' => 'get course grouping counter',
        'type' => 'read',
        'ajax' => true
    ],
    'local_sync_schedule_grouping_data' => [
        'classname' => 'local_sync_schedule\external_grouping',
        'methodname' => 'get_grouping_data',
        'description' => 'get course grouping counter by pagination',
        'type' => 'read',
        'ajax' => true
    ],
    'local_sync_schedule_course_section_counter' => [
        'classname' => 'local_sync_schedule\external_section',
        'methodname' => 'get_section_counter',
        'description' => 'get course section counter',
        'type' => 'read',
        'ajax' => true
    ],
    'local_sync_schedule_course_section_data' => [
        'classname' => 'local_sync_schedule\external_section',
        'methodname' => 'get_section_data',
        'description' => 'get course section data by pagination',
        'type' => 'read',
        'ajax' => true
    ],
    'local_sync_schedule_course_section_module_counter' => [
        'classname' => 'local_sync_schedule\external_module',
        'methodname' => 'get_module_counter',
        'description' => 'get course module counter',
        'type' => 'read',
        'ajax' => true
    ],
    'local_sync_schedule_course_section_module_data' => [
        'classname' => 'local_sync_schedule\external_module',
        'methodname' => 'get_module_data',
        'description' => 'get course module data by pagination',
        'type' => 'read',
        'ajax' => true
    ],
    'local_sync_schedule_course_group_grouping' => [
        'classname' => 'local_sync_schedule\external_group_grouping',
        'methodname' => 'get_group_grouping',
        'description' => 'get course grouping counter',
        'type' => 'read',
        'ajax' => true
    ]
];