<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2 - Test 1 - CSS Thuần</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* 1. Menu */
        nav ul {
            list-style: none;
            display: flex;
            background-color: rgb(4, 40, 94);
            margin: 0;
            padding: 0;
        }

        nav ul li {
            flex: 1;
            text-align: center;
        }

        nav ul li a {
            padding: 15px 20px;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            display: block;
        }

        nav ul li:hover {
            background-color: #084298;
        }

        /* 2. Danh sách ngôn ngữ - section s1 */
        .s1 {
            margin-top: 30px;
        }

        .s1 ul {
            list-style: none;
            padding: 0;
            margin: 0 auto;
            max-width: 500px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            overflow: hidden;
            background: #fff;
        }

        .s1 ul li {
            background-color: #e9ecef;
            /* Màu nền xanh nhạt theo yêu cầu */
            padding: 15px 20px;
            margin-bottom: 5px;
            border-left: 5px solid #0d6efd;
            transition: transform 0.2s;
        }

        .s1 ul li:hover {
            transform: translateX(5px);
        }

        /* 3. Bảng sinh viên - section s2 */
        .s2 {
            margin-top: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #0d6efd;
            color: #fff;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* 4. Form đăng ký - section s3 */
        .s3 {
            margin-top: 30px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label.title {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .radio-group,
        .checkbox-group {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            color: #fff;
            font-weight: bold;
        }

        .btn-submit {
            background-color: #198754;
        }

        .btn-reset {
            background-color: #dc3545;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- 1. Thanh điều hướng -->
        <nav>
            <?php
            $menus = ["Trang chủ", "Tin tức", "Liên hệ", "Giới thiệu"];
            echo "<ul>";
            foreach ($menus as $menu) {
                echo "<li><a href='#'>$menu</a></li>";
            }
            echo "</ul>";
            ?>
        </nav>

        <!-- 2. Danh sách ngôn ngữ -->
        <section class="s1">
            <h2>Danh sách ngôn ngữ sử dụng trong môn học</h2>
            <?php
            $subjects = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];
            echo "<ul>";
            foreach ($subjects as $subject) {
                echo "<li>$subject</li>";
            }
            echo "</ul>";
            ?>
        </section>

        <!-- 3. Bảng danh sách sinh viên -->
        <section class="s2">
            <h2>Danh sách sinh viên</h2>
            <?php
            // Mảng 2 chiều
            $students = [
                ["id" => "SV01", "name" => "Nguyễn Văn A", "gender" => "Nam", "class" => "CNTT1"],
                ["id" => "SV02", "name" => "Trần Thị B", "gender" => "Nữ", "class" => "CNTT2"],
                ["id" => "SV03", "name" => "Nguyễn Nghĩa Nhân", "gender" => "Nam", "class" => "CNTT3"],
                ["id" => "SV04", "name" => "Phạm Thị D", "gender" => "Nữ", "class" => "CNTT4"]
            ];
            ?>
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã SV</th>
                        <th>Họ tên</th>
                        <th>Giới tính</th>
                        <th>Lớp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($students as $index => $student) {
                        $stt = $index + 1; // Tính STT từ biến index
                        echo "<tr>
                                    <td>$stt</td>
                                    <td>{$student['id']}</td>
                                    <td>{$student['name']}</td>
                                    <td>{$student['gender']}</td>
                                    <td>{$student['class']}</td>
                                  </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>

        <!-- 4. Form đăng ký -->
        <section class="s3">
            <h2 style="text-align: center; color: #0d6efd;">ĐĂNG KÝ THÔNG TIN SINH VIÊN</h2>
            <?php
            $faculties = ["Công nghệ thông tin", "Quản trị kinh doanh", "Kế toán", "Ngôn ngữ Anh"];
            $classes = ["A1" => "CNTT1", "A2" => "CNTT2", "A3" => "CNTT3", "A4" => "CNTT4"];
            $genders = ["Nam", "Nữ", "Khác"];
            $hobbies = ["LT" => "Lập trình", "DS" => "Đọc sách", "AN" => "Âm nhạc", "DL" => "Du lịch", "TT" => "Thể thao"];
            ?>
            <form action="" method="post">
                <div class="form-group">
                    <label class="title">Họ và tên:</label>
                    <input type="text" name="fullname" class="form-control" required>
                </div>

                <div class="form-group">
                    <label class="title">Khoa:</label>
                    <select name="faculty" class="form-control">
                        <?php
                        foreach ($faculties as $faculty) {
                            echo "<option value='$faculty'>$faculty</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label class="title">Lớp học:</label>
                    <select name="class" class="form-control">
                        <?php
                        foreach ($classes as $key => $class) {
                            echo "<option value='$key'>$class</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label class="title">Giới tính:</label>
                    <div class="radio-group">
                        <?php
                        foreach ($genders as $gender) {
                            echo "<label><input type='radio' name='gender' value='$gender' required> $gender</label>";
                        }
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="title">Sở thích:</label>
                    <div class="checkbox-group">
                        <?php
                        foreach ($hobbies as $key => $hobby) {
                            echo "<label><input type='checkbox' name='hobbies[]' value='$key'> $hobby</label>";
                        }
                        ?>
                    </div>
                </div>

                <div class="form-group" style="text-align: center; margin-top: 25px;">
                    <button type="submit" class="btn-submit">Đăng ký</button>
                    <button type="reset" class="btn-reset">Làm mới</button>
                </div>
            </form>
        </section>
    </div>
</body>

</html>