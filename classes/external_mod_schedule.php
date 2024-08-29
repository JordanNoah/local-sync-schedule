<?php

namespace local_sync_schedule;

use external_api;
use external_function_parameters;
use external_single_structure;
use external_value;
use dml_exception;
use external_multiple_structure;
use invalid_parameter_exception;
use local_sync_schedule\output\ModuleSchedule;
use local_sync_schedule\models\ModSchedule;

class external_mod_schedule extends external_api
{
    public static function set_mod_schedule_parameters():external_function_parameters{
        return new external_function_parameters([
            'cmid' => new external_value(PARAM_INT),
            'moduleType' => new external_value(PARAM_TEXT),
            'courseId' => new external_value(PARAM_INT),
            'groupId' => new external_value(PARAM_INT),
            'startDate' => new external_value(PARAM_TEXT),
            'endDate' => new external_value(PARAM_TEXT)
        ]);
    }

    /**
     * @throws invalid_parameter_exception
     * @throws dml_exception
     */
    public static function set_mod_schedule($cmid, $moduleType, $courseId, $groupId, $startDate, $endDate)
    {
        global $DB;
        $params = self::validate_parameters(self::set_mod_schedule_parameters(),['cmid' => $cmid, 'moduleType' => $moduleType, 'courseId' => $courseId, 'groupId' => $groupId, 'startDate' => $startDate, 'endDate' => $endDate]);
        $modScheduleModel = new ModSchedule(
            $params['cmid'],
            $params['moduleType'],
            $params['courseId'],
            $params['groupId'],
            $params['startDate'],
            $params['endDate']
        );
        $ModSchedule = ModuleSchedule::saveModuleSchedule($modScheduleModel);
        return [];
    }

    public static function set_mod_schedule_returns():external_single_structure
    {
        return new external_single_structure([]);
    }
}