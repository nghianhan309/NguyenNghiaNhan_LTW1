<?php
require_once __DIR__ . "/../config/Database.php";
require_once __DIR__ . "/../models/Student.php";

class StudentDAO
{
    // kết nối
    private mysqli $conn;

    // Constructor
    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // Lấy danh sách sinh viên
    public function getAll()
    {
        // viết câu lệnh
        $sql = "SELECT * FROM students ORDER BY id DESC";
        // thực thi câu lệnh
        $result = $this->conn->query($sql);
        $students = [];

        // Đọc từng dòng dữ liệu
        while ($row = $result->fetch_assoc()) {
            $student = new Student(
                $row["studentcode"],
                $row["fullname"],
                $row["phone"],
                $row["gender"]
            );
            $student->id = $row["id"];
            $student->createdAt = $row["created_at"];
            $students[] = $student;
        }
        return $students;
    }

    // Lấy thông tin một sinh viên theo id
    public function getById(int $id)
    {
        $sql = "SELECT * FROM students WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute(); // thực thi

        // lấy kết quả
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if (!$row) {
            return null;
        }

        $student = new Student(
            $row["studentcode"],
            $row["fullname"],
            $row["phone"],
            $row["gender"]
        );
        $student->id = $row["id"];
        $student->createdAt = $row["created_at"];
        return $student;
    }

    // Thêm sinh viên
    public function insert(Student $student)
    {
        $sql = "INSERT INTO students(studentcode, fullname, phone, gender) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            "ssss",
            $student->studentCode,
            $student->fullName,
            $student->phone,
            $student->gender
        );
        return $stmt->execute();
    }

    // Cập nhật sinh viên
    public function update(Student $student)
    {
        $sql = "UPDATE students SET studentcode = ?, fullname = ?, phone = ?, gender = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            "ssssi",
            $student->studentCode,
            $student->fullName,
            $student->phone,
            $student->gender,
            $student->id
        );
        return $stmt->execute();
    }

    // Xóa sinh viên
    public function delete(int $id)
    {
        $sql = "DELETE FROM students WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
