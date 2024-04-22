<?php

namespace local_sync_schedule;

use external_api;
use external_function_parameters;
use external_single_structure;
use external_value;
use dml_exception;
use external_multiple_structure;

class external_group extends external_api
{
    public static function get_group_counter_parameters():external_function_parameters
    {
        return new external_function_parameters(
            array(
                'courseId' => new external_value(PARAM_TEXT)
            )
        );
    }

    public static function get_group_counter($courseId)
    {
        global $DB;
        $limit = 10;

        return array(
            'totalGroups' => ceil($DB->get_record_sql("SELECT COUNT(*) AS 'total_rows' FROM mdl_groups WHERE courseid = ".$courseId)->total_rows / $limit)
        );
    }

    public static function get_group_counter_returns()
    {
        return new external_single_structure(
            array(
                'totalGroups' => new external_value(PARAM_INT)
            )
        );
    }

    public static function get_group_data_parameters():external_function_parameters
    {
        return new external_function_parameters(
            array(
                'courseId' => new external_value(PARAM_INT),
                'page' => new external_value(PARAM_INT)
            )
        );
    }

    public static function get_group_data($courseId, $page):array
    {
        global $DB;

        $limit = 10;
        $offset = $limit * $page;

        $totalPages = ceil($DB->get_record_sql("SELECT COUNT(*) AS 'total_rows' FROM mdl_groups WHERE courseid = ".$courseId)->total_rows / $limit);

        return array(
            "offset" => $offset,
            "pageMissing" => $totalPages - ($page + 1),
            "totalPages" => $totalPages,
            "groups" => array_values($DB->get_records_sql("SELECT * from mdl_groups LIMIT 10 OFFSET ".$offset))
        );
    }

    public static function get_group_data_returns():external_single_structure
    {
        return new external_single_structure(
            array(
                "offset" => new external_value(PARAM_INT),
                "pageMissing" => new external_value(PARAM_INT),
                "totalPages" => new external_value(PARAM_INT),
                "groups" => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            "id" => new external_value(PARAM_TEXT),
                            "courseid" => new external_value(PARAM_TEXT),
                            "idnumber" => new external_value(PARAM_TEXT),
                            "name" => new external_value(PARAM_TEXT),
                            "description" => new external_value(PARAM_TEXT),
                            "descriptionformat" => new external_value(PARAM_TEXT),
                            "enrolmentkey" => new external_value(PARAM_TEXT),
                            "picture" => new external_value(PARAM_TEXT),
                            "timecreated" => new external_value(PARAM_TEXT),
                            "timemodified" => new external_value(PARAM_TEXT)
                        )
                    )
                )
            )
        );
    }
}