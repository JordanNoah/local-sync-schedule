<?php

namespace local_sync_schedule;

use external_api;
use external_function_parameters;
use external_single_structure;
use external_value;
use dml_exception;
use external_multiple_structure;

class external_course extends external_api {
    public static function get_course_counter_parameters():external_function_parameters
    {
        return new external_function_parameters(
            array()
        );
    }

    /**
     * @throws dml_exception
     */
    public static function get_course_counter(): array
    {
        global $DB;
        $limit = 10;

        return array(
            "totalCourses" => ceil($DB->get_record_sql("SELECT count(1) as 'total_rows' from mdl_course where id > 1")->total_rows / $limit)
        );
    }

    public static function get_course_counter_returns():external_single_structure
    {
        return new external_single_structure(
            array(
                'totalCourses' => new external_value(PARAM_INT)
            )
        );
    }

    public static function get_course_data_parameters():external_function_parameters{
        return new external_function_parameters(
            array(
                'page' => new external_value(PARAM_INT, 'page'),
            )
        );
    }

    public static function get_course_data($page): array {
        global $DB;

        $limit = 10;
        $offset = $limit * $page;
        $totalpages = ceil($DB->get_record_sql("select count(1) as 'total_rows' from mdl_course where id > 1")->total_rows / $limit);

        return array(
            "offset"=>$offset,
            "pagesMissing"=> $totalpages - ($page + 1),
            "totalPages" => $totalpages,
            "courses"=>array_values($DB->get_records_sql('SELECT * from mdl_course where id > 1 LIMIT 10 OFFSET '.$offset))
        );
    }

    public static function get_course_data_returns():external_single_structure
    {
        return new external_single_structure(
            array(
                "offset" => new external_value(PARAM_INT),
                "pagesMissing" => new external_value(PARAM_INT),
                "totalPages" => new external_value(PARAM_INT),
                "courses" => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            "id" => new external_value(PARAM_TEXT),
                            "category" => new external_value(PARAM_TEXT),
                            "sortorder" => new external_value(PARAM_TEXT),
                            "fullname" => new external_value(PARAM_TEXT),
                            "shortname" => new external_value(PARAM_TEXT),
                            "idnumber" => new external_value(PARAM_TEXT),
                            "summary" => new external_value(PARAM_TEXT),
                            "summaryformat" => new external_value(PARAM_TEXT),
                            "format" => new external_value(PARAM_TEXT),
                            "showgrades" => new external_value(PARAM_TEXT),
                            "newsitems" => new external_value(PARAM_TEXT),
                            "startdate" => new external_value(PARAM_TEXT),
                            "enddate" => new external_value(PARAM_TEXT),
                            "relativedatesmode" => new external_value(PARAM_TEXT),
                            "marker" => new external_value(PARAM_TEXT),
                            "maxbytes" => new external_value(PARAM_TEXT),
                            "legacyfiles" => new external_value(PARAM_TEXT),
                            "showreports" => new external_value(PARAM_TEXT),
                            "visible" => new external_value(PARAM_TEXT),
                            "visibleold" => new external_value(PARAM_TEXT),
                            "downloadcontent" => new external_value(PARAM_TEXT),
                            "groupmode" => new external_value(PARAM_TEXT),
                            "groupmodeforce" => new external_value(PARAM_TEXT),
                            "defaultgroupingid" => new external_value(PARAM_TEXT),
                            "lang" => new external_value(PARAM_TEXT),
                            "calendartype" => new external_value(PARAM_TEXT),
                            "theme" => new external_value(PARAM_TEXT),
                            "timecreated" => new external_value(PARAM_TEXT),
                            "timemodified" => new external_value(PARAM_TEXT),
                            "requested" => new external_value(PARAM_TEXT),
                            "enablecompletion" => new external_value(PARAM_TEXT),
                            "completionnotify" => new external_value(PARAM_TEXT),
                            "cacherev" => new external_value(PARAM_TEXT),
                            "originalcourseid" => new external_value(PARAM_TEXT),
                            "showactivitydates" => new external_value(PARAM_TEXT),
                            "showcompletionconditions" => new external_value(PARAM_TEXT)
                        )
                    )
                )
            )
        );
    }
}