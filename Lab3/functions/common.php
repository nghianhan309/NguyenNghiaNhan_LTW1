<?php
// Tính tổng số lượng sản phẩm
function getTotalQuantity($products) {
    $total = 0;
    foreach ($products as $prod) {
        $total += $prod['quantity'];
    }
    return $total;
}

// Tính tổng giá nhập của tất cả sản phẩm
function getTotalPrice($products) {
    $total = 0;
    foreach ($products as $prod) {
        $total += ($prod['price'] * $prod['quantity']);
    }
    return $total;
}

/**
 * Summary of functionTest1
 * @param mixed $price
 * @param mixed $currency
 * @return string
 */
function functionTest1($price, $currency="đ") {
    return number_format($price, 0, ',', '.') . ' ' . $currency;
}

// Hiển thị danh sách sản phẩm theo dạng bảng
function showProductTable($products, $tableTitle, $currency = 'VNĐ') {
    echo '<div class="card mb-5 shadow-sm border-0">';
    echo '<div class="card-header bg-dark text-white text-uppercase fw-bold h5 py-3">' . $tableTitle . '</div>';
    echo '<div class="card-body p-0">';
    echo '<div class="table-responsive">';
    echo '<table class="table table-hover table-bordered mb-0 align-middle">';
    echo '<thead class="table-light text-center">';
    echo '<tr>';
    echo '<th>Mã SP</th>';
    echo '<th>Tên Sản Phẩm</th>';
    echo '<th>Số Lượng</th>';
    echo '<th>Giá Nhập</th>';
    echo '<th>Thành Tiền</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    
    foreach ($products as $prod) {
        $subTotal = $prod['price'] * $prod['quantity'];
        echo '<tr>';
        echo '<td class="text-center">' . $prod['id'] . '</td>';
        echo '<td class="fw-bold">' . $prod['proname'] . '</td>';
        echo '<td class="text-center">' . $prod['quantity'] . '</td>';
        echo '<td class="text-end text-danger">' . functionTest1($prod['price'], $currency) . '</td>';
        echo '<td class="text-end text-success fw-bold">' . functionTest1($subTotal, $currency) . '</td>';
        echo '</tr>';
    }
    
    echo '</tbody>';
    echo '<tfoot class="table-secondary">';
    echo '<tr>';
    echo '<td colspan="2" class="text-end fw-bold text-uppercase">Tổng Cộng:</td>';
    echo '<td class="text-center fw-bold fs-5">' . getTotalQuantity($products) . '</td>';
    echo '<td></td>';
    echo '<td class="text-end fw-bold fs-5 text-danger">' . functionTest1(getTotalPrice($products), $currency) . '</td>';
    echo '</tr>';
    echo '</tfoot>';
    echo '</table>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

// --- THỐNG KÊ DASHBOARD SINH VIÊN ---

function countStudents($students) {
    return count($students);
}

function countMaleStudents($students) {
    $count = 0;
    foreach ($students as $student) {
        if (strtolower($student->gender) === 'nam') $count++;
    }
    return $count;
}

function countFemaleStudents($students) {
    $count = 0;
    foreach ($students as $student) {
        if (strtolower($student->gender) === 'nữ' || strtolower($student->gender) === 'nu') $count++;
    }
    return $count;
}

function countScholarshipStudents($students) {
    $count = 0;
    foreach ($students as $student) {
        if ($student->getScholarship()) $count++;
    }
    return $count;
}

function countExcellentStudents($students) {
    $count = 0;
    foreach ($students as $student) {
        if ($student->getRank() === 'Xuất sắc') $count++;
    }
    return $count;
}

function getAverageScore($students) {
    if (count($students) === 0) return 0;
    $total = 0;
    foreach ($students as $student) {
        $total += $student->getAverage();
    }
    return round($total / count($students), 2);
}

function getHighestAverage($students) {
    if (count($students) === 0) return 0;
    $max = 0;
    foreach ($students as $student) {
        if ($student->getAverage() > $max) {
            $max = $student->getAverage();
        }
    }
    return $max;
}

function getLowestAverage($students) {
    if (count($students) === 0) return 0;
    $min = 10;
    foreach ($students as $student) {
        if ($student->getAverage() < $min) {
            $min = $student->getAverage();
        }
    }
    return $min;
}
?>
