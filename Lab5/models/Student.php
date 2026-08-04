<?php
class Student
{
    public ?int $id = null;
    public string $studentCode;
    public string $fullName;
    public ?string $phone;
    public string $gender;
    public ?string $createdAt = null;

    public function __construct(
        string $studentCode,
        string $fullName,
        ?string $phone,
        string $gender
    ) {
        $this->studentCode = $studentCode;
        $this->fullName = $fullName;
        $this->phone = $phone;
        $this->gender = $gender;
    }
}
?>
