<?php

defined('MOODLE_INTERNAL') || die();

/**
 * @throws ddl_exception
 * @throws ddl_table_missing_exception
 */
function xmldb_local_sync_schedule_upgrade($oldversion)
{
    try {
        global $DB;

        $dbman = $DB->get_manager();

        if($oldversion > 2024060009) {
            $table = new xmldb_table('local_sync_schedule_mod');
            if (!$dbman->table_exists($table)) {
                $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null, null, 'Primary key');
                $table->add_field('cmid', XMLDB_TYPE_INTEGER, '10', null, false, null, null, null, 'Specific activity\'s context');
                $table->add_field('module_type', XMLDB_TYPE_TEXT, '10', null, false, null, null, null, 'Module Type');
                $table->add_field('course_id', XMLDB_TYPE_INTEGER, '10', null, false, null, null, null, 'course Id');
                $table->add_field('group_id', XMLDB_TYPE_INTEGER, '10', null, false, null, null, null, 'group Id');
                $table->add_field('start_date', XMLDB_TYPE_TEXT, null, null, false);
                $table->add_field('end_date', XMLDB_TYPE_TEXT, null, null, false);
                $table->add_field('created_at', XMLDB_TYPE_DATETIME, null, null, true);
                $table->add_field('updated_at', XMLDB_TYPE_DATETIME, null, null, true);

                $table->add_key('primary_key', XMLDB_KEY_PRIMARY, array('id'));

                $dbman->create_table($table);
            }
        }

        return true;
    }catch (Exception $ex) {
        error_log($ex->getMessage());
    }
}