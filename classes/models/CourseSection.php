<?php

namespace local_sync_schedule\models;

use Exception;
use stdClass;


class CourseSection
{
    private int $id; // json:id Required
    private ?string $name; // json:name Required
    private int $section; // json:section Required
    private int $course; // json:course Required

    /**
     * @param int $id
     * @param string|null $name
     * @param int $section
     * @param int $course
     */
    public function __construct(int $id, ?string $name, int $section, int $course)
    {
        $this->id = $id;
        $this->name = $name;
        $this->section = $section;
        $this->course = $course;
    }

    /**
     * @param int $value
     * @return int
     * @throws Exception
     */
    public static function fromID(int $value): int
    {
        return $value; /*int*/
    }

    /**
     * @return int
     * @throws Exception
     */
    public function toID(): int
    {
        if (CourseSection::validateID($this->id)) {
            return $this->id; /*int*/
        }
        throw new Exception('never get to this CourseSection::id');
    }

    /**
     * @param int $value
     * @return bool
     * @throws Exception
     */
    public static function validateID(int $value): bool
    {
        return true;
    }

    /**
     * @return int
     */
    public function getID(): int
    {
        return $this->id;
    }

    /**
     * @param int $value
     * @throws Exception
     */
    public function setID(int $value)
    {
        if (CourseSection::validateID($value)) {
            $this->id = $value;
        }
    }

    /**
     * @return int
     */
    public static function sampleID(): int
    {
        return 31; /*31:id*/
    }

    /**
     * @param string $value
     * @return string
     * @throws Exception
     */
    public static function fromName(string $value): string
    {
        return $value; /*string*/
    }

    /**
     * @return string
     * @throws Exception
     */
    public function toName(): ?string
    {
        if (CourseSection::validateName($this->name)) {
            return $this->name; /*string*/
        }
        throw new Exception('never get to this CourseSection::name');
    }

    /**
     * @param string $value
     * @return bool
     * @throws Exception
     */
    public static function validateName(?string $value): bool
    {
        if ($value === null) {
            return true;
        }

        return strlen($value) > 0;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $value
     * @throws Exception
     */
    public function setName(string $value)
    {
        if (CourseSection::validateName($value)) {
            $this->name = $value;
        }
    }

    /**
     * @return string
     */
    public static function sampleName(): string
    {
        return 'CourseSection::name::32'; /*32:name*/
    }

    /**
     * @param int $value
     * @return int
     * @throws Exception
     */
    public static function fromSection(int $value): int
    {
        return $value; /*int*/
    }

    /**
     * @return int
     * @throws Exception
     */
    public function toSection(): int
    {
        if (CourseSection::validateSection($this->section)) {
            return $this->section; /*int*/
        }
        throw new Exception('never get to this CourseSection::section');
    }

    /**
     * @param int $value
     * @return bool
     * @throws Exception
     */
    public static function validateSection(int $value): bool
    {
        return true;
    }

    /**
     * @return int
     */
    public function getSection(): int
    {
        return $this->section;
    }

    /**
     * @param int $value
     * @throws Exception
     */
    public function setSection(int $value)
    {
        if (CourseSection::validateSection($value)) {
            $this->section = $value;
        }
    }

    /**
     * @return int
     */
    public static function sampleSection(): int
    {
        return 33; /*33:section*/
    }

    /**
     * @param int $value
     * @return int
     * @throws Exception
     */
    public static function fromCourse(int $value): int
    {
        return $value; /*int*/
    }

    /**
     * @return int
     * @throws Exception
     */
    public function toCourse(): int
    {
        if (CourseSection::validateCourse($this->course)) {
            return $this->course; /*int*/
        }
        throw new Exception('never get to this CourseSection::course');
    }

    /**
     * @param int $value
     * @return bool
     * @throws Exception
     */
    public static function validateCourse(int $value): bool
    {
        return true;
    }

    /**
     * @return int
     */
    public function getCourse(): int
    {
        return $this->course;
    }

    /**
     * @param int $value
     * @throws Exception
     */
    public function setCourse(int $value)
    {
        if (CourseSection::validateCourse($value)) {
            $this->course = $value;
        }
    }

    /**
     * @return int
     */
    public static function sampleCourse(): int
    {
        return 34; /*34:course*/
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function validate(): bool
    {
        return CourseSection::validateID($this->id)
            || CourseSection::validateName($this->name)
            || CourseSection::validateSection($this->section)
            || CourseSection::validateCourse($this->course);
    }

    /**
     * @return stdClass
     * @throws Exception
     */
    public function to(): stdClass
    {
        error_log($this->name);
        $out = new stdClass();
        $out->{'id'} = $this->toID();
        $out->{'name'} = $this->toName();
        $out->{'section'} = $this->toSection();
        $out->{'course'} = $this->toCourse();
        return $out;
    }

    /**
     * @param stdClass $obj
     * @return CourseSection
     * @throws Exception
     */
    public static function from(stdClass $obj): CourseSection
    {
        return new CourseSection(
            CourseSection::fromID($obj->{'id'})
            , CourseSection::fromName($obj->{'name'})
            , CourseSection::fromSection($obj->{'section'})
            , CourseSection::fromCourse($obj->{'course'})
        );
    }

    /**
     * @return CourseSection
     */
    public static function sample(): CourseSection
    {
        return new CourseSection(
            CourseSection::sampleID()
            , CourseSection::sampleName()
            , CourseSection::sampleSection()
            , CourseSection::sampleCourse()
        );
    }
}