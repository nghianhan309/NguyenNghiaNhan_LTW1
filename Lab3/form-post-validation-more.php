<?php
require "includes/header.php";
?>

<main class="container my-5">
    <section class="mb-5 shadow p-4 mx-auto" style="max-width: 700px;">
        <h2 class="mb-4">Thông tin đầy đủ (POST + Validation)</h2>
        <form action="form-post-validation-more.php" method="post" enctype="multipart/form-data">
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="fullname" class="form-label">Họ tên <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="fullname" placeholder="Nhập họ và tên" name="fullname">
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="birthyear" class="form-label">Tuổi <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="birthyear" placeholder="Nhập tuổi" name="birthyear">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="email" placeholder="example@gmail.com" name="email">
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="dob" class="form-label">Ngày sinh <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="dob" name="dob">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label d-block">Giới tính: <span class="text-danger">*</span></label>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="gender1" name="gender" value="1">
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

            <div class="mb-3">
                <label for="mclass" class="form-label">Lớp <span class="text-danger">*</span></label>
                <select name="mclass" id="mclass" class="form-select">
                    <option value="">-- Chọn lớp --</option>
                    <option value="C25A">Lớp C25A</option>
                    <option value="C25E">Lớp C25E</option>
                    <option value="C25F">Lớp C25F</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label d-block">Sở thích: <span class="text-danger">*</span></label>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="hobby1" name="hobbies[]" value="Đọc sách">
                    <label class="form-check-label" for="hobby1">Đọc sách</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="hobby2" name="hobbies[]" value="Chơi thể thao">
                    <label class="form-check-label" for="hobby2">Chơi thể thao</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="hobby3" name="hobbies[]" value="Nghe nhạc">
                    <label class="form-check-label" for="hobby3">Nghe nhạc</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="hobby4" name="hobbies[]" value="Du lịch">
                    <label class="form-check-label" for="hobby4">Du lịch</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Địa chỉ <span class="text-danger">*</span></label>
                <textarea class="form-control" id="address" name="address" rows="3" placeholder="Nhập địa chỉ của bạn"></textarea>
            </div>

            <div class="mb-3">
                <label for="avatar" class="form-label">Ảnh đại diện <span class="text-danger">*</span></label>
                <input class="form-control" type="file" id="avatar" name="avatar">
                <small class="text-muted">Chấp nhận định dạng: jpg, jpeg, png, gif, webp. Kích thước tối đa: 200KB.</small>
            </div>

            <div class="d-flex justify-content-center gap-3 mt-4">
                <button type="submit" class="btn btn-primary px-4">Gửi thông tin</button>
                <button type="reset" class="btn btn-secondary px-4">Làm lại</button>
            </div>
        </form>
    </section>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $errors = [];
        
        // Nhận dữ liệu
        $fullname = $_POST['fullname'] ?? '';
        $birthyear = $_POST['birthyear'] ?? '';
        $email = $_POST['email'] ?? '';
        $dob = $_POST['dob'] ?? '';
        $gender = $_POST['gender'] ?? '';
        $mclass = $_POST['mclass'] ?? '';
        $hobbies = $_POST['hobbies'] ?? [];
        $address = $_POST['address'] ?? '';
        $avatar = $_FILES['avatar'] ?? null;

        // Validation
        if (empty(trim($fullname))) {
            $errors[] = "Họ tên không được để trống.";
        } else if (mb_strlen(trim($fullname)) < 5) {
            $errors[] = "Họ tên phải có ít nhất 5 ký tự.";
        }

        if (empty(trim($birthyear))) {
            $errors[] = "Tuổi không được để trống.";
        } else if (!is_numeric($birthyear)) {
            $errors[] = "Tuổi phải là một số.";
        } else if ($birthyear < 18 || $birthyear > 60) {
            $errors[] = "Tuổi phải nằm trong khoảng từ 18 đến 60.";
        }

        if (empty(trim($email))) {
            $errors[] = "Email không được để trống.";
        } else if (!filter_var(trim($email), FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Email không đúng định dạng.";
        }

        if (empty(trim($dob))) {
            $errors[] = "Ngày sinh không được để trống.";
        }

        if (empty($gender)) {
            $errors[] = "Giới tính bắt buộc chọn.";
        }

        if (empty($mclass)) {
            $errors[] = "Lớp bắt buộc chọn.";
        }

        if (count($hobbies) == 0) {
            $errors[] = "Chọn ít nhất một sở thích.";
        }

        if (empty(trim($address))) {
            $errors[] = "Địa chỉ không được để trống.";
        }

        // Validate File upload (Ảnh đại diện)
        if (empty($avatar['name'])) {
            $errors[] = "Ảnh đại diện bắt buộc chọn.";
        } else if ($avatar['error'] === UPLOAD_ERR_OK) {
            $allowed_exts = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
            $file_ext = strtolower(pathinfo($avatar['name'], PATHINFO_EXTENSION));
            
            if (!in_array($file_ext, $allowed_exts)) {
                $errors[] = "Chỉ chấp nhận các định dạng ảnh: jpg, jpeg, png, gif, webp.";
            }
            
            if ($avatar['size'] > 204800) { // 200KB = 200 * 1024 bytes
                $errors[] = "Kích thước ảnh không được vượt quá 200KB.";
            }
        } else {
            $errors[] = "Có lỗi xảy ra trong quá trình upload ảnh (Mã lỗi: " . $avatar['error'] . ").";
        }

        // Hiển thị lỗi hoặc dữ liệu
        if (count($errors) > 0) {
        ?>
            <div class="alert alert-danger mx-auto shadow-sm" style="max-width: 700px;">
                <h5 class="alert-heading">Vui lòng kiểm tra lại:</h5>
                <ul class="mb-0">
                    <?php
                    foreach ($errors as $error) {
                        echo "<li>$error</li>";
                    }
                    ?>
                </ul>
            </div>
        <?php
        } else {
            $genderText = ($gender == "1") ? "Nam" : (($gender == "2") ? "Nữ" : "Khác");
            $hobbiesStr = implode(", ", $hobbies);
        ?>
            <div class="card mx-auto shadow-sm" style="max-width: 700px;">
                <div class="card-header bg-success text-white fw-bold">
                    Đăng ký thành công!
                </div>
                <div class="card-body">
                    <table class="table table-bordered mb-0">
                        <tr>
                            <th style="width: 35%;">Họ và tên</th>
                            <td><?= htmlspecialchars($fullname) ?></td>
                        </tr>
                        <tr>
                            <th>Tuổi</th>
                            <td><?= htmlspecialchars($birthyear) ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?= htmlspecialchars($email) ?></td>
                        </tr>
                        <tr>
                            <th>Ngày sinh</th>
                            <td><?= htmlspecialchars($dob) ?></td>
                        </tr>
                        <tr>
                            <th>Giới tính</th>
                            <td><?= htmlspecialchars($genderText) ?></td>
                        </tr>
                        <tr>
                            <th>Lớp</th>
                            <td><?= htmlspecialchars($mclass) ?></td>
                        </tr>
                        <tr>
                            <th>Sở thích</th>
                            <td><?= htmlspecialchars($hobbiesStr) ?></td>
                        </tr>
                        <tr>
                            <th>Địa chỉ</th>
                            <td><?= nl2br(htmlspecialchars($address)) ?></td>
                        </tr>
                        <tr>
                            <th>Tên file ảnh (Avatar)</th>
                            <td><?= htmlspecialchars($avatar['name']) ?> 
                                <span class="badge bg-secondary"><?= round($avatar['size']/1024, 2) ?> KB</span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
    <?php
        }
    }
    ?>
</main>

<?php require "includes/footer.php"; ?>
