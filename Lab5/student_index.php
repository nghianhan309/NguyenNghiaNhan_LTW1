<?php
require_once "dao/StudentDAO.php";
$studentDAO = new StudentDAO();
$students = $studentDAO->getAll();

require_once "includes/header.php";
?>
<main class="container my-5">
    <section class="mb-5">
        <div class="d-flex justify-content-between mb-3">
            <h4>Danh sách sinh viên</h4>
            <a href="student_add.php" class="btn btn-primary">
                Thêm sinh viên
            </a>
        </div>
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>STT</th>
                    <th>Mã SV</th>
                    <th class="text-start">Họ và tên</th>
                    <th>Điện thoại</th>
                    <th>Giới tính</th>
                    <th width="200">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($students as $key => $student) {
                ?>
                    <tr>
                        <td><?= ($key + 1); ?></td>
                        <td><?= htmlspecialchars($student->studentCode); ?></td>
                        <td><?= htmlspecialchars($student->fullName); ?></td>
                        <td><?= htmlspecialchars($student->phone); ?></td>
                        <td><?= htmlspecialchars($student->gender); ?></td>
                        <td>
                            <a href="student_detail.php?id=<?= $student->id; ?>" class="btn btn-info btn-sm">
                                Chi tiết
                            </a>
                            <a href="student_edit.php?id=<?= $student->id; ?>" class="btn btn-warning btn-sm">
                                Sửa
                            </a>
                            <a href="student_delete.php?id=<?= $student->id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa sinh viên này không?');">
                                Xóa
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </section>
</main>
<?php
require_once "includes/footer.php";
?>
