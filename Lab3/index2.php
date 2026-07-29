<?php
require "includes/header.php";
require_once "classes/Student.php";
require_once "functions/common.php";

$students = [
    new Student("SV001", "Nguyễn Văn A", "Nam", 2005, 8.5, 9.0, 7.5),
    new Student("SV002", "Trần Thị B", "Nữ", 2004, 9.0, 8.0, 9.5),
    new Student("SV003", "Lê Văn C", "Nam", 2005, 7.5, 8.0, 8.5),
    new Student("SV004", "Phạm Thị D", "Nữ", 2006, 9.5, 9.5, 9.0),
    new Student("SV005", "Hoàng Văn E", "Nam", 2004, 6.0, 6.5, 7.0),
    new Student("SV006", "Ngô Thị F", "Nữ", 2005, 8.0, 8.5, 8.0),
    new Student("SV007", "Vũ Văn G", "Nam", 2003, 5.0, 5.5, 4.5),
    new Student("SV008", "Đặng Thị H", "Nữ", 2005, 9.0, 9.5, 9.5),
    new Student("SV009", "Bùi Văn I", "Nam", 2004, 7.0, 7.5, 7.0),
    new Student("SV010", "Đỗ Thị K", "Nữ", 2006, 8.5, 8.0, 8.5),
    new Student("SV011", "Hồ Văn L", "Nam", 2005, 4.0, 4.5, 5.0),
    new Student("SV012", "Dương Thị M", "Nữ", 2004, 9.5, 9.0, 9.5),
    new Student("SV013", "Lý Văn N", "Nam", 2005, 6.5, 7.0, 6.5),
    new Student("SV014", "Đinh Thị P", "Nữ", 2006, 8.0, 7.5, 8.0),
    new Student("SV015", "Đoàn Văn Q", "Nam", 2004, 5.5, 6.0, 5.5),
    new Student("SV016", "Trương Thị R", "Nữ", 2005, 9.0, 9.0, 9.0),
    new Student("SV017", "Lâm Văn S", "Nam", 2003, 7.5, 7.0, 7.5),
    new Student("SV018", "Mai Thị T", "Nữ", 2005, 8.5, 8.5, 8.0),
    new Student("SV019", "Phùng Văn U", "Nam", 2004, 6.0, 5.5, 6.0),
    new Student("SV020", "Vương Thị V", "Nữ", 2006, 9.5, 10.0, 9.5)
];
?>

<main class="container my-5">
    <!-- Dashboard -->
    <section class="mb-5">
        <h3 class="mb-4 fw-bold"><i class="bi bi-bar-chart-fill text-primary"></i> Dashboard Thống Kê</h3>
        
        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="card text-white bg-primary shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tổng Sinh Viên</h5>
                        <p class="display-6 fw-bold mb-0"><?= countStudents($students) ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title">Đạt Học Bổng</h5>
                        <p class="display-6 fw-bold mb-0"><?= countScholarshipStudents($students) ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-info shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title">Loại Xuất Sắc</h5>
                        <p class="display-6 fw-bold mb-0"><?= countExcellentStudents($students) ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-dark bg-warning shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title">Điểm TB Cả Lớp</h5>
                        <p class="display-6 fw-bold mb-0"><?= getAverageScore($students) ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-3">
                <div class="alert alert-secondary text-center shadow-sm mb-0">
                    <h6 class="alert-heading mb-2">Sinh Viên Nam</h6>
                    <span class="fs-4 fw-bold"><?= countMaleStudents($students) ?></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="alert alert-secondary text-center shadow-sm mb-0">
                    <h6 class="alert-heading mb-2">Sinh Viên Nữ</h6>
                    <span class="fs-4 fw-bold"><?= countFemaleStudents($students) ?></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="alert alert-success text-center shadow-sm mb-0">
                    <h6 class="alert-heading mb-2">Điểm TB Cao Nhất</h6>
                    <span class="fs-4 fw-bold"><?= getHighestAverage($students) ?></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="alert alert-danger text-center shadow-sm mb-0">
                    <h6 class="alert-heading mb-2">Điểm TB Thấp Nhất</h6>
                    <span class="fs-4 fw-bold"><?= getLowestAverage($students) ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Table -->
    <section class="mb-5">
        <h3 class="mb-3 fw-bold"><i class="bi bi-people-fill text-primary"></i> Danh sách Học Viên</h3>
        <div class="table-responsive shadow-sm">
            <table class="table table-bordered table-hover align-middle mb-0">
                <thead class="table-dark text-center align-middle">
                    <tr>
                        <th rowspan="2">Mã SV</th>
                        <th rowspan="2">Họ tên</th>
                        <th rowspan="2">Giới tính</th>
                        <th rowspan="2">Năm sinh</th>
                        <th rowspan="2">Tuổi</th>
                        <th colspan="3">Điểm Thành Phần</th>
                        <th rowspan="2">Tổng Điểm</th>
                        <th rowspan="2">Điểm TB</th>
                        <th rowspan="2">Xếp loại</th>
                        <th rowspan="2">Học bổng</th>
                    </tr>
                    <tr>
                        <th>HTML</th>
                        <th>CSS</th>
                        <th>PHP</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php 
                    foreach ($students as $student) { 
                        $student->showInfo(); 
                    } 
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</main>

<?php require "includes/footer.php"; ?>
