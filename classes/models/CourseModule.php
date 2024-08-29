<?php

namespace local_sync_schedule\models;

use Exception;
use stdClass;

class CourseModule {
    private int $id; // json:id Required
    private int $courseId; // json:courseId Required
    private int $sectionID; // json:section_id Required
    private string $name; // json:name Required
    private string $type; // json:type Required
    private string $url; // json:url Required
    private ?string $startDate; // json:start_date Required
    private ?string $endDate; // json:end_date Required

    /**
     * @param int $id
     * @param int $sectionID
     * @param string $name
     * @param string $type
     * @param string $url
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct(int $id, int $courseId ,int $sectionID, string $name, string $type, string $url, ?string $startDate, ?string $endDate) {
        $this->id = $id;
        $this->courseId = $courseId;
        $this->sectionID = $sectionID;
        $this->name = $name;
        $this->type = $type;
        $this->url = $url;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    /**
     * @param int $value
     * @throws Exception
     * @return int
     */
    public static function fromID(int $value): int {
        return $value; /*int*/
    }

    /**
     * @throws Exception
     * @return int
     */
    public function toID(): int {
        if (CourseModule::validateID($this->id))  {
            return $this->id; /*int*/
        }
        throw new Exception('never get to this CourseModule::id');
    }

    /**
     * @param int
     * @return bool
     * @throws Exception
     */
    public static function validateID(int $value): bool {
        if (!is_integer($value)) {
            throw new Exception("Attribute Error:CourseModule::id");
        }
        return true;
    }

    /**
     * @return int
     */
    public function getID(): int {
        return $this->id;
    }

    /**
     * @param int
     * @throws Exception
     */
    public function setID(int $value) {
        if (CourseModule::validateID($value))  {
            $this->id = $value;
        }
    }

    /**
     * @return int
     */
    public static function sampleID(): int {
        return 31; /*31:id*/
    }

    public static function fromCourseId(int $value): int {
        return $value;
    }

    public function toCourseId(): int {
        if (CourseModule::validateCourseId($this->courseId)){
            return $this->courseId;
        }
        throw new Exception('never get to this CourseModule::courseId');
    }

    public function getCourseId(): int {
        return $this->courseId;
    }

    public function setCourseId(int $value) {
        if (CourseModule::validateCourseId($value)){
            $this->courseId = $value;
        }
    }

    public static function validateCourseId(int $value): bool {
        if (!is_integer($value)) {
            throw new Exception("Attribute Error:CourseModule::id");
        }
        return true;
    }

    public static function sampleCourseId(): int {
        return 31;
    }

    /**
     * @param int $value
     * @throws Exception
     * @return int
     */
    public static function fromSectionID(int $value): int {
        return $value; /*int*/
    }

    /**
     * @throws Exception
     * @return int
     */
    public function toSectionID(): int {
        if (CourseModule::validateSectionID($this->sectionID))  {
            return $this->sectionID; /*int*/
        }
        throw new Exception('never get to this CourseModule::sectionID');
    }

    /**
     * @param int
     * @return bool
     * @throws Exception
     */
    public static function validateSectionID(int $value): bool {
        if (!is_integer($value)) {
            throw new Exception("Attribute Error:CourseModule::sectionID");
        }
        return true;
    }

    /**
     * @return int
     */
    public function getSectionID(): int {
        return $this->sectionID;
    }

    /**
     * @param int
     * @throws Exception
     */
    public function setSectionID(int $value) {
        if (CourseModule::validateSectionID($value))  {
            $this->sectionID = $value;
        }
    }

    /**
     * @return int
     */
    public static function sampleSectionID(): int {
        return 32; /*32:sectionID*/
    }

    /**
     * @param string $value
     * @throws Exception
     * @return string
     */
    public static function fromName(string $value): string {
        return $value; /*string*/
    }

    /**
     * @throws Exception
     * @return string
     */
    public function toName(): string {
        if (CourseModule::validateName($this->name))  {
            return $this->name; /*string*/
        }
        throw new Exception('never get to this CourseModule::name');
    }

    /**
     * @param string
     * @return bool
     * @throws Exception
     */
    public static function validateName(string $value): bool {
        if (!is_string($value)) {
            throw new Exception("Attribute Error:CourseModule::name");
        }
        return true;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @param string
     * @throws Exception
     */
    public function setName(string $value) {
        if (CourseModule::validateName($value))  {
            $this->name = $value;
        }
    }

    /**
     * @return string
     */
    public static function sampleName(): string {
        return 'CourseModule::name::33'; /*33:name*/
    }

    /**
     * @param string $value
     * @throws Exception
     * @return string
     */
    public static function fromType(string $value): string {
        return $value; /*string*/
    }

    /**
     * @throws Exception
     * @return string
     */
    public function toType(): string {
        if (CourseModule::validateType($this->type))  {
            return $this->type; /*string*/
        }
        throw new Exception('never get to this CourseModule::type');
    }

    /**
     * @param string
     * @return bool
     * @throws Exception
     */
    public static function validateType(string $value): bool {
        if (!is_string($value)) {
            throw new Exception("Attribute Error:CourseModule::type");
        }
        return true;
    }

    /**
     * @return string
     */
    public function getType(): string {
        return $this->type;
    }

    /**
     * @param string
     * @throws Exception
     */
    public function setType(string $value) {
        if (CourseModule::validateType($value))  {
            $this->type = $value;
        }
    }

    /**
     * @return string
     */
    public static function sampleType(): string {
        return 'CourseModule::type::34'; /*34:type*/
    }

    /**
     * @param string $value
     * @throws Exception
     * @return string
     */
    public static function fromURL(string $value): string {
        return $value; /*string*/
    }

    /**
     * @throws Exception
     * @return string
     */
    public function toURL(): string {
        if (CourseModule::validateURL($this->url))  {
            return $this->url; /*string*/
        }
        throw new Exception('never get to this CourseModule::url');
    }

    /**
     * @param string
     * @return bool
     * @throws Exception
     */
    public static function validateURL(string $value): bool {
        if (!is_string($value)) {
            throw new Exception("Attribute Error:CourseModule::url");
        }
        return true;
    }

    /**
     * @return string
     */
    public function getURL(): string {
        return $this->url;
    }

    /**
     * @param string
     * @throws Exception
     */
    public function setURL(string $value) {
        if (CourseModule::validateURL($value))  {
            $this->url = $value;
        }
    }

    /**
     * @return string
     */
    public static function sampleURL(): string {
        return 'CourseModule::url::35'; /*35:url*/
    }

    /**
     * @param string $value
     * @throws Exception
     * @return string
     */
    public static function fromStartDate(?string $value): ?string {
        if (!is_null($value)) {
            return $value; /*string*/
        } else {
            return null;
        }
    }

    /**
     * @throws Exception
     * @return string
     */
    public function toStartDate(): ?string {
        if (Coursemodule::validateStartDate($this->startDate))  {
            if (!is_null($this->startDate)) {
                return $this->startDate; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Coursemodule::startDate');
    }

    /**
     * @param string
     * @return bool
     * @throws Exception
     */
    public static function validateStartDate(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:Coursemodule::startDate");
            }
        }
        return true;
    }

    /**
     * @return string
     */
    public function getStartDate(): ?string {
        return $this->startDate;
    }

    /**
     * @param string
     * @throws Exception
     */
    public function setStartDate(?string $value) {
        if (Coursemodule::validateStartDate($value))  {
            $this->startDate = $value;
        }
    }

    /**
     * @return string
     */
    public static function sampleStartDate(): ?string {
        return 'Coursemodule::startDate::36'; /*36:startDate*/
    }

    /**
     * @param string $value
     * @throws Exception
     * @return string
     */
    public static function fromEndDate(?string $value): ?string {
        if (!is_null($value)) {
            return $value; /*string*/
        } else {
            return null;
        }
    }

    /**
     * @throws Exception
     * @return ?string
     */
    public function toEndDate(): ?string {
        if (Coursemodule::validateEndDate($this->endDate))  {
            if (!is_null($this->endDate)) {
                return $this->endDate; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Coursemodule::endDate');
    }

    /**
     * @param string|null
     * @return bool
     * @throws Exception
     */
    public static function validateEndDate(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:Coursemodule::endDate");
            }
        }
        return true;
    }

    /**
     * @return ?string
     */
    public function getEndDate(): ?string {
        return $this->endDate;
    }

    /**
     * @param string|null
     * @throws Exception
     */
    public function setEndDate(?string $value) {
        if (Coursemodule::validateEndDate($value))  {
            $this->endDate = $value;
        }
    }

    /**
     * @return ?string
     */
    public static function sampleEndDate(): ?string {
        return 'Coursemodule::endDate::37'; /*37:endDate*/
    }

    /**
     * @throws Exception
     * @return bool
     */
    public function validate(): bool {
        return CourseModule::validateID($this->id)
            || CourseModule::validateCourseId($this->courseId)
            || CourseModule::validateSectionID($this->sectionID)
            || CourseModule::validateName($this->name)
            || CourseModule::validateType($this->type)
            || CourseModule::validateURL($this->url)
            || CourseModule::validateStartDate($this->startDate)
            || CourseModule::validateEndDate($this->endDate);
    }

    /**
     * @return stdClass
     * @throws Exception
     */
    public function to(): stdClass  {
        $out = new stdClass();
        $out->{'id'} = $this->toID();
        $out->{'courseId'} = $this->toCourseId();
        $out->{'sectionId'} = $this->toSectionID();
        $out->{'name'} = $this->toName();
        $out->{'type'} = $this->toType();
        $out->{'url'} = $this->toURL();
        $out->{'startDate'} = $this->toStartDate();
        $out->{'endDate'} = $this->toEndDate();
        return $out;
    }

    /**
     * @param stdClass $obj
     * @return CourseModule
     * @throws Exception
     */
    public static function from(stdClass $obj): CourseModule {
        return new CourseModule(
            CourseModule::fromID($obj->{'id'})
            ,CourseModule::fromCourseId($obj->{'courseId'})
            ,CourseModule::fromSectionID($obj->{'section_id'})
            ,CourseModule::fromName($obj->{'name'})
            ,CourseModule::fromType($obj->{'type'})
            ,CourseModule::fromURL($obj->{'url'})
            ,CourseModule::fromStartDate($obj->{'start_date'})
            ,CourseModule::fromEndDate($obj->{'end_date'})
        );
    }

    /**
     * @return CourseModule
     */
    public static function sample(): CourseModule {
        return new CourseModule(
            CourseModule::sampleID()
            ,CourseModule::sampleCourseId()
            ,CourseModule::sampleSectionID()
            ,CourseModule::sampleName()
            ,CourseModule::sampleType()
            ,CourseModule::sampleURL()
            ,CourseModule::sampleStartDate()
            ,CourseModule::sampleEndDate()
        );
    }
}
