<?php

namespace local_sync_schedule\models;

use Exception;
use stdClass;

class Group {
    private ?string $id; // json:id Optional
    private ?string $courseid; // json:courseid Optional
    private ?string $idnumber; // json:idnumber Optional
    private ?string $name; // json:name Optional
    private ?string $description; // json:description Optional
    private ?string $descriptionformat; // json:descriptionformat Optional
    private ?string $enrolmentkey; // json:enrolmentkey Optional
    private ?string $picture; // json:picture Optional
    private ?string $timecreated; // json:timecreated Optional
    private ?string $timemodified; // json:timemodified Optional

    /**
     * @param string|null $id
     * @param string|null $courseid
     * @param string|null $idnumber
     * @param string|null $name
     * @param string|null $description
     * @param string|null $descriptionformat
     * @param string|null $enrolmentkey
     * @param string|null $picture
     * @param string|null $timecreated
     * @param string|null $timemodified
     */
    public function __construct(?string $id, ?string $courseid, ?string $idnumber, ?string $name, ?string $description, ?string $descriptionformat, ?string $enrolmentkey, ?string $picture, ?string $timecreated, ?string $timemodified) {
        $this->id = $id;
        $this->courseid = $courseid;
        $this->idnumber = $idnumber;
        $this->name = $name;
        $this->description = $description;
        $this->descriptionformat = $descriptionformat;
        $this->enrolmentkey = $enrolmentkey;
        $this->picture = $picture;
        $this->timecreated = $timecreated;
        $this->timemodified = $timemodified;
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
        if (Group::validateID($this->id))  {
            if (!is_null($this->id)) {
                return $this->id; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Group::id');
    }

    /**
     * @param string|null $value
     * @return bool
     * @throws Exception
     */
    public static function validateID(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:Group::id");
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
     * @param string|null $value
     * @throws Exception
     */
    public function setID(?string $value) {
        if (Group::validateID($value))  {
            $this->id = $value;
        }
    }

    /**
     * @return ?string
     */
    public static function sampleID(): ?string {
        return 'Group::id::31'; /*31:id*/
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
        if (Group::validateCourseid($this->courseid))  {
            if (!is_null($this->courseid)) {
                return $this->courseid; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Group::courseid');
    }

    /**
     * @param string|null $value
     * @return bool
     * @throws Exception
     */
    public static function validateCourseid(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:Group::courseid");
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
     * @param string|null $value
     * @throws Exception
     */
    public function setCourseid(?string $value) {
        if (Group::validateCourseid($value))  {
            $this->courseid = $value;
        }
    }

    /**
     * @return ?string
     */
    public static function sampleCourseid(): ?string {
        return 'Group::courseid::32'; /*32:courseid*/
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
        if (Group::validateIdnumber($this->idnumber))  {
            if (!is_null($this->idnumber)) {
                return $this->idnumber; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Group::idnumber');
    }

    /**
     * @param string|null $value
     * @return bool
     * @throws Exception
     */
    public static function validateIdnumber(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:Group::idnumber");
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
     * @param string|null $value
     * @throws Exception
     */
    public function setIdnumber(?string $value) {
        if (Group::validateIdnumber($value))  {
            $this->idnumber = $value;
        }
    }

    /**
     * @return ?string
     */
    public static function sampleIdnumber(): ?string {
        return 'Group::idnumber::33'; /*33:idnumber*/
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
        if (Group::validateName($this->name))  {
            if (!is_null($this->name)) {
                return $this->name; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Group::name');
    }

    /**
     * @param string|null $value
     * @return bool
     * @throws Exception
     */
    public static function validateName(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:Group::name");
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
     * @param string|null $value
     * @throws Exception
     */
    public function setName(?string $value) {
        if (Group::validateName($value))  {
            $this->name = $value;
        }
    }

    /**
     * @return ?string
     */
    public static function sampleName(): ?string {
        return 'Group::name::34'; /*34:name*/
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
        if (Group::validateDescription($this->description))  {
            if (!is_null($this->description)) {
                return $this->description; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Group::description');
    }

    /**
     * @param string|null $value
     * @return bool
     * @throws Exception
     */
    public static function validateDescription(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:Group::description");
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
     * @param string|null $value
     * @throws Exception
     */
    public function setDescription(?string $value) {
        if (Group::validateDescription($value))  {
            $this->description = $value;
        }
    }

    /**
     * @return ?string
     */
    public static function sampleDescription(): ?string {
        return 'Group::description::35'; /*35:description*/
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
        if (Group::validateDescriptionformat($this->descriptionformat))  {
            if (!is_null($this->descriptionformat)) {
                return $this->descriptionformat; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Group::descriptionformat');
    }

    /**
     * @param string|null $value
     * @return bool
     * @throws Exception
     */
    public static function validateDescriptionformat(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:Group::descriptionformat");
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
     * @param string|null $value
     * @throws Exception
     */
    public function setDescriptionformat(?string $value) {
        if (Group::validateDescriptionformat($value))  {
            $this->descriptionformat = $value;
        }
    }

    /**
     * @return ?string
     */
    public static function sampleDescriptionformat(): ?string {
        return 'Group::descriptionformat::36'; /*36:descriptionformat*/
    }

    /**
     * @param ?string $value
     * @throws Exception
     * @return ?string
     */
    public static function fromEnrolmentkey(?string $value): ?string {
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
    public function toEnrolmentkey(): ?string {
        if (Group::validateEnrolmentkey($this->enrolmentkey))  {
            if (!is_null($this->enrolmentkey)) {
                return $this->enrolmentkey; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Group::enrolmentkey');
    }

    /**
     * @param string|null $value
     * @return bool
     * @throws Exception
     */
    public static function validateEnrolmentkey(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:Group::enrolmentkey");
            }
        }
        return true;
    }

    /**
     * @return ?string
     */
    public function getEnrolmentkey(): ?string {
        return $this->enrolmentkey;
    }

    /**
     * @param string|null $value
     * @throws Exception
     */
    public function setEnrolmentkey(?string $value) {
        if (Group::validateEnrolmentkey($value))  {
            $this->enrolmentkey = $value;
        }
    }

    /**
     * @return ?string
     */
    public static function sampleEnrolmentkey(): ?string {
        return 'Group::enrolmentkey::37'; /*37:enrolmentkey*/
    }

    /**
     * @param ?string $value
     * @throws Exception
     * @return ?string
     */
    public static function fromPicture(?string $value): ?string {
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
    public function toPicture(): ?string {
        if (Group::validatePicture($this->picture))  {
            if (!is_null($this->picture)) {
                return $this->picture; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Group::picture');
    }

    /**
     * @param string|null $value
     * @return bool
     * @throws Exception
     */
    public static function validatePicture(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:Group::picture");
            }
        }
        return true;
    }

    /**
     * @return ?string
     */
    public function getPicture(): ?string {
        return $this->picture;
    }

    /**
     * @param string|null $value
     * @throws Exception
     */
    public function setPicture(?string $value) {
        if (Group::validatePicture($value))  {
            $this->picture = $value;
        }
    }

    /**
     * @return ?string
     */
    public static function samplePicture(): ?string {
        return 'Group::picture::38'; /*38:picture*/
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
        if (Group::validateTimecreated($this->timecreated))  {
            if (!is_null($this->timecreated)) {
                return $this->timecreated; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Group::timecreated');
    }

    /**
     * @param string|null $value
     * @return bool
     * @throws Exception
     */
    public static function validateTimecreated(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:Group::timecreated");
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
     * @param string|null $value
     * @throws Exception
     */
    public function setTimecreated(?string $value) {
        if (Group::validateTimecreated($value))  {
            $this->timecreated = $value;
        }
    }

    /**
     * @return ?string
     */
    public static function sampleTimecreated(): ?string {
        return 'Group::timecreated::39'; /*39:timecreated*/
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
        if (Group::validateTimemodified($this->timemodified))  {
            if (!is_null($this->timemodified)) {
                return $this->timemodified; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Group::timemodified');
    }

    /**
     * @param string|null $value
     * @return bool
     * @throws Exception
     */
    public static function validateTimemodified(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:Group::timemodified");
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
     * @param string|null $value
     * @throws Exception
     */
    public function setTimemodified(?string $value) {
        if (Group::validateTimemodified($value))  {
            $this->timemodified = $value;
        }
    }

    /**
     * @return ?string
     */
    public static function sampleTimemodified(): ?string {
        return 'Group::timemodified::40'; /*40:timemodified*/
    }

    /**
     * @throws Exception
     * @return bool
     */
    public function validate(): bool {
        return Group::validateID($this->id)
            || Group::validateCourseid($this->courseid)
            || Group::validateIdnumber($this->idnumber)
            || Group::validateName($this->name)
            || Group::validateDescription($this->description)
            || Group::validateDescriptionformat($this->descriptionformat)
            || Group::validateEnrolmentkey($this->enrolmentkey)
            || Group::validatePicture($this->picture)
            || Group::validateTimecreated($this->timecreated)
            || Group::validateTimemodified($this->timemodified);
    }

    /**
     * @return stdClass
     * @throws Exception
     */
    public function to(): stdClass  {
        $out = new stdClass();
        $out->{'id'} = $this->toID();
        $out->{'courseid'} = $this->toCourseid();
        $out->{'idnumber'} = $this->toIdnumber();
        $out->{'name'} = $this->toName();
        $out->{'description'} = $this->toDescription();
        $out->{'descriptionformat'} = $this->toDescriptionformat();
        $out->{'enrolmentkey'} = $this->toEnrolmentkey();
        $out->{'picture'} = $this->toPicture();
        $out->{'timecreated'} = $this->toTimecreated();
        $out->{'timemodified'} = $this->toTimemodified();
        return $out;
    }

    /**
     * @param stdClass $obj
     * @return Group
     * @throws Exception
     */
    public static function from(stdClass $obj): Group {
        return new Group(
            Group::fromID($obj->{'id'})
            ,Group::fromCourseid($obj->{'courseid'})
            ,Group::fromIdnumber($obj->{'idnumber'})
            ,Group::fromName($obj->{'name'})
            ,Group::fromDescription($obj->{'description'})
            ,Group::fromDescriptionformat($obj->{'descriptionformat'})
            ,Group::fromEnrolmentkey($obj->{'enrolmentkey'})
            ,Group::fromPicture($obj->{'picture'})
            ,Group::fromTimecreated($obj->{'timecreated'})
            ,Group::fromTimemodified($obj->{'timemodified'})
        );
    }

    /**
     * @return Group
     */
    public static function sample(): Group {
        return new Group(
            Group::sampleID()
            ,Group::sampleCourseid()
            ,Group::sampleIdnumber()
            ,Group::sampleName()
            ,Group::sampleDescription()
            ,Group::sampleDescriptionformat()
            ,Group::sampleEnrolmentkey()
            ,Group::samplePicture()
            ,Group::sampleTimecreated()
            ,Group::sampleTimemodified()
        );
    }
}
