# Mini Medical Supplies App


Week 1 PHP Lab


## Run
php -S localhost:8000 -t public

# Lab04 - PHP Secure Forms, PRG, Anti-spam & Session Login Flow

Đây là project Lab04 xây dựng hệ thống Mini Workshop Registration Portal kết hợp Login System bằng PHP thuần theo mô hình MVC đơn giản. Mục tiêu của project là áp dụng các kỹ thuật xử lý form an toàn, session security và luồng PRG (Post - Redirect - Get).

Hệ thống hỗ trợ đăng ký workshop, đăng nhập, dashboard bảo vệ bằng session, timeout phiên đăng nhập, flash message, chống spam bằng honeypot và rate limit, cùng với lưu dữ liệu vào file JSON.

## Công nghệ sử dụng
- PHP 8+
- Composer (autoload PSR-4)
- HTML/CSS
- Session PHP
- JSON storage

## Cách chạy project

Clone project:
git clone https://github.com/USERNAME/lab04-secure-form.git

Di chuyển vào thư mục:
cd lab04-secure-form

Cài autoload:
composer dump-autoload

Chạy server:
php -S localhost:8000 -t public

Truy cập:
http://localhost:8000

## Tài khoản demo
Email: admin@workshop.com  
Password: 123456

## Chức năng chính
- Đăng ký workshop (CRUD đơn giản với JSON)
- Validate server-side đầy đủ (name, email, phone, workshop)
- PRG chống submit trùng
- Flash message 1 lần
- Login / Logout bằng session
- Session regenerate ID sau login
- Dashboard chỉ cho user đăng nhập
- Session timeout tự động
- Anti-spam: honeypot + rate limit
- Logout sạch session + cookie

## Ghi chú
Project tập trung vào bảo mật web cơ bản: xử lý form an toàn, session security, chống spam và luồng PRG.
