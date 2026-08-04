1. Phân biệt MySQL và phpMyAdmin:
- MySQL: Là một Hệ quản trị cơ sở dữ liệu quan hệ (RDBMS) mã nguồn mở, hoạt động dựa trên ngôn ngữ SQL dùng để lưu trữ và quản lý dữ liệu.
- phpMyAdmin: Là một công cụ phần mềm miễn phí viết bằng PHP, dùng để thao tác và quản trị MySQL thông qua giao diện web trực quan thay vì phải gõ lệnh Command Line.

2. Phân biệt các cách kết nối cơ sở dữ liệu trong PHP:
- MySQLi thủ tục (Procedural): Dùng các hàm có tiền tố mysqli_ (ví dụ mysqli_connect()). Phù hợp với code viết theo kiểu hướng thủ tục truyền thống.
- MySQLi hướng đối tượng (Object-Oriented): Sử dụng các class và object (ví dụ new mysqli()). Code gọn gàng, có tính đóng gói cao hơn.
- PDO (PHP Data Objects): Hỗ trợ kết nối với nhiều loại CSDL khác nhau (MySQL, PostgreSQL, SQLite...). Hỗ trợ cực tốt cho Prepared Statement, an toàn và linh hoạt.
=> Trong Lab này sử dụng cách: MySQLi hướng đối tượng (Object-Oriented).

3. Phân biệt Database, Table, Record và Field:
- Database (Cơ sở dữ liệu): Là nơi chứa toàn bộ dữ liệu của một ứng dụng, bao gồm nhiều Table bên trong.
- Table (Bảng): Cấu trúc lưu trữ dữ liệu dưới dạng các hàng và cột (ví dụ bảng Sinh viên).
- Record (Bản ghi/Hàng - Row): Là một hàng dữ liệu cụ thể trong bảng (ví dụ thông tin của 1 sinh viên: Nguyễn Văn A, 20 tuổi).
- Field (Trường/Cột - Column): Là các thuộc tính của bảng (ví dụ cột Họ tên, cột Giới tính).

4. AUTO_INCREMENT và PRIMARY KEY:
- PRIMARY KEY (Khóa chính): Là một hoặc nhiều cột dùng để định danh duy nhất một bản ghi trong bảng. Đảm bảo không có 2 bản ghi trùng khóa chính.
- AUTO_INCREMENT: Thuộc tính tự động tăng giá trị lên 1 mỗi khi có bản ghi mới được thêm vào.
=> Tác dụng: Giúp tạo ra các id duy nhất cho từng bản ghi mà người lập trình không cần phải tự nhập thủ công, tránh việc nhập trùng lặp id gây lỗi hệ thống.

5. Phân biệt GET và POST:
- GET: Dữ liệu được đính kèm trực tiếp lên URL. Dùng để truy vấn, lấy dữ liệu, không an toàn cho dữ liệu nhạy cảm. Giới hạn dung lượng URL.
- POST: Dữ liệu được giấu trong phần body của request, không hiển thị trên URL. Dùng để gửi dữ liệu nhạy cảm (mật khẩu), dữ liệu lớn, hoặc thực hiện thay đổi dữ liệu trên server (thêm, xóa, sửa).

6. Tại sao cần Validate dữ liệu:
- Để đảm bảo dữ liệu người dùng nhập vào luôn chính xác định dạng, hợp lệ (ví dụ: tuổi phải là số) trước khi lưu.
- Tránh lỗi hệ thống hoặc sập database khi lưu các dữ liệu rác.
- Bảo mật hệ thống, chặn mã độc hoặc spam.

7. SQL Injection và Prepared Statement:
- SQL Injection: Là một kỹ thuật tấn công phổ biến, hacker sẽ chèn các đoạn mã SQL độc hại vào các form nhập liệu để đánh lừa hệ thống thực thi lệnh sai mục đích (ví dụ: xóa database, vượt qua đăng nhập).
- Prepared Statement: Là phương pháp sử dụng câu lệnh SQL được biên dịch trước, các tham số đầu vào được gán qua các biến (dấu ?) thay vì ghép chuỗi trực tiếp.
=> Nên sử dụng Prepared Statement vì nó tự động xử lý và làm sạch các ký tự đặc biệt, giúp ngăn chặn triệt để tấn công SQL Injection.

8. Tại sao UPDATE hoặc DELETE cần mệnh đề WHERE:
- Mệnh đề WHERE dùng để xác định chính xác (những) bản ghi nào cần được thao tác.
- Nếu không có WHERE, lệnh UPDATE sẽ sửa toàn bộ dữ liệu trong bảng, lệnh DELETE sẽ xóa sạch toàn bộ dữ liệu trong bảng, gây ra hậu quả cực kỳ nghiêm trọng không thể cứu vãn.

9. Export, Import và Backup:
- Export (Xuất dữ liệu): Dùng để trích xuất cấu trúc và dữ liệu từ Database hiện tại ra thành một file (thường là .sql).
- Import (Nhập dữ liệu): Dùng để đưa cấu trúc và dữ liệu từ một file .sql từ bên ngoài vào Database.
- Backup (Sao lưu): Việc Export dữ liệu ra file định kỳ chính là Backup, giúp bảo vệ dữ liệu an toàn, có thể dùng file Import để phục hồi nếu hệ thống bị sập, bị hack hoặc chuyển sang server mới.
