<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1 - Câu D (test3.php) - Nguyễn Nghĩa Nhân</title>
</head>
<body>
    <div>
        <h1>Bài Thực Hành Lab 1 - Câu D (test3.php)</h1>

        <?php
        // ---------------------------------------------------------
        // 1. Hàm trim()
        // ---------------------------------------------------------
        echo "<h2>1. Sử dụng trim() để loại bỏ khoảng trắng ở đầu và cuối chuỗi</h2>";
        $chuoiTrim = "     Xin chào PHP và Lập trình Web!     ";
        echo "<div class='result'>";
        echo "<pre>Chuỗi gốc      : [" . $chuoiTrim . "]</pre>";
        echo "<pre>Sau khi trim() : [" . trim($chuoiTrim) . "]</pre>";
        echo "</div>";

        // ---------------------------------------------------------
        // 2. Hàm ltrim() và rtrim()
        // ---------------------------------------------------------
        echo "<h2>2. Sử dụng ltrim() và rtrim()</h2>";
        $chuoiLeftRight = "     Khoảng trắng hai bên     ";
        echo "<div class='result'>";
        echo "<pre>Chuỗi gốc       : [" . $chuoiLeftRight . "]</pre>";
        echo "<pre>Sau khi ltrim() : [" . ltrim($chuoiLeftRight) . "] (Chỉ xóa khoảng trắng bên trái)</pre>";
        echo "<pre>Sau khi rtrim() : [" . rtrim($chuoiLeftRight) . "] (Chỉ xóa khoảng trắng bên phải)</pre>";
        echo "</div>";

        // ---------------------------------------------------------
        // 3. Hàm substr()
        // ---------------------------------------------------------
        echo "<h2>3. Cắt chuỗi với substr()</h2>";
        // Chuỗi lớn hơn 30 ký tự
        $chuoiDai = "Đây là một chuỗi có độ dài lớn hơn ba mươi ký tự để thử nghiệm hàm substr.";
        echo "<div class='result'>";
        echo "<strong>Chuỗi gốc (>" . mb_strlen($chuoiDai, 'UTF-8') . " ký tự):</strong> $chuoiDai <br><br>";
        
        // Lấy 10 ký tự đầu tiên
        // Lưu ý: substr() cắt theo byte nên với tiếng Việt có dấu (UTF-8) nó có thể làm lỗi font.
        // Mình sẽ demo cả substr và mb_substr để bạn thấy sự khác biệt thực tế.
        echo "<strong>Dùng substr() cắt 10 ký tự (byte) đầu tiên:</strong> " . substr($chuoiDai, 0, 10) . " <em>(Bị lỗi font do cắt vào giữa ký tự có dấu)</em><br>";
        echo "<strong>Dùng mb_substr() cắt 10 ký tự (Unicode) đầu tiên:</strong> " . mb_substr($chuoiDai, 0, 10, 'UTF-8') . " <em>(Chính xác)</em><br><br>";

        // Lấy từ ký tự thứ 5 đến hết chuỗi
        // Ký tự thứ 5 tương ứng với index = 4
        echo "<strong>Dùng substr() lấy từ vị trí 4 (byte) đến hết:</strong> " . substr($chuoiDai, 4) . "<br>";
        echo "<strong>Dùng mb_substr() lấy từ ký tự thứ 5 đến hết:</strong> " . mb_substr($chuoiDai, 4, null, 'UTF-8') . "<br>";
        echo "</div>";

        // ---------------------------------------------------------
        // 4. Hàm str_replace()
        // ---------------------------------------------------------
        echo "<h2>4. Thay thế chuỗi với str_replace()</h2>";
        // Chuỗi lớn hơn 30 ký tự
        $chuoiThayThe = "Hôm nay tôi học ngôn ngữ lập trình PHP, ngôn ngữ PHP rất thú vị và mạnh mẽ.";
        echo "<div class='result'>";
        echo "<strong>Chuỗi gốc:</strong> $chuoiThayThe <br><br>";
        
        // Thay thế chữ 'PHP' thành 'JavaScript'
        $chuoiMoi = str_replace("PHP", "JavaScript", $chuoiThayThe);
        echo "<strong>Sau khi thay thế 'PHP' thành 'JavaScript':</strong> <br>$chuoiMoi";
        echo "</div>";
        ?>
    </div>
</body>
</html>
