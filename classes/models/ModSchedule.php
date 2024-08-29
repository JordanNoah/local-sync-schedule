<?php

namespace local_sync_schedule\models;

use Exception;
use stdClass;

class ModSchedule {
    private ?int $id;
    private int $cmid;
    private string $moduleType;
    private int $courseId;
    private int $groupId;
    private ?string $startDate;
    private ?string $endDate;
    private ?string $createdAt;
    private ?string $updatedAt;

    public function __construct(
        int $cmid,
        string $moduleType,
        int $courseId,
        int $groupId,
        ?string $startDate,
        ?string $endDate,
        ?string $createdAt = null,
        ?string $updatedAt = null,
        ?int $id = null
    ) {
        $this->cmid = $cmid;
        $this->moduleType = $moduleType;
        $this->courseId = $courseId;
        $this->groupId = $groupId;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->id = $id;
    }

    // Ejemplo de función para crear un objeto ModSchedule desde stdClass
    public static function from(stdClass $obj): ModSchedule {
        return new ModSchedule(
            self::fromCmid($obj->{'cmid'}),
            self::fromModuleType($obj->{'moduleType'}),
            self::fromCourseId($obj->{'courseId'}),
            self::fromGroupId($obj->{'groupId'}),
            self::fromStartDate($obj->{'startDate'}),
            self::fromEndDate($obj->{'endDate'}),
            self::fromCreatedAt($obj->{'createdAt'} ?? null),
            self::fromUpdatedAt($obj->{'updatedAt'} ?? null),
            self::fromId($obj->{'id'}?? null),
        );
    }

    // Ejemplo de función para convertir el objeto ModSchedule a stdClass
    public function to(): stdClass {
        $out = new stdClass();
        $out->{'id'} = $this->toId();
        $out->{'cmid'} = $this->toCmid();
        $out->{'module_type'} = $this->toModuleType();
        $out->{'course_id'} = $this->toCourseId();
        $out->{'group_id'} = $this->toGroupId();
        $out->{'start_date'} = $this->toStartDate();
        $out->{'end_date'} = $this->toEndDate();
        $out->{'created_at'} = $this->toCreatedAt();
        $out->{'updated_at'} = $this->toUpdatedAt();
        return $out;
    }

    public static function fromId(?int $value): ?int
    {
        return $value;
    }

    public function toId (): ?int
    {
        return $this->id;
    }

    // Funciones para manejar cmid
    public static function fromCmid(int $value): int {
        return $value;
    }

    public function toCmid(): int {
        return $this->cmid;
    }

    // Funciones para manejar moduleType
    public static function fromModuleType(string $value): string {
        return $value;
    }

    public function toModuleType(): string {
        return $this->moduleType;
    }

    // Funciones para manejar courseId
    public static function fromCourseId(int $value): int {
        return $value;
    }

    public function toCourseId(): int {
        return $this->courseId;
    }

    // Funciones para manejar groupId
    public static function fromGroupId(int $value): int {
        return $value;
    }

    public function toGroupId(): int {
        return $this->groupId;
    }

    // Funciones para manejar startDate
    public static function fromStartDate(?string $value): ?string {
        return $value;
    }

    public function toStartDate(): ?string {
        return $this->startDate;
    }

    // Funciones para manejar endDate
    public static function fromEndDate(?string $value): ?string {
        return $value;
    }

    public function toEndDate(): ?string {
        return $this->endDate;
    }

    // Funciones para manejar createdAt
    public static function fromCreatedAt(?string $value): ?string {
        return $value;
    }

    public function toCreatedAt(): ?string {
        return $this->createdAt;
    }

    // Funciones para manejar updatedAt

    public static function fromUpdatedAt(?string $value): ?string {
        return $value;
    }

    public function toUpdatedAt(): ?string {
        return $this->updatedAt;
    }

    public function setId(int $value): void
    {
        $this->id = $value;
    }

    public function setCmid(int $value): void {
        $this->cmid = $value;
    }

    public function setModuleType(string $value): void {
        $this->moduleType = $value;
    }

    public function setCourseId(int $value): void {
        $this->courseId = $value;
    }

    public function setGroupId(int $value): void {
        $this->groupId = $value;
    }

    public function setStartDate(?string $value): void {
        $this->startDate = $value;
    }

    public function setEndDate(?string $value): void {
        $this->endDate = $value;
    }

    public function setCreatedAt(?string $value): void {
        $this->createdAt = $value;
    }

    public function setUpdatedAt(?string $value): void {
        $this->updatedAt = $value;
    }

    public function getCmid(): int {
        return $this->cmid;
    }

    public function getModuleType(): string {
        return $this->moduleType;
    }

    public function getCourseId(): int {
        return $this->courseId;
    }

    public function getGroupId(): int {
        return $this->groupId;
    }

    public function getStartDate(): ?string {
        return $this->startDate;
    }

    public function getEndDate(): ?string {
        return $this->endDate;
    }

    public function getCreatedAt(): ?string {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?string {
        return $this->updatedAt;
    }

    // Función de validación del objeto ModSchedule
    public function validate(): bool {
        return is_int($this->cmid)
            && is_string($this->moduleType)
            && is_int($this->courseId)
            && is_int($this->groupId)
            && ($this->startDate === null || is_string($this->startDate))
            && ($this->endDate === null || is_string($this->endDate))
            && ($this->createdAt === null || is_string($this->createdAt))
            && ($this->updatedAt === null || is_string($this->updatedAt));
    }
}
