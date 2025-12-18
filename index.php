<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
</head>
<body>
     <h1> Bai Kiem tra-DH52201771_ca2</h1>

    <h1>Danh sách sản phẩm từ Railway</h1>
    <ul id="list">Đang tải dữ liệu...</ul>

    <script>

        fetch('/get_products.php') 
            .then(response => response.json())
            .then(data => {
                const list = document.getElementById("list");
                list.innerHTML = ""; 
                
 
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


</html>