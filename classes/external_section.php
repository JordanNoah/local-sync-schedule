<?php

namespace local_sync_schedule;

use external_api;
use external_function_parameters;
use external_single_structure;
use external_value;
use dml_exception;
use external_multiple_structure;
use local_sync_schedule\models\CourseSection;

class external_section extends external_api
{
    public static function get_section_counter_parameters():external_function_parameters
    {
        return new external_function_parameters(
            array(
                'courseId' => new external_value(PARAM_TEXT)
            )
        );
    }

    /**
     * @throws \moodle_exception
     * @throws dml_exception
     */
    public static function get_section_counter($courseId): array
    {
        $limit = 10;

        $course = get_course($courseId);
        $courseSection = get_fast_modinfo($course);
        $sections = $courseSection->get_section_info_all();

        return array(
            'totalSection' => ceil(count($sections) / $limit)
        );
    }

    public static function get_section_counter_returns()
    {
        return new external_single_structure(
            array(
                'totalSection' => new external_value(PARAM_INT)
            )
        );
    }

    public static function get_section_data_parameters():external_function_parameters
    {
        return new external_function_parameters(
            array(
                'courseId' => new external_value(PARAM_INT),
                'page' => new external_value(PARAM_INT)
            )
        );
    }

    /**
     * @throws dml_exception
     * @throws \moodle_exception
     * @throws \Exception
     */
    public static function get_section_data($courseId, $page)
    {
        $limit = 1;

        $offset = $limit * $page;
        $course = get_course($courseId);
        $courseSection = get_fast_modinfo($course);
        $sections = $courseSection->get_section_info_all();
        $totalPages = ceil(count($sections) / $limit);
        $sectionsToReturn = array();

        $course = get_course($courseId);
        $courseSection = get_fast_modinfo($course);

        $first_number = ($page - 1) * $limit;
        $last_number = ($page - 1) * $limit + $limit;

        for ($i = $first_number; $i < $last_number; $i++) {
            $section = $courseSection->get_section_info($sections[$i]->section);
            $sectionToReturn = new CourseSection($section->id,$section->name,$section->section,$section->course);
            $sectionsToReturn[] = $sectionToReturn->to();
        }

        return array(
            "offset" => $offset,
            "pagesMissing" => $totalPages - ($page + 1),
            "totalPages" => $totalPages,
            "sections" => $sectionsToReturn
        );
    }

    public static function get_section_data_returns():external_single_structure
    {
        return new external_single_structure(
            array(
                "offset" => new external_value(PARAM_INT),
                "pagesMissing" => new external_value(PARAM_INT),
                "totalPages" => new external_value(PARAM_INT),
                "sections" => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            "id" => new external_value(PARAM_INT),
                            "name" => new external_value(PARAM_TEXT),
                            "section" => new external_value(PARAM_INT),
                            "course" => new external_value(PARAM_INT)
                        )
                    )
                )
            )
        );
    }
}