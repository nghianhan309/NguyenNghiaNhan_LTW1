Khi nào nên sử dụng Function, khi nào nên sử dụng Class và Object:
1. Nên sử dụng Function: Khi cần thực hiện một nhóm các tác vụ, phép toán hoặc xử lý logic độc lập không liên quan chặt chẽ đến một thực thể cụ thể (VD: hàm formatPrice, hàm tính toán ngày tháng). Code đơn giản, nhanh gọn.
2. Nên sử dụng Class và Object (OOP): Khi cần quản lý một thực thể phức tạp trong hệ thống có cả Trạng thái (Thuộc tính / Biến) và Hành vi (Phương thức / Hàm) như SinhVien, SanPham, DonHang. OOP giúp tổ chức mã nguồn có tính kế thừa, bao đóng, dễ dàng mở rộng và bảo trì với các dự án lớn.

 Giải thích ý nghĩa của từ khóa $this trong lớp:
Từ khóa `$this` là một biến giả (pseudo-variable) dùng để tham chiếu đến chính đối tượng (Object) hiện tại đang gọi phương thức đó. Nó giúp phân biệt giữa thuộc tính của lớp (vd: `$this->studentId`) và các biến cục bộ bên trong hàm.

 Cho biết ý nghĩa của toán tử mũi tên (->):
Toán tử mũi tên `->` (Object Operator) được dùng để truy cập vào thuộc tính (Property) hoặc gọi một phương thức (Method) của một đối tượng (Object) đã được khởi tạo. VD: `$student->getAverage()`.

 Nêu lợi ích của việc tái sử dụng phương thức (Method Reuse) trong lập trình hướng đối tượng:
1. DRY (Don't Repeat Yourself): Tránh việc phải sao chép và lặp lại cùng một đoạn mã (như trong bài gọi lại `$this->getAverage()` bên trong `getRank()` và `getScholarship()`).
2. Dễ bảo trì và đồng bộ: Khi cần thay đổi logic (ví dụ đổi cách tính điểm trung bình), ta chỉ cần sửa duy nhất tại phương thức gốc, tất cả các phương thức khác sử dụng nó sẽ tự động nhận logic mới, hạn chế sinh ra lỗi.
3. Code sạch và dễ đọc hơn: Việc tái sử dụng giúp mã nguồn ngắn gọn, tường minh.
