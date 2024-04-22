<?php

namespace local_sync_schedule;

use external_api;
use external_function_parameters;
use external_single_structure;
use external_value;
use dml_exception;
use external_multiple_structure;

class external_module extends external_api
{
    public static function get_module_counter_parameters():external_function_parameters
    {
        return new external_function_parameters(
            array(
                'courseId' => new external_value(PARAM_INT, 'course id'),
            )
        );
    }

    public static function get_module_counter($courseId)
    {
        global $DB;

        $limit = 1;

        return array(
            "totalModules" => ceil($DB->get_record_sql("SELECT count(1) as 'total_rows' from mdl_modules as m,
                                           mdl_course_modules as cm
                                           where cm.course = ? and cm.module = m.id", array('id' => $courseId))->total_rows/$limit)
        );
    }

    public static function get_module_counter_returns():external_single_structure
    {
        return new external_single_structure(
            array(
                'totalModules' => new external_value(PARAM_INT)
            )
        );
    }

    public static function get_module_data_parameters():external_function_parameters
    {
        return new external_function_parameters(
            array(
                'courseId' => new external_value(PARAM_INT, 'course id'),
                'page' => new external_value(PARAM_INT, 'page')
            )
        );
    }

    public static function get_module_data($courseId, $page)
    {
        global $DB;

        $limit = 1;
        $offset = $limit * $page;

        $totalPages = ceil($DB->get_record_sql("SELECT count(1) as 'total_rows' from mdl_modules as m,
                                           mdl_course_modules as cm
                                           where cm.course = ? and cm.module = m.id", array('id' => $courseId))->total_rows/$limit);

        return array(
            'offset' => $offset,
            'pagesMissing' => $totalPages - ($page + 1),
            'totalPages' => $totalPages,
            'modules' => array_values(
                $DB->get_records_sql('
                SELECT cm.*, m.name as modname from mdl_modules as m, mdl_course_modules as cm where cm.course = '.$courseId.' and cm.module = m.id LIMIT '.$limit.' OFFSET '. $offset)
            ),
        );
    }

    public static function get_module_data_returns()
    {
        return new external_single_structure(
            array(
                "offset" => new external_value(PARAM_INT, 'offset'),
                "pagesMissing" => new external_value(PARAM_INT, 'page'),
                "totalPages" => new external_value(PARAM_INT, 'total_pages'),
                "modules" => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            "id" => new external_value(PARAM_TEXT),
                            "course" => new external_value(PARAM_TEXT),
                            "module" => new external_value(PARAM_TEXT),
                            "instance" => new external_value(PARAM_TEXT),
                            "section" => new external_value(PARAM_TEXT),
                            "idnumber" => new external_value(PARAM_TEXT),
                            "added" => new external_value(PARAM_TEXT),
                            "score" => new external_value(PARAM_TEXT),
                            "indent" => new external_value(PARAM_TEXT),
                            "visible" => new external_value(PARAM_TEXT),
                            "visibleoncoursepage" => new external_value(PARAM_TEXT),
                            "visibleold" => new external_value(PARAM_TEXT),
                            "groupmode" => new external_value(PARAM_TEXT),
                            "groupingid" => new external_value(PARAM_TEXT),
                            "completion" => new external_value(PARAM_TEXT),
                            "completiongradeitemnumber" => new external_value(PARAM_TEXT),
                            "completionview" => new external_value(PARAM_TEXT),
                            "completionexpected" => new external_value(PARAM_TEXT),
                            "completionpassgrade" => new external_value(PARAM_TEXT),
                            "showdescription" => new external_value(PARAM_TEXT),
                            "availability" => new external_value(PARAM_TEXT),
                            "deletioninprogress" => new external_value(PARAM_TEXT),
                            "downloadcontent" => new external_value(PARAM_TEXT),
                            "lang" => new external_value(PARAM_TEXT),
                            "modname" => new external_value(PARAM_TEXT),
                        )
                    )
                )
            )
        );
    }
}