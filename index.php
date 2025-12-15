<?php
// Cho phép mọi trang web (Frontend) đều có thể gọi tới Backend này (CORS)
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Dữ liệu giả lập (Database)
$data = [
    "status" => "success",
    "message" => "Xin chào! Đây là dữ liệu từ Backend PHP",
    "student" => "Lê Minh Vũ",
    "time" => date("Y-m-d H:i:s")
];

// Trả dữ liệu về
echo json_encode($data);
?>