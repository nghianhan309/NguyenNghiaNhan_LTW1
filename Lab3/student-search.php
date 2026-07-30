<?php
require "includes/header.php";

// Tạo mảng gồm tối thiểu 20 sinh viên
$students = [
    ["fullname" => "Nguyễn Văn A", "age" => 20, "gender" => "Nam", "class" => "C25A", "email" => "nva@gmail.com"],
    ["fullname" => "Trần Thị B", "age" => 21, "gender" => "Nữ", "class" => "C25A", "email" => "ttb@gmail.com"],
    ["fullname" => "Lê Văn C", "age" => 20, "gender" => "Nam", "class" => "C25E", "email" => "lvc@gmail.com"],
    ["fullname" => "Phạm Thị D", "age" => 22, "gender" => "Nữ", "class" => "C25F", "email" => "ptd@gmail.com"],
    ["fullname" => "Hoàng Văn E", "age" => 19, "gender" => "Nam", "class" => "C25A", "email" => "hve@gmail.com"],
    ["fullname" => "Vũ Thị F", "age" => 21, "gender" => "Nữ", "class" => "C25E", "email" => "vtf@gmail.com"],
    ["fullname" => "Đặng Văn G", "age" => 20, "gender" => "Nam", "class" => "C25F", "email" => "dvg@gmail.com"],
    ["fullname" => "Bùi Thị H", "age" => 23, "gender" => "Nữ", "class" => "C25A", "email" => "bth@gmail.com"],
    ["fullname" => "Đỗ Văn I", "age" => 21, "gender" => "Nam", "class" => "C25E", "email" => "dvi@gmail.com"],
    ["fullname" => "Hồ Thị K", "age" => 19, "gender" => "Nữ", "class" => "C25F", "email" => "htk@gmail.com"],
    ["fullname" => "Ngô Văn L", "age" => 22, "gender" => "Nam", "class" => "C25A", "email" => "nvl@gmail.com"],
    ["fullname" => "Dương Thị M", "age" => 20, "gender" => "Nữ", "class" => "C25E", "email" => "dtm@gmail.com"],
    ["fullname" => "Lý Văn N", "age" => 21, "gender" => "Nam", "class" => "C25F", "email" => "lvn@gmail.com"],
    ["fullname" => "Tô Thị P", "age" => 20, "gender" => "Nữ", "class" => "C25A", "email" => "ttp@gmail.com"],
    ["fullname" => "Vương Văn Q", "age" => 23, "gender" => "Nam", "class" => "C25E", "email" => "vvq@gmail.com"],
    ["fullname" => "Thái Thị R", "age" => 19, "gender" => "Nữ", "class" => "C25F", "email" => "ttr@gmail.com"],
    ["fullname" => "Mai Văn S", "age" => 21, "gender" => "Nam", "class" => "C25A", "email" => "mvs@gmail.com"],
    ["fullname" => "Chu Thị T", "age" => 22, "gender" => "Nữ", "class" => "C25E", "email" => "ctt@gmail.com"],
    ["fullname" => "Đinh Văn U", "age" => 20, "gender" => "Nam", "class" => "C25F", "email" => "dvu@gmail.com"],
    ["fullname" => "Lư Thị V", "age" => 21, "gender" => "Nữ", "class" => "C25A", "email" => "ltv@gmail.com"],
];

// Khởi tạo các biến để giữ lại giá trị trên form
$searchName = $_GET['searchName'] ?? '';
$searchGender = $_GET['searchGender'] ?? '';
$searchClass = $_GET['searchClass'] ?? '';

// Mảng chứa kết quả tìm kiếm, mặc định ban đầu là mảng rỗng (hoặc hiển thị tất cả nếu muốn)
$filteredStudents = [];
$hasSearched = isset($_GET['searchName']);

if ($hasSearched) {
    foreach ($students as $student) {
        $match = true;

        // Tìm theo tên (không phân biệt chữ hoa chữ thường)
        if (!empty($searchName) && stripos($student['fullname'], trim($searchName)) === false) {
            $match = false;
        }

        // Tìm theo giới tính
        if (!empty($searchGender) && $student['gender'] !== $searchGender) {
            $match = false;
        }

        // Tìm theo lớp
        if (!empty($searchClass) && $student['class'] !== $searchClass) {
            $match = false;
        }

        if ($match) {
            $filteredStudents[] = $student;
        }
    }
} else {
    // Lần đầu vào trang, nếu muốn hiển thị tất cả thì gán:
    $filteredStudents = $students;
}
?>

<main class="container my-5">
    <!-- Form tìm kiếm -->
    <section class="mb-5 shadow p-4 mx-auto bg-white rounded" style="max-width: 800px;">
        <h2 class="mb-4 text-primary text-center fw-bold">TÌM KIẾM SINH VIÊN</h2>
        <form action="student-search.php" method="get">
            <div class="row g-3">
                <!-- Họ và tên -->
                <div class="col-md-6">
                    <label for="searchName" class="form-label fw-bold">Họ và tên</label>
                    <input type="text" class="form-control" id="searchName" name="searchName" placeholder="Nhập tên cần tìm..." value="<?= htmlspecialchars($searchName) ?>">
                </div>
                
                <!-- Lớp -->
                <div class="col-md-6">
                    <label for="searchClass" class="form-label fw-bold">Lớp</label>
                    <select name="searchClass" id="searchClass" class="form-select">
                        <option value="">-- Tất cả các lớp --</option>
                        <option value="C25A" <?= $searchClass === 'C25A' ? 'selected' : '' ?>>Lớp C25A</option>
                        <option value="C25E" <?= $searchClass === 'C25E' ? 'selected' : '' ?>>Lớp C25E</option>
                        <option value="C25F" <?= $searchClass === 'C25F' ? 'selected' : '' ?>>Lớp C25F</option>
                    </select>
                </div>
                
                <!-- Giới tính -->
                <div class="col-md-12">
                    <label class="form-label fw-bold d-block">Giới tính:</label>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="genderAny" name="searchGender" value="" <?= $searchGender === '' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="genderAny">Tất cả</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="genderNam" name="searchGender" value="Nam" <?= $searchGender === 'Nam' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="genderNam">Nam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="genderNu" name="searchGender" value="Nữ" <?= $searchGender === 'Nữ' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="genderNu">Nữ</label>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center gap-3 mt-4">
                <button type="submit" class="btn btn-primary px-4"><i class="bi bi-search"></i> Tìm kiếm</button>
                <a href="student-search.php" class="btn btn-secondary px-4">Làm lại</a>
            </div>
        </form>
    </section>

    <!-- Kết quả tìm kiếm -->
    <section>
        <h3 class="mb-3 fw-bold">Kết quả:</h3>
        <?php if (count($filteredStudents) > 0): ?>
            <div class="table-responsive shadow-sm">
                <table class="table table-bordered table-hover align-middle text-center mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>STT</th>
                            <th class="text-start">Họ và tên</th>
                            <th>Tuổi</th>
                            <th>Giới tính</th>
                            <th>Lớp</th>
                            <th class="text-start">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $stt = 1;
                        foreach ($filteredStudents as $student): 
                        ?>
                            <tr>
                                <td><?= $stt++ ?></td>
                                <td class="text-start fw-bold"><?= htmlspecialchars($student['fullname']) ?></td>
                                <td><?= $student['age'] ?></td>
                                <td><?= $student['gender'] ?></td>
                                <td><?= $student['class'] ?></td>
                                <td class="text-start"><?= htmlspecialchars($student['email']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="alert alert-warning text-center shadow-sm py-4">
                <h5 class="alert-heading mb-0">Không tìm thấy sinh viên phù hợp.</h5>
            </div>
        <?php endif; ?>
    </section>
</main>

<?php require "includes/footer.php"; ?>
