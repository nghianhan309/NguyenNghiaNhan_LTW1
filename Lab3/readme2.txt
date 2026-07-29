 Mục đích của Function trong PHP:
Function (hàm) giúp đóng gói một đoạn mã thực hiện một nhiệm vụ cụ thể để có thể tái sử dụng nhiều lần ở nhiều nơi khác nhau mà không cần viết lại mã. Giúp cấu trúc code gọn gàng, dễ bảo trì, dễ quản lý và dễ tái sử dụng.

 Các Function đã sử dụng trong bài thực hành:
1. formatPrice()
2. getTotalQuantity()
3. getTotalPrice()
4. showProductTable()
5. countStudents()
6. getAverageScore()
(Và các hàm thống kê Dashboard khác...)

 Các loại Function trong PHP:
1. Hàm có sẵn (Built-in functions): Các hàm do PHP cung cấp sẵn. VD: number_format(), count(), round(), strtolower().
2. Hàm do người dùng tự định nghĩa (User-defined functions).
3. Hàm ẩn danh (Anonymous functions / Closures): Hàm không có tên.
4. Arrow functions: Cú pháp ngắn gọn của hàm ẩn danh.

 Loại function nào chưa được áp dụng trong bài thực hành:
Hàm ẩn danh (Anonymous functions) và Arrow functions chưa được áp dụng trong bài thực hành này.

 Tìm hiểu về Parameters (tham số) trong Function:
 Có những dạng tham số nào? 
1. Tham số truyền theo giá trị (Pass by Value): Biến truyền vào sẽ tạo một bản sao, không thay đổi giá trị gốc.
2. Tham số truyền theo tham chiếu (Pass by Reference): Sử dụng dấu &, thay đổi trực tiếp biến gốc.
3. Tham số có giá trị mặc định (Default Argument Values): Tham số có sẵn giá trị nếu người dùng không truyền vào.
4. Tham số số lượng biến đổi (Variable-length argument lists): Sử dụng toán tử ... (Splat operator).
5. Tham số có định kiểu (Type Hinting): Ràng buộc kiểu dữ liệu đầu vào.

 Bài thực hành đã sử dụng những dạng nào? 
Bài thực hành đã sử dụng: 
- Tham số truyền theo giá trị (VD: $products).
- Tham số có giá trị mặc định (VD: $currency = 'VNĐ', $decimals = 0).

 Những dạng tham số nào chưa được áp dụng trong bài thực hành?
Chưa áp dụng: Tham số truyền theo tham chiếu (Pass by reference) và Tham số số lượng biến đổi (Variable-length arguments).
