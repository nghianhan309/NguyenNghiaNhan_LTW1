<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1 - Nguyễn Nghĩa Nhân</title>
</head>
<body>
    <div>
        <h1>Bài Thực Hành Lab 1 - PHP Cơ Bản</h1>

        <?php
        /* 
           =========================================================
           YÊU CẦU 5: SỬ DỤNG CHÚ THÍCH (COMMENTS)
           Đây là ví dụ về chú thích nhiều dòng (multi-line comment).
           Mã nguồn dưới đây thực hiện toàn bộ các yêu cầu của Lab 1.
           =========================================================
        */

        // Đây là ví dụ về chú thích 1 dòng (single-line comment). Bắt đầu phần code PHP.

        // ---------------------------------------------------------
        // YÊU CẦU 1: In trực tiếp thông tin
        // ---------------------------------------------------------
        echo "<h2>Yêu cầu 1: In trực tiếp thông tin bằng echo</h2>";
        echo "<div class='result'>";
        echo "<strong>Họ và tên:</strong> Nguyễn Nghĩa Nhân <br>";
        echo "<strong>Ngày sinh:</strong> 30/09/2005 <br>";
        echo "<strong>Mã số sinh viên:</strong> 2123110146 <br>";
        echo "</div>";


        // ---------------------------------------------------------
        // YÊU CẦU 2: Khai báo biến và in giá trị
        // ---------------------------------------------------------
        echo "<h2>Yêu cầu 2: Khai báo biến và in giá trị</h2>";
        
        // Khai báo 4 biến lưu trữ thông tin cá nhân
        $hoTen = "Nguyễn Nghĩa Nhân";
        $maSV = "2123110146";
        $soDienThoai = "0562797768";
        $ngaySinh = "30/09/2005";

        echo "<div class='result'>";
        echo "<strong>Họ và tên:</strong> " . $hoTen . "<br>";
        echo "<strong>Mã số sinh viên:</strong> " . $maSV . "<br>";
        echo "<strong>Số điện thoại:</strong> " . $soDienThoai . "<br>";
        echo "<strong>Ngày sinh:</strong> " . $ngaySinh . "<br>";
        echo "</div>";


        // ---------------------------------------------------------
        // YÊU CẦU 3: Khai báo hằng số
        // ---------------------------------------------------------
        echo "<h2>Yêu cầu 3: Khai báo hằng số kết nối CSDL</h2>";
        
        // Dùng define() để định nghĩa 4 hằng số kết nối
        define("HOST", "localhost");
        define("DATABASE", "ql_sinhvien");
        define("USERNAME", "root");
        define("PASSWORD", ""); // Mật khẩu rỗng

        echo "<div class='result'>";
        echo "<strong>HOST:</strong> " . HOST . "<br>";
        echo "<strong>DATABASE:</strong> " . DATABASE . "<br>";
        echo "<strong>USERNAME:</strong> " . USERNAME . "<br>";
        echo "<strong>PASSWORD:</strong> '" . PASSWORD . "' <em>(Chuỗi rỗng)</em><br>";
        echo "</div>";


        // ---------------------------------------------------------
        // YÊU CẦU 4: Phân biệt nháy đơn và nháy kép
        // ---------------------------------------------------------
        echo "<h2>Yêu cầu 4: Phân biệt nháy đơn và nháy kép</h2>";
        
        $monHoc = "Lập trình Web 1";
        
        echo "<div class='result'>";
        // 1. Sử dụng nháy kép: Biến được nội suy (phân giải giá trị)
        echo "<strong>1. Sử dụng dấu nháy kép (\" \"):</strong><br>";
        echo "Khi đặt biến trong dấu nháy kép, PHP sẽ lấy <strong>giá trị</strong> của biến đó.<br>";
        echo "<div class='code-example'>Code: echo \"Tôi đang học \$monHoc\";</div>";
        echo "=> <strong>Kết quả in ra:</strong> Tôi đang học $monHoc <br><br><hr><br>";

        // 2. Sử dụng nháy đơn: Biến không được nội suy (in ra nguyên văn tên biến)
        echo "<strong>2. Sử dụng dấu nháy đơn (' '):</strong><br>";
        echo "Khi đặt biến trong dấu nháy đơn, PHP sẽ in ra <strong>đúng nguyên văn</strong> tên biến chứ không phân giải giá trị.<br>";
        echo "<div class='code-example'>Code: echo 'Tôi đang học \$monHoc';</div>";
        echo "=> <strong>Kết quả in ra:</strong> " . 'Tôi đang học $monHoc' . "<br>";
        echo "</div>";
        
        ?>
    </div>
</body>
</html>
