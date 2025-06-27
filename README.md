# Exam Manager App

A Laravel-based web application for managing university exams. Built with Laravel Breeze and Tailwind CSS.

## 🎯 Features

- User registration and login (Laravel Breeze)
- Role-based access:
  - **User** can view and add/edit exam records
  - **Admin** can delete exams
- Grades are color-coded:
  - 1–3 = Red (fail)
  - 4–10 = Green (pass)
  - Null = Black (not graded)

## 🧱 Tech Stack

- Laravel 10
- Laravel Breeze (for authentication)
- Tailwind CSS
- MySQL (local DB)

## Screenshots
![Screenshot 2025-06-27 at 19 38 19](https://github.com/user-attachments/assets/5f9ba02b-35a3-49d1-a8b8-28b2e4d36b8f)
![Screenshot 2025-06-27 at 19 38 23](https://github.com/user-attachments/assets/08508fcc-c460-476b-8aee-42bf655c6f8f)
![Screenshot 2025-06-27 at 19 38 46](https://github.com/user-attachments/assets/ff0d5432-2ce4-41b7-abe4-46381fb5b46b)


## 📦 Setup

```bash
git clone https://github.com/rsilinevich/exam-management-laravel
cd exam-management-laravel
composer install
npm install && npm run dev
php artisan migrate
php artisan serve
