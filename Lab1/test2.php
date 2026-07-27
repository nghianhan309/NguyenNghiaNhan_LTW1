<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1 - Câu C (test2.php) - Nguyễn Nghĩa Nhân</title>
</head>
<body>
    <div>
        <h1>Bài Thực Hành Lab 1 - Câu C (test2.php)</h1>

        <?php
        // ---------------------------------------------------------
        // 1. Phép toán cơ bản
        // ---------------------------------------------------------
        echo "<h2>1. Các phép toán cơ bản với hai số nguyên</h2>";
        $a = 15;
        $b = 4;
        echo "<div class='result'>";
        echo "Số a = $a, Số b = $b <br>";
        echo "Cộng (a + b): " . ($a + $b) . "<br>";
        echo "Trừ (a - b): " . ($a - $b) . "<br>";
        echo "Nhân (a * b): " . ($a * $b) . "<br>";
        echo "Chia (a / b): " . ($a / $b) . "<br>";
        echo "Chia lấy dư (a % b): " . ($a % $b) . "<br>";
        echo "</div>";

        // ---------------------------------------------------------
        // 2. So sánh biến (==, ===, !=, <>, !==)
        // ---------------------------------------------------------
        echo "<h2>2. So sánh số nguyên và chuỗi số</h2>";
        $num = 10;          // int
        $strNum = "10";     // string
        echo "<div class='result'>";
        echo "Biến số nguyên: \$num = 10 <br>";
        echo "Biến chuỗi số: \$strNum = \"10\" <br><br>";
        
        echo "(\$num == \$strNum) : " . ($num == $strNum ? 'true' : 'false') . "<br>";
        echo "(\$num === \$strNum): " . ($num === $strNum ? 'true' : 'false') . "<br>";
        echo "(\$num != \$strNum) : " . ($num != $strNum ? 'true' : 'false') . "<br>";
        echo "(\$num <> \$strNum) : " . ($num <> $strNum ? 'true' : 'false') . "<br>";
        echo "(\$num !== \$strNum): " . ($num !== $strNum ? 'true' : 'false') . "<br>";
        
        /* 
           Sự khác nhau:
           - == (Bằng nhau): Chỉ so sánh giá trị, PHP sẽ tự động ép kiểu trước khi so sánh.
           - === (Đồng nhất): So sánh cả giá trị và kiểu dữ liệu. 
           - != hoặc <> (Khác nhau): Chỉ so sánh giá trị xem có khác nhau không.
           - !== (Không đồng nhất): So sánh cả giá trị và kiểu dữ liệu xem có khác nhau không.
        */
        echo "<div class='comment-box'>
        <strong>Sự khác nhau:</strong><br>
        - <code>==</code> và <code>!=</code> (hoặc <code>&lt;&gt;</code>): Chỉ so sánh về <strong>giá trị</strong> (có tự động ép kiểu). VD: 10 == \"10\" là true.<br>
        - <code>===</code> và <code>!==</code>: So sánh nghiêm ngặt cả <strong>giá trị</strong> lẫn <strong>kiểu dữ liệu</strong>. VD: 10 === \"10\" là false vì một bên là int, một bên là string.
        </div>";
        echo "</div>";

        // ---------------------------------------------------------
        // 3. Toán tử tăng (++, --)
        // ---------------------------------------------------------
        echo "<h2>3. Phép tăng trước (++\$x) và tăng sau (\$x++)</h2>";
        echo "<div class='result'>";
        
        $x = 5;
        echo "<strong>Tăng trước (++\$x):</strong> Giá trị ban đầu \$x = 5<br>";
        $y = ++$x;
        echo "Thực hiện \$y = ++\$x; => \$y = $y, \$x hiện tại = $x <br><br>";
        
        $z = 5;
        echo "<strong>Tăng sau (\$z++):</strong> Giá trị ban đầu \$z = 5<br>";
        $w = $z++;
        echo "Thực hiện \$w = \$z++; => \$w = $w, \$z hiện tại = $z <br>";

        /*
           Sự khác nhau:
           - ++$x (Tăng trước): Biến $x được cộng 1 TRƯỚC khi gán hoặc thực hiện biểu thức chứa nó.
           - $x++ (Tăng sau): Biến $x được sử dụng cho biểu thức hiện tại TRƯỚC, SAU ĐÓ mới được cộng 1.
        */
        echo "<div class='comment-box'>
        <strong>Sự khác nhau:</strong><br>
        - <code>++\$x</code> (Tiền tố): Tăng giá trị của biến lên 1 <strong>trước</strong> khi sử dụng biến đó trong biểu thức.<br>
        - <code>\$x++</code> (Hậu tố): Sử dụng giá trị hiện tại của biến trong biểu thức <strong>trước</strong>, sau đó mới tăng giá trị lên 1.
        </div>";
        echo "</div>";

        // ---------------------------------------------------------
        // 4. Nối chuỗi (. và .=)
        // ---------------------------------------------------------
        echo "<h2>4. Nối chuỗi bằng toán tử . và .=</h2>";
        echo "<div class='result'>";
        $chuoi1 = "Xin chào, ";
        $chuoi2 = "bạn Nghĩa Nhân!";
        
        // Toán tử .
        $ketQuaNoi = $chuoi1 . $chuoi2;
        echo "Dùng toán tử <code>.</code> : $ketQuaNoi <br>";
        
        // Toán tử .=
        $chuoi1 .= $chuoi2; 
        echo "Dùng toán tử <code>.=</code> (Gán \$chuoi1 .= \$chuoi2) : Giá trị mới của \$chuoi1 là: $chuoi1 <br>";

        /*
           Sự khác nhau:
           - Toán tử . : Dùng để ghép nối hai hay nhiều chuỗi lại với nhau tạo thành chuỗi mới (không làm thay đổi biến gốc).
           - Toán tử .= : Vừa nối chuỗi vừa gán trực tiếp kết quả vào biến đứng trước nó (thay đổi giá trị biến gốc).
        */
        echo "<div class='comment-box'>
        <strong>Sự khác nhau:</strong><br>
        - <code>.</code> : Tạo ra một chuỗi mới từ việc nối các chuỗi lại, không làm thay đổi giá trị của các biến gốc.<br>
        - <code>.=</code> : Nối chuỗi bên phải vào chuỗi bên trái, và <strong>gán luôn</strong> giá trị mới đó cho biến bên trái.
        </div>";
        echo "</div>";

        // ---------------------------------------------------------
        // 5. Hàm đếm số lượng ký tự (strlen và mb_strlen)
        // ---------------------------------------------------------
        echo "<h2>5. Đếm số lượng ký tự</h2>";
        echo "<div class='result'>";
        $chuoiKhongDau = "Hello PHP";
        $chuoiCoDau = "Xin chào PHP";

        echo "Chuỗi không dấu: \"$chuoiKhongDau\" -> strlen() = " . strlen($chuoiKhongDau) . "<br>";
        echo "Chuỗi có dấu: \"$chuoiCoDau\" -> mb_strlen() = " . mb_strlen($chuoiCoDau, 'UTF-8') . "<br>";
        // In thêm để thấy sự sai khác
        echo "Chuỗi có dấu: \"$chuoiCoDau\" -> strlen() = " . strlen($chuoiCoDau) . " <em>(Bị sai số lượng do dấu tiếng Việt)</em><br>";

        /*
           Sự khác nhau:
           - strlen(): Đếm số byte của chuỗi. Trong UTF-8, các ký tự có dấu thường chiếm nhiều hơn 1 byte, dẫn đến kết quả sai.
           - mb_strlen(): Đếm số lượng ký tự thực sự một cách an toàn cho các bảng mã multibyte như UTF-8.
        */
        echo "<div class='comment-box'>
        <strong>Sự khác nhau:</strong><br>
        - <code>strlen()</code>: Đếm dựa trên số <strong>byte</strong>. Với ký tự tiếng Việt (UTF-8), một chữ cái có dấu có thể chiếm 2-3 byte, nên hàm này đếm sai với chuỗi có dấu.<br>
        - <code>mb_strlen()</code>: Đếm chính xác số lượng <strong>ký tự</strong> thực sự, hỗ trợ tốt cho ngôn ngữ có dấu.
        </div>";
        echo "</div>";

        // ---------------------------------------------------------
        // 6. Chuyển đổi chữ hoa / chữ thường
        // ---------------------------------------------------------
        echo "<h2>6. Chuyển chuỗi thành chữ in hoa và chữ thường</h2>";
        echo "<div class='result'>";
        $text = "Học lập trình Web 1";
        
        echo "Chuỗi gốc: \"$text\" <br>";
        echo "strtoupper(): " . strtoupper($text) . "<br>";
        echo "strtolower(): " . strtolower($text) . "<br>";
        
        echo "mb_strtoupper(): " . mb_strtoupper($text, 'UTF-8') . "<br>";
        echo "mb_strtolower(): " . mb_strtolower($text, 'UTF-8') . "<br>";

        /*
           Sự khác nhau:
           - strtoupper() / strtolower(): Chỉ hoạt động chuẩn xác với các ký tự ASCII (tiếng Anh không dấu). Các chữ có dấu sẽ bị lỗi font hoặc không chuyển đổi đúng.
           - mb_strtoupper() / mb_strtolower(): Hoạt động đúng với các ký tự Unicode (như tiếng Việt có dấu).
        */
        echo "<div class='comment-box'>
        <strong>Sự khác nhau:</strong><br>
        - <code>strtoupper() / strtolower()</code>: Chỉ đổi chữ hoa/thường chuẩn xác cho ký tự không dấu (ASCII). Nếu gặp chữ có dấu tiếng Việt sẽ bị lỗi hiển thị hoặc không đổi.<br>
        - <code>mb_strtoupper() / mb_strtolower()</code>: Chuyển đổi an toàn và chính xác cho mọi ngôn ngữ, bao gồm cả tiếng Việt có dấu.
        </div>";
        echo "</div>";

        // ---------------------------------------------------------
        // 7. Ép kiểu chuỗi về số nguyên (int)
        // ---------------------------------------------------------
        echo "<h2>7. Ép kiểu chuỗi về int</h2>";
        echo "<div class='result'>";
        $str1 = "123 abc";
        $str2 = "abc 123";

        $int1 = (int)$str1;
        $int2 = (int)$str2;

        echo "Chuỗi gốc 1: \"$str1\" -> Ép kiểu (int): "; var_dump($int1); echo "<br>";
        echo "Chuỗi gốc 2: \"$str2\" -> Ép kiểu (int): "; var_dump($int2); echo "<br>";
        echo "<div class='comment-box'>
        <strong>Giải thích:</strong> Khi ép chuỗi về số nguyên, PHP sẽ đọc từ trái sang phải. Nếu gặp số ở đầu tiên, nó sẽ lấy các số đó cho đến khi gặp ký tự không phải số (như \"123 abc\" thành 123). Nếu ký tự đầu tiên không phải là số (như \"abc 123\"), kết quả sẽ là 0.
        </div>";
        echo "</div>";

        // ---------------------------------------------------------
        // 8. Sử dụng var_dump() với các kiểu dữ liệu
        // ---------------------------------------------------------
        echo "<h2>8. Sử dụng var_dump() cho các kiểu dữ liệu khác nhau</h2>";
        echo "<div class='result'>";
        $varInt = 2026;
        $varFloat = 3.14159;
        $varString = "Hello PHP!";
        $varBool = true;

        echo "Biến int: "; var_dump($varInt); echo "<br>";
        echo "Biến float: "; var_dump($varFloat); echo "<br>";
        echo "Biến string: "; var_dump($varString); echo "<br>";
        echo "Biến bool: "; var_dump($varBool); echo "<br>";
        echo "</div>";
        
        ?>
    </div>
</body>
</html>
