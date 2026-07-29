<?php
class Student
{
    // Properties
    public string $studentId;
    public string $fullName;
    public string $gender;
    public int $birthYear;
    public float $scoreHtml;
    public float $scoreCss;
    public float $scorePhp;

    // Constructor
    public function __construct(
        string $studentId,
        string $fullName,
        string $gender,
        int $birthYear,
        float $scoreHtml,
        float $scoreCss,
        float $scorePhp
    ) {
        $this->studentId = $studentId;
        $this->fullName = $fullName;
        $this->gender = $gender;
        $this->birthYear = $birthYear;
        $this->scoreHtml = $scoreHtml;
        $this->scoreCss = $scoreCss;
        $this->scorePhp = $scorePhp;
    }

    // =======Methods======
    
    /**
     * Tính tổng điểm
     * @return float
     */
    public function getTotalScore(): float
    {
        return $this->scoreHtml + $this->scoreCss + $this->scorePhp;
    }

    /**
     * Trả về tuổi của sinh viên dựa trên năm sinh
     */
    public function getAge(): int
    {
        $currentYear = date("Y");
        return $currentYear - $this->birthYear;
    }

    /**
     * Trả về điểm trung bình của 3 môn
     */
    public function getAverage(): float
    {
        return round($this->getTotalScore() / 3, 2);
    }

    /**
     * Trả về xếp loại của sinh viên dựa trên điểm trung bình
     */
    public function getRank(): string
    {
        $avg = $this->getAverage();
        if ($avg >= 9.0) return "Xuất sắc";
        if ($avg >= 8.0) return "Giỏi";
        if ($avg >= 6.5) return "Khá";
        if ($avg >= 5.0) return "Trung bình";
        return "Yếu";
    }

    /**
     * Lấy class CSS tô màu dòng theo xếp loại
     */
    public function getRowColorClass(): string
    {
        $rank = $this->getRank();
        if ($rank == "Xuất sắc") return "table-success";
        if ($rank == "Giỏi") return "table-info";
        if ($rank == "Khá") return "table-primary";
        if ($rank == "Trung bình") return "table-warning";
        return "table-danger";
    }

    /**
     * Kiểm tra sinh viên có đạt học bổng hay không
     * Học bổng: Điểm TB >= 8.0 và không môn nào dưới 6.5
     */
    public function getScholarship(): bool
    {
        $avg = $this->getAverage();
        if ($avg >= 8.0 && $this->scoreHtml >= 6.5 && $this->scoreCss >= 6.5 && $this->scorePhp >= 6.5) {
            return true;
        }
        return false;
    }

    /**
     * Hiển thị thông tin của một sinh viên dạng 1 dòng trong bảng
     */
    public function showInfo()
    {
        $scholarship = $this->getScholarship() ? '<span class="badge bg-success shadow-sm">Có</span>' : '<span class="badge bg-secondary shadow-sm">Không</span>';
        $rowColor = $this->getRowColorClass();

        echo "<tr class='$rowColor align-middle'>";
        echo "<td class='fw-bold'>{$this->studentId}</td>";
        echo "<td class='text-start fw-bold'>{$this->fullName}</td>";
        echo "<td>{$this->gender}</td>";
        echo "<td>{$this->birthYear}</td>";
        echo "<td>{$this->getAge()}</td>";
        echo "<td>{$this->scoreHtml}</td>";
        echo "<td>{$this->scoreCss}</td>";
        echo "<td>{$this->scorePhp}</td>";
        echo "<td class='fw-bold text-danger'>{$this->getTotalScore()}</td>";
        echo "<td class='fw-bold text-primary'>{$this->getAverage()}</td>";
        echo "<td class='fw-bold'>{$this->getRank()}</td>";
        echo "<td>{$scholarship}</td>";
        echo "</tr>";
    }
}
?>
