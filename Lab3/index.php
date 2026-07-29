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

    <!-- Tables Section -->
    <div class="row">
        <div class="col-12">
            <?php
            // Danh sách 1: Định dạng mặc định (0 số thập phân, VNĐ)
            showProductTable($perfumesMen, "Kho Nước Hoa Nam");

            // Danh sách 2: Có 02 chữ số thập phân, VNĐ
            showProductTable($perfumesWomen, "Kho Nước Hoa Nữ", "VNĐ");
            ?>
        </div>
    </div>

    <!-- main -->
    <section class="mt-5">
        <h3>Lorem ipsum dolor sit amet.</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime quaerat illum architecto voluptatem mollitia voluptatum enim, beatae eligendi doloribus perspiciatis cupiditate ducimus odit sunt neque adipisci est ex laboriosam consectetur debitis qui et provident voluptate velit? Rem libero natus voluptas provident voluptatum molestiae praesentium? Ut aut eos laborum atque animi pariatur repellendus! Delectus quaerat veniam corrupti exercitationem harum consequatur minima. Consequatur error et voluptates accusamus voluptas exercitationem nemo ea porro aut corrupti atque doloribus saepe sint obcaecati, rem alias animi reprehenderit. Cupiditate dicta quos necessitatibus magni consectetur. Aperiam, ipsum magnam assumenda quidem animi architecto soluta esse illo earum. Impedit.</p>
    </section>
</main>

<?php
// Nhúng footer bằng require
require 'includes/footer.php';
?>