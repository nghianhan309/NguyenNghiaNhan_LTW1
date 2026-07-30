<?php
require "includes/header.php";
?>

<main class="container my-5">
    <section class="mb-5 shadow p-3 mx-auto" style="width: 600px;">
        <h2 class="mb-4">Thông tin (GET)</h2>
        <form action="form-get.php" method="get">
            <div class="mb-3 mt-3">
                <label for="fullname" class="form-label">Họ tên</label>
                <input type="text" class="form-control" id="fullname" placeholder="Họ tên" name="fullname" required>
            </div>
            
            <div class="mb-3 mt-3">
                <label for="birthyear" class="form-label">Tuổi</label>
                <input type="number" class="form-control" id="birthyear" placeholder="Tuổi" name="birthyear" required>
            </div>

            <div class="mb-3 mt-3">
                <label class="form-label d-block">Giới tính:</label>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="gender1" name="gender" value="1" checked>
                    <label class="form-check-label" for="gender1">Nam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="gender2" name="gender" value="2">
                    <label class="form-check-label" for="gender2">Nữ</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="gender3" name="gender" value="3">
                    <label class="form-check-label" for="gender3">Khác</label>
                </div>
            </div>

            <div class="mb-3 mt-3">
                <label for="mclass" class="form-label">Lớp</label>
                <select name="mclass" id="mclass" class="form-select" required>
                    <option value="">-- Chọn lớp --</option>
                    <option value="C25A">Lớp C25A</option>
                    <option value="C25E">Lớp C25E</option>
                    <option value="C25F">Lớp C25F</option>
                </select>
            </div>

            <div class="d-flex justify-content-center gap-3 mt-4">
                <button type="submit" class="btn btn-primary px-4">Gửi</button>
                <button type="reset" class="btn btn-secondary px-4">Làm lại</button>
            </div>
        </form>
    </section>

    <?php
    if (isset($_GET['fullname'])) {
        // Lấy dữ liệu từ form
        $fullname = $_GET['fullname'];
        $birthyear = $_GET['birthyear'];
        $gender = $_GET['gender'];
        $mclass = $_GET['mclass'];

        // Sử dụng toán tử ba ngôi (ternary)
        $genderText = ($gender == "1") ? "Nam" : (($gender == "2") ? "Nữ" : "Khác");
    ?>
        <div class="card mx-auto shadow-sm" style="max-width: 600px;">
            <div class="card-header bg-primary text-white fw-bold">
                Thông tin đã nhập (Phương thức GET)
            </div>
            <div class="card-body">
                <table class="table table-bordered mb-0">
                    <tr>
                        <th style="width: 30%;">Họ và tên</th>
                        <td><?= htmlspecialchars($fullname) ?></td>
                    </tr>
                    <tr>
                        <th>Tuổi</th>
                        <td><?= htmlspecialchars($birthyear) ?></td>
                    </tr>
                    <tr>
                        <th>Giới tính</th>
                        <td><?= htmlspecialchars($genderText) ?></td>
                    </tr>
                    <tr>
                        <th>Lớp</th>
                        <td><?= htmlspecialchars($mclass) ?></td>
                    </tr>
                </table>
            </div>
        </div>
    <?php
    }
    ?>
</main>

<?php require "includes/footer.php"; ?>
