<?php

namespace local_sync_schedule\output;

use dml_exception;
use local_sync_schedule\models\ModSchedule;
use stdClass;
class ModuleSchedule {
    /**
     * @throws dml_exception
     */
    public static function saveModuleSchedule(ModSchedule $modScheduleModel):stdClass {
        global $DB;

        $moduleScheduleDb = self::getModuleSchedule($modScheduleModel->getCmid(),$modScheduleModel->getModuleType(),$modScheduleModel->getCourseId(),$modScheduleModel->getGroupId());
        $modScheduleModel->setUpdatedAt(date('Y-m-d H:i:s'));
        if($moduleScheduleDb) {
            $modScheduleModel->setId($moduleScheduleDb->id);
            $modScheduleModel->setCreatedAt($moduleScheduleDb->created_at);
            $DB->update_record('local_sync_schedule_mod', $modScheduleModel->to());
        } else {
            $modScheduleModel->setCreatedAt(date('Y-m-d H:i:s'));
            $idModSchedule = $DB->insert_record("local_sync_schedule_mod", $modScheduleModel->to());
            $modScheduleModel->setId($idModSchedule);
        }

        return $modScheduleModel->to();
    }

    /**
     * @throws dml_exception
     */
    public static function getModuleSchedule($cmid, $module_type, $course_id, $group_id) {
        global $DB;
        return $DB->get_record_sql('SELECT * FROM mdl_local_sync_schedule_mod where cmid = '.$cmid.' and module_type like "'.$module_type.'" and course_id = '.$course_id.' and group_id = '.$group_id);
    }

}