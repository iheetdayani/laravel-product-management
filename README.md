# 🛒 Laravel Product Management System

A simple and practical **Product Management System built with Laravel** to demonstrate core Laravel concepts through a complete CRUD application.

This project was developed as a hands-on learning project to understand how Laravel handles **routing, controllers, models, Blade views, Eloquent ORM, MySQL, form requests, search, pagination, and session flash messages**.

---

## 🚀 Features

- ✅ Add Product
- ✅ Display All Products
- ✅ Update Product
- ✅ Delete Product
- ✅ Search Products by Name
- ✅ Pagination
- ✅ Form Validation
- ✅ Session Flash Messages
- ✅ Bootstrap UI
- ✅ Laravel Resource Routes
- ✅ Eloquent ORM
- ✅ MySQL Database

---

## 🛠️ Tech Stack

| Technology | Usage |
|------------|-------|
| PHP 8.2+ | Backend Programming |
| Laravel 12 | Web Application Framework |
| MySQL | Database |
| Blade | Template Engine |
| Bootstrap 5 | Frontend UI |
| HTML5 | Structure |
| CSS3 | Styling |

---

## 📂 Project Structure

```text
laravel-product-management/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── ProductController.php
│   │
│   └── Models/
│       └── Product.php
│
├── database/
│   └── migrations/
│       └── create_products_table.php
│
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── create.blade.php
│       ├── edit.blade.php
│       ├── index.blade.php
│       └── show.blade.php
│
├── routes/
│   └── web.php
│
├── public/
│   └── bootstrap-5.0.2-dist/
│
├── .env.example
├── artisan
├── composer.json
└── README.md
