<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <h1>Danh sách sản phẩm từ Railway</h1>
    <ul id="list">Đang tải dữ liệu...</ul>

    <script>
        // Gọi API từ Backend
        fetch('/get_products.php') // Dùng đường dẫn tương đối cho gọn
            .then(response => response.json())
            .then(data => {
                const list = document.getElementById("list");
                list.innerHTML = ""; // Xóa chữ "Đang tải..."
                
                // Duyệt qua từng sản phẩm và hiện lên màn hình
                data.forEach(product => {
                    const li = document.createElement("li");
                    li.innerHTML = `<strong>${product.name}</strong> - ${parseInt(product.price).toLocaleString()} VNĐ`;
                    list.appendChild(li);
                });
            })
            .catch(error => {
                console.error('Lỗi:', error);
                document.getElementById("list").innerHTML = "Lỗi không tải được dữ liệu!";
            });
    </script>
</body>

<h1> LE MINH VU _ DH52201771 hi hi hi </h1>
</html>