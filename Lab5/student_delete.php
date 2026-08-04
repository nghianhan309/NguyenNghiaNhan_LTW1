<?php
require_once "dao/StudentDAO.php";

$studentDAO = new StudentDAO();

if (!isset($_GET["id"])) {
    header("Location: student_index.php");
    exit;
}

$id = (int)$_GET["id"];
$student = $studentDAO->getById($id);

// Kiểm tra sinh viên có tồn tại hay không
if ($student == null) {
    header("Location: student_index.php");
    exit;
}

// Thực hiện xóa sinh viên khỏi cơ sở dữ liệu
if ($studentDAO->delete($id)) {
    header("Location: student_index.php");
    exit;
} else {
    // Nếu xóa thất bại thì hiện thông báo lỗi
    require_once "includes/header.php";
    echo '<main class="container my-5">';
    echo '<div class="alert alert-danger text-center shadow-sm">Xóa sinh viên thất bại! Vui lòng thử lại.</div>';
    echo '<div class="text-center"><a href="student_index.php" class="btn btn-secondary">Quay lại</a></div>';
    echo '</main>';
    require_once "includes/footer.php";
}
?>
