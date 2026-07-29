<?php
// Nhúng header bằng require
require 'includes/header.php';
// Nhúng function
require 'functions/common.php';

// Khai báo 2 mảng sản phẩm
$perfumesMen = [
    ["id" => "PM01", "proname" => "Dior Sauvage", "quantity" => 15, "price" => 2800000],
    ["id" => "PM02", "proname" => "Bleu de Chanel", "quantity" => 20, "price" => 3200000],
    ["id" => "PM03", "proname" => "Versace Eros", "quantity" => 30, "price" => 2100000],
    ["id" => "PM04", "proname" => "Tom Ford Oud Wood", "quantity" => 5, "price" => 5500000],
    ["id" => "PM05", "proname" => "Giorgio Armani Acqua Di Giò", "quantity" => 25, "price" => 2300000],
    ["id" => "PM06", "proname" => "Creed Aventus", "quantity" => 10, "price" => 7500000],
    ["id" => "PM07", "proname" => "YSL Y Eau de Parfum", "quantity" => 18, "price" => 2900000],
    ["id" => "PM08", "proname" => "Paco Rabanne 1 Million", "quantity" => 22, "price" => 2400000],
    ["id" => "PM09", "proname" => "Dolce & Gabbana Light Blue", "quantity" => 12, "price" => 1900000],
    ["id" => "PM10", "proname" => "Bvlgari Aqva Pour Homme", "quantity" => 28, "price" => 1800000]
];

$perfumesWomen = [
    ["id" => "PW01", "proname" => "Chanel No.5", "quantity" => 10, "price" => 3500000],
    ["id" => "PW02", "proname" => "Gucci Bloom", "quantity" => 15, "price" => 2400000],
    ["id" => "PW03", "proname" => "YSL Libre", "quantity" => 20, "price" => 3100000],
    ["id" => "PW04", "proname" => "Kilian Good Girl Gone Bad", "quantity" => 8, "price" => 6500000],
    ["id" => "PW05", "proname" => "Dior J'adore", "quantity" => 18, "price" => 3300000],
    ["id" => "PW06", "proname" => "Lancôme La Vie Est Belle", "quantity" => 25, "price" => 2600000],
    ["id" => "PW07", "proname" => "Marc Jacobs Daisy", "quantity" => 30, "price" => 2100000],
    ["id" => "PW08", "proname" => "Carolina Herrera Good Girl", "quantity" => 22, "price" => 2900000],
    ["id" => "PW09", "proname" => "Jo Malone English Pear & Freesia", "quantity" => 12, "price" => 3800000],
    ["id" => "PW10", "proname" => "Tom Ford Black Orchid", "quantity" => 14, "price" => 4200000]
];
?>

<!-- Main Content -->
<main class="container my-5">
    <!-- Hero Section -->
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg mb-5 bg-white">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Maya Perfume - Quản lý Kho Hàng</h1>
            <p class="lead mt-3">Hệ thống quản lý nội bộ các dòng sản phẩm nước hoa Nam và Nữ với đầy đủ số lượng, giá nhập chi tiết và thống kê tồn kho.</p>
        </div>
        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
            <img class="rounded-lg-3" src="https://images.unsplash.com/photo-1541643600914-78b084683601?w=720&q=80" alt="Perfume" width="720" style="object-fit:cover; height: 350px;">
        </div>
    </div>

    <!-- Tables Section -->
    <div class="row">
        <div class="col-12">
            <?php 
                // Danh sách 1: Định dạng mặc định (0 số thập phân, VNĐ)
                showProductTable($perfumesMen, "Kho Nước Hoa Nam"); 
                
                // Danh sách 2: Có 02 chữ số thập phân, VNĐ
                showProductTable($perfumesWomen, "Kho Nước Hoa Nữ", "VNĐ", 2); 
            ?>
        </div>
    </div>
</main>

<?php
// Nhúng footer bằng require
require 'includes/footer.php';
?>
