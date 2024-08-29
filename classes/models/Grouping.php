<?php

namespace local_sync_schedule\models;

use Exception;
use stdClass;

class Grouping {
    private ?string $id; // json:id Optional
    private ?string $courseid; // json:courseid Optional
    private ?string $name; // json:name Optional
    private ?string $idnumber; // json:idnumber Optional
    private ?string $description; // json:description Optional
    private ?string $descriptionformat; // json:descriptionformat Optional
    private ?string $timecreated; // json:timecreated Optional
    private ?string $timemodified; // json:timemodified Optional
    private ?array $groups; // json:groups Optional

    /**
     * @param string|null $id
     * @param string|null $courseid
     * @param string|null $name
     * @param string|null $idnumber
     * @param string|null $description
     * @param string|null $descriptionformat
     * @param string|null $timecreated
     * @param string|null $timemodified
     * @param array|null $groups
     */
    public function __construct(?string $id, ?string $courseid, ?string $name, ?string $idnumber, ?string $description, ?string $descriptionformat, ?string $timecreated, ?string $timemodified, ?array $groups) {
        $this->id = $id;
        $this->courseid = $courseid;
        $this->name = $name;
        $this->idnumber = $idnumber;
        $this->description = $description;
        $this->descriptionformat = $descriptionformat;
        $this->timecreated = $timecreated;
        $this->timemodified = $timemodified;
        $this->groups = $groups;
    }

    /**
     * @param ?string $value
     * @throws Exception
     * @return ?string
     */
    public static function fromID(?string $value): ?string {
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
    public function toID(): ?string {
        if (Grouping::validateID($this->id))  {
            if (!is_null($this->id)) {
                return $this->id; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Grouping::id');
    }

    /**
     * @param string|null
     * @return bool
     * @throws Exception
     */
    public static function validateID(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:Grouping::id");
            }
        }
        return true;
    }

    /**
     * @return ?string
     */
    public function getID(): ?string {
        return $this->id;
    }

    /**
     * @param string|null
     * @throws Exception
     */
    public function setID(?string $value) {
        if (Grouping::validateID($value))  {
            $this->id = $value;
        }
    }

    /**
     * @return ?string
     */
    public static function sampleID(): ?string {
        return 'Grouping::id::31'; /*31:id*/
    }

    /**
     * @param ?string $value
     * @throws Exception
     * @return ?string
     */
    public static function fromCourseid(?string $value): ?string {
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
    public function toCourseid(): ?string {
        if (Grouping::validateCourseid($this->courseid))  {
            if (!is_null($this->courseid)) {
                return $this->courseid; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Grouping::courseid');
    }

    /**
     * @param string|null
     * @return bool
     * @throws Exception
     */
    public static function validateCourseid(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:Grouping::courseid");
            }
        }
        return true;
    }

    /**
     * @return ?string
     */
    public function getCourseid(): ?string {
        return $this->courseid;
    }

    /**
     * @param string|null
     * @throws Exception
     */
    public function setCourseid(?string $value) {
        if (Grouping::validateCourseid($value))  {
            $this->courseid = $value;
        }
    }

    /**
     * @return ?string
     */
    public static function sampleCourseid(): ?string {
        return 'Grouping::courseid::32'; /*32:courseid*/
    }

    /**
     * @param ?string $value
     * @throws Exception
     * @return ?string
     */
    public static function fromName(?string $value): ?string {
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
    public function toName(): ?string {
        if (Grouping::validateName($this->name))  {
            if (!is_null($this->name)) {
                return $this->name; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Grouping::name');
    }

    /**
     * @param string|null
     * @return bool
     * @throws Exception
     */
    public static function validateName(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:Grouping::name");
            }
        }
        return true;
    }

    /**
     * @return ?string
     */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * @param string|null
     * @throws Exception
     */
    public function setName(?string $value) {
        if (Grouping::validateName($value))  {
            $this->name = $value;
        }
    }

    /**
     * @return ?string
     */
    public static function sampleName(): ?string {
        return 'Grouping::name::33'; /*33:name*/
    }

    /**
     * @param ?string $value
     * @throws Exception
     * @return ?string
     */
    public static function fromIdnumber(?string $value): ?string {
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
    public function toIdnumber(): ?string {
        if (Grouping::validateIdnumber($this->idnumber))  {
            if (!is_null($this->idnumber)) {
                return $this->idnumber; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Grouping::idnumber');
    }

    /**
     * @param string|null
     * @return bool
     * @throws Exception
     */
    public static function validateIdnumber(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:Grouping::idnumber");
            }
        }
        return true;
    }

    /**
     * @return ?string
     */
    public function getIdnumber(): ?string {
        return $this->idnumber;
    }

    /**
     * @param string|null
     * @throws Exception
     */
    public function setIdnumber(?string $value) {
        if (Grouping::validateIdnumber($value))  {
            $this->idnumber = $value;
        }
    }

    /**
     * @return ?string
     */
    public static function sampleIdnumber(): ?string {
        return 'Grouping::idnumber::34'; /*34:idnumber*/
    }

    /**
     * @param ?string $value
     * @throws Exception
     * @return ?string
     */
    public static function fromDescription(?string $value): ?string {
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
    public function toDescription(): ?string {
        if (Grouping::validateDescription($this->description))  {
            if (!is_null($this->description)) {
                return $this->description; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Grouping::description');
    }

    /**
     * @param string|null
     * @return bool
     * @throws Exception
     */
    public static function validateDescription(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:Grouping::description");
            }
        }
        return true;
    }

    /**
     * @return ?string
     */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * @param string|null
     * @throws Exception
     */
    public function setDescription(?string $value) {
        if (Grouping::validateDescription($value))  {
            $this->description = $value;
        }
    }

    /**
     * @return ?string
     */
    public static function sampleDescription(): ?string {
        return 'Grouping::description::35'; /*35:description*/
    }

    /**
     * @param ?string $value
     * @throws Exception
     * @return ?string
     */
    public static function fromDescriptionformat(?string $value): ?string {
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
    public function toDescriptionformat(): ?string {
        if (Grouping::validateDescriptionformat($this->descriptionformat))  {
            if (!is_null($this->descriptionformat)) {
                return $this->descriptionformat; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Grouping::descriptionformat');
    }

    /**
     * @param string|null
     * @return bool
     * @throws Exception
     */
    public static function validateDescriptionformat(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:Grouping::descriptionformat");
            }
        }
        return true;
    }

    /**
     * @return ?string
     */
    public function getDescriptionformat(): ?string {
        return $this->descriptionformat;
    }

    /**
     * @param string|null
     * @throws Exception
     */
    public function setDescriptionformat(?string $value) {
        if (Grouping::validateDescriptionformat($value))  {
            $this->descriptionformat = $value;
        }
    }

    /**
     * @return ?string
     */
    public static function sampleDescriptionformat(): ?string {
        return 'Grouping::descriptionformat::36'; /*36:descriptionformat*/
    }

    /**
     * @param ?string $value
     * @throws Exception
     * @return ?string
     */
    public static function fromTimecreated(?string $value): ?string {
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
    public function toTimecreated(): ?string {
        if (Grouping::validateTimecreated($this->timecreated))  {
            if (!is_null($this->timecreated)) {
                return $this->timecreated; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Grouping::timecreated');
    }

    /**
     * @param string|null
     * @return bool
     * @throws Exception
     */
    public static function validateTimecreated(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:Grouping::timecreated");
            }
        }
        return true;
    }

    /**
     * @return ?string
     */
    public function getTimecreated(): ?string {
        return $this->timecreated;
    }

    /**
     * @param string|null
     * @throws Exception
     */
    public function setTimecreated(?string $value) {
        if (Grouping::validateTimecreated($value))  {
            $this->timecreated = $value;
        }
    }

    /**
     * @return ?string
     */
    public static function sampleTimecreated(): ?string {
        return 'Grouping::timecreated::37'; /*37:timecreated*/
    }

    /**
     * @param ?string $value
     * @throws Exception
     * @return ?string
     */
    public static function fromTimemodified(?string $value): ?string {
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
    public function toTimemodified(): ?string {
        if (Grouping::validateTimemodified($this->timemodified))  {
            if (!is_null($this->timemodified)) {
                return $this->timemodified; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Grouping::timemodified');
    }

    /**
     * @param string|null
     * @return bool
     * @throws Exception
     */
    public static function validateTimemodified(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:Grouping::timemodified");
            }
        }
        return true;
    }

    /**
     * @return ?string
     */
    public function getTimemodified(): ?string {
        return $this->timemodified;
    }

    /**
     * @param string|null
     * @throws Exception
     */
    public function setTimemodified(?string $value) {
        if (Grouping::validateTimemodified($value))  {
            $this->timemodified = $value;
        }
    }

    /**
     * @return ?string
     */
    public static function sampleTimemodified(): ?string {
        return 'Grouping::timemodified::38'; /*38:timemodified*/
    }

    /**
     * @param ?array $value
     * @throws Exception
     * @return ?array
     */
    public static function fromGroups(?array $value): ?array {
        if (!is_null($value)) {
            return  array_map(function ($value) {
                return $value; /*any*/
            }, $value);
        } else {
            return null;
        }
    }

    /**
     * @throws Exception
     * @return ?array
     */
    public function toGroups(): ?array {
        if (Grouping::validateGroups($this->groups))  {
            if (!is_null($this->groups)) {
                return array_map(function ($value) {
                    return $value; /*any*/
                }, $this->groups);
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Grouping::groups');
    }

    /**
     * @param array|null
     * @return bool
     * @throws Exception
     */
    public static function validateGroups(?array $value): bool {
        if (!is_null($value)) {
            if (!is_array($value)) {
                throw new Exception("Attribute Error:Grouping::groups");
            }
        }
        return true;
    }

    /**
     * @return ?array
     */
    public function getGroups(): ?array {
        return $this->groups;
    }

    /**
     * @param array|null
     * @throws Exception
     */
    public function setGroups(?array $value) {
        if (Grouping::validateGroups($value))  {
            $this->groups = $value;
        }
    }

    /**
     * @return ?array
     */
    public static function sampleGroups(): ?array {
        return  array(
            'AnyType::Grouping::::39'/*39:*/
        ); /* 39:groups*/
    }

    /**
     * @throws Exception
     * @return bool
     */
    public function validate(): bool {
        return Grouping::validateID($this->id)
            || Grouping::validateCourseid($this->courseid)
            || Grouping::validateName($this->name)
            || Grouping::validateIdnumber($this->idnumber)
            || Grouping::validateDescription($this->description)
            || Grouping::validateDescriptionformat($this->descriptionformat)
            || Grouping::validateTimecreated($this->timecreated)
            || Grouping::validateTimemodified($this->timemodified)
            || Grouping::validateGroups($this->groups);
    }

    /**
     * @return stdClass
     * @throws Exception
     */
    public function to(): stdClass  {
        $out = new stdClass();
        $out->{'id'} = $this->toID();
        $out->{'courseid'} = $this->toCourseid();
        $out->{'name'} = $this->toName();
        $out->{'idnumber'} = $this->toIdnumber();
        $out->{'description'} = $this->toDescription();
        $out->{'descriptionformat'} = $this->toDescriptionformat();
        $out->{'timecreated'} = $this->toTimecreated();
        $out->{'timemodified'} = $this->toTimemodified();
        $out->{'groups'} = $this->toGroups();
        return $out;
    }

    /**
     * @param stdClass $obj
     * @return Grouping
     * @throws Exception
     */
    public static function from(stdClass $obj): Grouping {
        return new Grouping(
            Grouping::fromID($obj->{'id'})
            ,Grouping::fromCourseid($obj->{'courseid'})
            ,Grouping::fromName($obj->{'name'})
            ,Grouping::fromIdnumber($obj->{'idnumber'})
            ,Grouping::fromDescription($obj->{'description'})
            ,Grouping::fromDescriptionformat($obj->{'descriptionformat'})
            ,Grouping::fromTimecreated($obj->{'timecreated'})
            ,Grouping::fromTimemodified($obj->{'timemodified'})
            ,Grouping::fromGroups($obj->{'groups'})
        );
    }

    /**
     * @return Grouping
     */
    public static function sample(): Grouping {
        return new Grouping(
            Grouping::sampleID()
            ,Grouping::sampleCourseid()
            ,Grouping::sampleName()
            ,Grouping::sampleIdnumber()
            ,Grouping::sampleDescription()
            ,Grouping::sampleDescriptionformat()
            ,Grouping::sampleTimecreated()
            ,Grouping::sampleTimemodified()
            ,Grouping::sampleGroups()
        );
    }
}

