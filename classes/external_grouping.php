<?php

namespace local_sync_schedule;

use external_api;
use external_function_parameters;
use external_single_structure;
use external_value;
use dml_exception;
use external_multiple_structure;

class external_grouping extends external_api
{
    public static function get_grouping_counter_parameters():external_function_parameters
    {
        return new external_function_parameters(
            array(
                'courseId' => new external_value(PARAM_INT)
            )
        );
    }

    public static function get_grouping_counter($courseId)
    {
        global $DB;
        $limit = 10;

        return array(
            'totalGroupings' => ceil($DB->get_record_sql("SELECT COUNT(*) AS 'total_rows' FROM mdl_groupings WHERE courseid = ".$courseId)->total_rows / $limit)
        );
    }

    public static function get_grouping_counter_returns()
    {
        return new external_single_structure(
            array(
                'totalGroupings' => new external_value(PARAM_INT)
            )
        );
    }

    public static function get_grouping_data_parameters():external_function_parameters
    {
        return new external_function_parameters(
            array(
                'courseId' => new external_value(PARAM_INT),
                'page' => new external_value(PARAM_INT)
            )
        );
    }

    public static function get_grouping_data($courseId, $page)
    {
        global $DB;

        $limit = 10;
        $offset = $limit * $page;

        $totalPages = ceil($DB->get_record_sql("SELECT COUNT(*) AS 'total_rows' FROM mdl_groupings WHERE courseid = ".$courseId)->total_rows / $limit);

        return array(
            "offset" => $offset,
            "pageMissing" => $totalPages - ($page + 1),
            "totalPages" => $totalPages,
            "groupings" => array_values($DB->get_records_sql("SELECT * FROM mdl_groupings LIMIT 10 OFFSET ".$offset))
        );
    }

    public static function get_grouping_data_returns()
    {
        return new external_single_structure(
            array(
                "offset" => new external_value(PARAM_INT),
                "pageMissing" => new external_value(PARAM_INT),
                "totalPages" => new external_value(PARAM_INT),
                "groupings" => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            "id" => new external_value(PARAM_TEXT),
                            "courseid" => new external_value(PARAM_TEXT),
                            "name" => new external_value(PARAM_TEXT),
                            "idnumber" => new external_value(PARAM_TEXT),
                            "description" => new external_value(PARAM_TEXT),
                            "descriptionformat" => new external_value(PARAM_TEXT),
                            "configdata" => new external_value(PARAM_TEXT),
                            "timecreated" => new external_value(PARAM_TEXT),
                            "timemodified" => new external_value(PARAM_TEXT)
                        )
                    )
                )
            )
        );
    }
}