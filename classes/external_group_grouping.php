<?php

namespace local_sync_schedule;

use external_api;
use external_function_parameters;
use external_single_structure;
use external_value;
use external_multiple_structure;

class external_group_grouping extends external_api {
    public static function get_grouping_group_parameters():external_function_parameters
    {
        return new external_function_parameters(
            array(
                'courseId' => new external_value(PARAM_INT, 'course id')
            )
        );
    }

    public static function get_grouping_group($courseId)
    {
        global $DB;

        return array_values($DB->get_records_sql(
            "SELECT mgg.* FROM mdl_groupings as mg inner join mdl_groupings_groups as mgg on mgg.groupingid = mg.id where mg.courseid = ". $courseId
        ));
    }

    public static function get_grouping_group_returns()
    {
        return new external_multiple_structure(
            new external_single_structure(
                array(
                    "id" => new external_value(PARAM_INT),
                    "groupingid" => new external_value(PARAM_INT),
                    "groupid" => new external_value(PARAM_INT),
                    "timeadded" => new external_value(PARAM_TEXT)
                )
            )
        );
    }
}

