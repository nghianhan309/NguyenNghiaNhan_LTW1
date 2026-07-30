1. Cập nhật và quan sát biến $fullname từ Form bằng $_GET['fullname']:
- Khi người dùng điền tên (ví dụ: "Nguyễn Văn A") vào Form GET và nhấn Gửi, dữ liệu sẽ được đính kèm lên URL (ví dụ: ?fullname=Nguy%E1%BB%85n+V%C4%83n+A).
- Trình duyệt và máy chủ nhận dữ liệu, biến $_GET['fullname'] trong PHP sẽ trích xuất và mang giá trị "Nguyễn Văn A", sau đó hiển thị ra ngoài màn hình thông qua mã PHP.

2. Sự khác nhau giữa phương thức GET và POST:

Tiêu chí 1: Cách gửi dữ liệu
- GET: Dữ liệu được nối trực tiếp vào URL dưới dạng các cặp key=value, ngăn cách bởi dấu & và ? .
- POST: Dữ liệu được gửi đi ngầm bên trong phần thân (body) của HTTP request, không xuất hiện ở thanh địa chỉ.

Tiêu chí 2: Dữ liệu có hiển thị trên URL hay không
- GET: Có hiển thị toàn bộ trên URL (rất dễ nhìn thấy).
- POST: Không hiển thị trên URL.

Tiêu chí 3: Trường hợp nào nên sử dụng GET và POST
- Nên sử dụng GET: Khi thực hiện các tác vụ truy vấn, tìm kiếm (như tìm kiếm bài viết, phân trang), không làm thay đổi trạng thái hệ thống, hoặc muốn chia sẻ URL trực tiếp cho người khác.
- Nên sử dụng POST: Khi gửi dữ liệu nhạy cảm (như mật khẩu, token đăng nhập), dữ liệu có kích thước lớn (như file upload, văn bản dài) hoặc thực hiện các thay đổi trạng thái (như thêm mới, cập nhật, xóa dữ liệu trên database).
