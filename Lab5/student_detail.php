<?php
require_once "dao/StudentDAO.php";
$studentDAO = new StudentDAO();

if (!isset($_GET["id"])) {
    // chuyển hướng
    header("Location: student_index.php");
    exit;
}

$id = (int)$_GET["id"]; // Lấy giá trị id từ URL
$student = $studentDAO->getById($id);

require_once "includes/header.php";
?>
<main class="container my-5">
    <section class="mb-5 shadow p-4 mx-auto" style="max-width: 600px;">
        <?php if ($student == null) { ?>
            <div class="alert alert-warning text-center">
                Không tìm thấy thông tin sinh viên!
            </div>
        <?php } else { ?>
            <h2 class="mb-4 text-primary text-center">Chi tiết sinh viên</h2>
            <table class="table table-bordered mb-4">
                <tr>
                    <th width="200" class="bg-light">Mã sinh viên</th>
                    <td class="fw-bold"><?= htmlspecialchars($student->studentCode) ?></td>
                </tr>
                <tr>
                    <th class="bg-light">Họ và tên</th>
                    <td class="fw-bold text-danger"><?= htmlspecialchars($student->fullName) ?></td>
                </tr>
                <tr>
                    <th class="bg-light">Số điện thoại</th>
                    <td><?= htmlspecialchars($student->phone) ?></td>
                </tr>
                <tr>
                    <th class="bg-light">Giới tính</th>
                    <td><?= htmlspecialchars($student->gender) ?></td>
                </tr>
            </table>
        <?php } ?>
        <div class="text-center">
            <a href="student_index.php" class="btn btn-secondary px-4">
                <i class="bi bi-arrow-left"></i> Quay lại
            </a>
        </div>
    </section>
</main>
<?php
require_once "includes/footer.php";
?>
