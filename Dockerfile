# Sử dụng môi trường PHP kèm máy chủ Apache
FROM php:8.1-apache

# Copy toàn bộ code trong thư mục hiện tại vào server
COPY . /var/www/html/

# Mở cổng 80 để web chạy
EXPOSE 80