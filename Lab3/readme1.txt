Tìm hiểu và phân biệt các lệnh include, require, include_once, require_once:

1. include: 
- Mục đích: Nhúng và thực thi một file PHP khác. 
- Xử lý lỗi: Nếu file không tồn tại hoặc bị lỗi, PHP sẽ chỉ phát ra cảnh báo (Warning) nhưng chương trình vẫn tiếp tục chạy.
- Sử dụng: Thường dùng để nhúng các phần giao diện không quá quan trọng (VD: sidebar, quảng cáo).

2. require: 
- Mục đích: Nhúng và thực thi một file PHP khác (bắt buộc). 
- Xử lý lỗi: Nếu file không tồn tại, PHP sẽ phát ra lỗi nghiêm trọng (Fatal Error) và dừng chương trình ngay lập tức.
- Sử dụng: Dùng để nhúng các file chứa logic chính, cấu hình database.

3. include_once: 
- Tương tự include, nhưng PHP sẽ kiểm tra xem file đó đã được nhúng trước đó hay chưa. Nếu đã nhúng rồi, nó sẽ không nhúng lại nữa. Tránh lỗi khai báo hàm/biến trùng lặp.

4. require_once: 
- Tương tự require, nhưng đảm bảo file chỉ được nhúng một lần duy nhất. Được dùng rất phổ biến khi nhúng các file định nghĩa Class hoặc thư viện cốt lõi.

(Ảnh chụp màn hình minh chứng lỗi đã được lưu vào thư mục assets/images)
