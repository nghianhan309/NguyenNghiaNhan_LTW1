<?php
require_once "dao/StudentDAO.php";
require_once "models/Student.php";

$studentDAO = new StudentDAO();

// Xử lý dữ liệu nếu người dùng nhấn nút Lưu
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student = new Student(
        $_POST["studentCode"] ?? '',
        $_POST["fullName"] ?? '',
        $_POST["phone"] ?? '',
        $_POST["gender"] ?? ''
    );

    if ($studentDAO->insert($student)) {
        // điều hướng
        header("Location: student_index.php");
        exit;
    } else {
        // Gán lỗi vào biến $message
        $message = "Thêm sinh viên thất bại! Có thể mã sinh viên đã tồn tại.";
    }
}

require_once "includes/header.php";
?>
<main class="container my-5">
    <section class="shadow p-4 mx-auto bg-white rounded" style="max-width: 600px;">
        <h2 class="mb-4 text-center text-primary fw-bold">Thêm sinh viên</h2>
        
        <?php if(isset($message)){ ?>
            <div class="alert alert-danger">
                <?= $message ?>
            </div>
        <?php } ?>

        <form method="post">
            <div class="mb-3">
                <label class="form-label fw-bold">Mã sinh viên <span class="text-danger">*</span></label>
                <input type="text" name="studentCode" class="form-control" placeholder="VD: SV006" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-bold">Họ và tên <span class="text-danger">*</span></label>
                <input type="text" name="fullName" class="form-control" placeholder="Nhập họ và tên..." required>
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-bold">Số điện thoại</label>
                <input type="text" name="phone" class="form-control" placeholder="Nhập số điện thoại">
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-bold d-block">Giới tính <span class="text-danger">*</span></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="Nam" id="gender1" checked>
                    <label class="form-check-label" for="gender1">Nam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="Nữ" id="gender2">
                    <label class="form-check-label" for="gender2">Nữ</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="Khác" id="gender3">
                    <label class="form-check-label" for="gender3">Khác</label>
                </div>
            </div>
            
            <div class="d-flex justify-content-between mt-4">
                <a href="student_index.php" class="btn btn-secondary px-4">Quay lại</a>
                <button type="submit" class="btn btn-primary px-4">Lưu</button>
            </div>
        </form>
    </section>
</main>
<?php
require_once "includes/footer.php";
?>
