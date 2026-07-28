<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2 - Test 2 - Bootstrap 5</title>
    <!-- Nhúng thư viện Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- 1. Thanh điều hướng (Navbar) -->
    <?php
        $navItems = ["Trang chủ", "Sản phẩm", "Khuyến mãi", "Tin tức", "Liên hệ"];
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#eab308" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2a3 3 0 0 0-3 3v2H6a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3V5a3 3 0 0 0-3-3z"></path>
                    <path d="M10 7h4"></path>
                    <circle cx="12" cy="14" r="3"></circle>
                </svg>
                <span class="fw-bold text-uppercase" style="letter-spacing: 1px;">Maya Perfume</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav w-100 justify-content-evenly text-center">
                    <?php
                        foreach ($navItems as $item) {
                            echo "<li class='nav-item'><a class='nav-link fs-5' href='#'>$item</a></li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 2. Banner -->
    <div class="p-5 mb-4 text-center border-bottom" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('images/banner.png') center/cover no-repeat; color: white; min-height: 400px; display: flex; align-items: center;">
        <div class="container-fluid py-5">
            <h1 class="display-4 fw-bold text-white mb-4">Chào mừng đến với Maya Perfume</h1>
            <p class="col-md-8 mx-auto fs-4 text-light mb-4">Đại lý cung cấp các dòng nước hoa chính hãng hàng đầu, đảm bảo uy tín và chất lượng dịch vụ cực tốt.</p>
            <button class="btn btn-light btn-lg px-4 fw-bold" type="button">Khám phá ngay</button>
        </div>
    </div>

    <div class="container my-5">
        <!-- 3. Danh sách sản phẩm -->
        <h2 class="text-center mb-4 text-uppercase fw-bold">Sản Phẩm Nổi Bật</h2>
        <?php
            // Mảng nhiều chiều lưu sản phẩm
            $products = [
                ["name" => "Chanel No.5", "price" => 3500000, "image" => "images/default-product.jpg"],
                ["name" => "Dior Sauvage", "price" => 2800000, "image" => "images/default-product.jpg"],
                ["name" => "Bleu de Chanel", "price" => 3200000, "image" => "images/default-product.jpg"],
                ["name" => "Gucci Bloom", "price" => 2400000, "image" => "images/default-product.jpg"],
                ["name" => "Tom Ford Oud Wood", "price" => 5500000, "image" => "images/default-product.jpg"],
                ["name" => "Versace Eros", "price" => 2100000, "image" => "images/default-product.jpg"],
                ["name" => "YSL Libre", "price" => 3100000, "image" => "images/default-product.jpg"],
                ["name" => "Kilian Good Girl", "price" => 6500000, "image" => "images/default-product.jpg"]
            ];
        ?>
        <div class="row g-4">
            <?php foreach ($products as $prod): ?>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <!-- Hiển thị ảnh đầy đặn -->
                        <img src="<?= $prod['image'] ?>" class="card-img-top" alt="<?= $prod['name'] ?>" style="height: 250px; object-fit: cover;">
                        <div class="card-body d-flex flex-column text-center">
                            <h5 class="card-title"><?= $prod['name'] ?></h5>
                            <!-- Định dạng giá tiền bằng number_format -->
                            <p class="card-text text-danger fw-bold fs-5 mt-auto mb-3"><?= number_format($prod['price'], 0, ',', '.') ?> VNĐ</p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-outline-secondary">Xem chi tiết</a>
                                <a href="#" class="btn btn-primary">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- 4. Thương hiệu nổi bật -->
        <h2 class="text-center mt-5 mb-4 text-uppercase fw-bold">Thương Hiệu Đối Tác</h2>
        <?php
            $brands = ["Chanel", "Dior", "Gucci", "Tom Ford", "Versace"];
        ?>
        <div class="row text-center g-3 justify-content-center">
            <?php foreach ($brands as $brand): ?>
                <div class="col-6 col-md-2"><div class="p-3 border rounded bg-light fw-bold text-secondary"><?= $brand ?></div></div>
            <?php endforeach; ?>
        </div>

        <!-- 5. Form đăng ký nhận báo giá -->
        <h2 class="text-center mt-5 mb-4 text-uppercase fw-bold">Đăng Ký Nhận Báo Giá</h2>
        <?php
            $categories = ["Nước hoa Nam", "Nước hoa Nữ", "Nước hoa Unisex", "Giftset - Quà tặng"];
        ?>
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <form class="p-4 border rounded shadow-sm bg-white" action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Họ và tên</label>
                        <input type="text" class="form-control" name="fullname" placeholder="Nhập họ và tên" required>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="example@email.com" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Số điện thoại</label>
                            <input type="tel" class="form-control" name="phone" placeholder="09xxxxxxx" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Địa chỉ</label>
                        <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ của bạn" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Danh mục sản phẩm quan tâm</label>
                        <select class="form-select" name="category">
                            <option value="">-- Chọn danh mục --</option>
                            <?php foreach ($categories as $cat): ?>
                                <option value="<?= $cat ?>"><?= $cat ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold d-block">Hình thức nhận báo giá</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="contact_method" id="methodEmail" value="Email" checked>
                            <label class="form-check-label" for="methodEmail">Qua Email</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="contact_method" id="methodPhone" value="Điện thoại">
                            <label class="form-check-label" for="methodPhone">Qua Điện thoại</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Thời gian liên hệ thuận tiện</label>
                        <select class="form-select" name="contact_time">
                            <option value="morning">Buổi sáng (8h00 - 11h00)</option>
                            <option value="afternoon">Buổi chiều (13h00 - 17h00)</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Nội dung yêu cầu chi tiết</label>
                        <textarea class="form-control" name="message" rows="4" placeholder="Nhập yêu cầu chi tiết..."></textarea>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary px-5 py-2 fw-bold">Gửi yêu cầu</button>
                        <button type="reset" class="btn btn-secondary px-5 py-2 fw-bold">Làm mới</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- 6. Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p class="mb-0">&copy; 2026 Maya Perfume. Thực hành Lab 2 - LTW1. Coded by Nguyễn Nghĩa Nhân.</p>
        </div>
    </footer>

    <!-- Script của Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
