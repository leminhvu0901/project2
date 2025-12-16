FROM php:8.1-cli

# Cài đặt extension mysqli để kết nối Database (Dòng quan trọng mới thêm)
RUN docker-php-ext-install mysqli

# Copy code vào thư mục app
COPY . /app
WORKDIR /app

# Chạy server
CMD php -S 0.0.0.0:$PORT