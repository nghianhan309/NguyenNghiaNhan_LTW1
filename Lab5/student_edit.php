<?php
require_once "dao/StudentDAO.php";
require_once "models/Student.php";

$studentDAO = new StudentDAO();

// Lấy id từ URL
if (!isset($_GET["id"])) {
    header("Location: student_index.php");
    exit;
}
$id = (int)$_GET["id"];
$student = $studentDAO->getById($id);

if ($student == null) {
    header("Location: student_index.php");
    exit;
}

$errors = [];
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nhận dữ liệu từ form
    $studentCode = $_POST["studentCode"] ?? '';
    $fullName = $_POST["fullName"] ?? '';
    $phone = $_POST["phone"] ?? '';
    $gender = $_POST["gender"] ?? '';

    // Validate
    if (empty(trim($studentCode))) {
        $errors[] = "Mã sinh viên không được để trống.";
    }
    if (empty(trim($fullName))) {
        $errors[] = "Họ và tên không được để trống.";
    }
    if (!empty(trim($phone)) && !preg_match("/^[0-9]{10,11}$/", trim($phone))) {
        $errors[] = "Số điện thoại không đúng định dạng (phải là 10-11 chữ số).";
    }
    if (empty($gender)) {
        $errors[] = "Giới tính phải được chọn.";
    }

    // Cập nhật lại đối tượng để giữ lại dữ liệu nhập sai trên form
    $student->studentCode = $studentCode;
    $student->fullName = $fullName;
    $student->phone = $phone;
    $student->gender = $gender;

    // Nếu dữ liệu hợp lệ
    if (empty($errors)) {
        if ($studentDAO->update($student)) {
            header("Location: student_index.php");
            exit;
        } else {
            $message = "Cập nhật sinh viên thất bại!";
        }
    }
}

require_once "includes/header.php";
?>
<main class="container my-5">
    <section class="shadow p-4 mx-auto bg-white rounded" style="max-width: 600px;">
        <h2 class="mb-4 text-center text-warning fw-bold">Sửa sinh viên</h2>
        
        <?php if(!empty($message)){ ?>
            <div class="alert alert-danger"><?= $message ?></div>
        <?php } ?>

        <?php if(!empty($errors)){ ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php foreach($errors as $err) echo "<li>$err</li>"; ?>
                </ul>
            </div>
        <?php } ?>

        <form method="post">
            <div class="mb-3">
                <label class="form-label fw-bold">Mã sinh viên <span class="text-danger">*</span></label>
                <input type="text" name="studentCode" class="form-control" value="<?= htmlspecialchars($student->studentCode) ?>">
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-bold">Họ và tên <span class="text-danger">*</span></label>
                <input type="text" name="fullName" class="form-control" value="<?= htmlspecialchars($student->fullName) ?>">
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-bold">Số điện thoại</label>
                <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($student->phone) ?>">
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-bold d-block">Giới tính <span class="text-danger">*</span></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="Nam" id="gender1" <?= $student->gender == 'Nam' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="gender1">Nam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="Nữ" id="gender2" <?= $student->gender == 'Nữ' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="gender2">Nữ</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="Khác" id="gender3" <?= $student->gender == 'Khác' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="gender3">Khác</label>
                </div>
            </div>
            
            <div class="d-flex justify-content-between mt-4">
                <a href="student_index.php" class="btn btn-secondary px-4">Quay lại</a>
                <button type="submit" class="btn btn-warning px-4">Lưu thay đổi</button>
            </div>
        </form>
    </section>
</main>
<?php
require_once "includes/footer.php";
?>
