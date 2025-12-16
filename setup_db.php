<?php
// 1. Kết nối Database
$servername = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASS');
$dbname = getenv('DB_NAME');
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// 2. Tạo bảng sản phẩm (Nếu chưa có)
$sql_table = "CREATE TABLE IF NOT EXISTS products (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    price INT(10) NOT NULL,
    description TEXT
)";

if ($conn->query($sql_table) === TRUE) {
    echo "✅ Đã tạo bảng 'products' thành công!<br>";
} else {
    echo "❌ Lỗi tạo bảng: " . $conn->error . "<br>";
}

// 3. Thêm dữ liệu mẫu (Nếu bảng đang trống)
$check_empty = $conn->query("SELECT count(*) as total FROM products");
$row = $check_empty->fetch_assoc();

if ($row['total'] == 0) {
    $sql_insert = "INSERT INTO products (name, price, description) VALUES 
    ('iPhone 15 Pro', 25000000, 'Điện thoại xịn nhất quả đất'),
    ('Samsung S24', 20000000, 'Camera zoom cực đỉnh'),
    ('Laptop Gaming', 30000000, 'Chiến mọi loại game')";

    if ($conn->query($sql_insert) === TRUE) {
        echo "✅ Đã thêm dữ liệu mẫu thành công!";
    } else {
        echo "❌ Lỗi thêm dữ liệu: " . $conn->error;
    }
} else {
    echo "ℹ️ Bảng đã có dữ liệu, không cần thêm nữa.";
}
?>