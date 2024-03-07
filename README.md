# TikTrendShop

Tập tành phát triển dự án sàn thương mại điện tử TikTrendShop

## Cài Đặt

1. Clone dự án từ GitHub:

   ```bash
   git clone https://github.com/Nhom-4-DATN/TenDuAn.git
2. Cài đặt Composer:
   ```bash
   composer install
3. Sao chép tệp .env.example và đổi tên thành .env:
   ```bash
   cp .env.example .env
4. Cấu hình thông tin cơ sở dữ liệu trong tệp .env.
5. Chạy các lệnh sau để chạy migration và seed dữ liệu:
   ```bash
   php artisan migrate
   php artisan db:seed
7. Chạy Laravel:
   ```bash
   php artisan serve
Ứng dụng sẽ chạy tại http://localhost:8000.
