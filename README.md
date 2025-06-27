# Exam Manager App

A full-stack Laravel MVC application with CRUD functionality, built to manage university exam records. Users can create, view, and edit exams, while admins have full control, including delete access. The project uses Laravel Breeze for authentication and Tailwind CSS for styling. Exam grades are color-coded for quick visual feedback.

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
![Screenshot 2025-06-27 at 19 38 46](https://github.com/user-attachments/assets/ff0d5432-2ce4-41b7-abe4-46381fb5b46b)

## 🚧 Future Improvements

- Link exam records to individual users
- Improve responsive design


## 🧠 What I Learned

- Working with Laravel Breeze and Tailwind CSS
- Working with MVC (Model-View-Controller)
- Implementing authorization with Laravel policies
- Structuring a full Laravel CRUD app

## 📦 Setup

```bash
git clone https://github.com/rsilinevich/exam-management-laravel
cd exam-management-laravel
composer install
npm install && npm run dev
php artisan migrate
php artisan serve
