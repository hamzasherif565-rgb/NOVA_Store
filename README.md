<div align="center">

# 🛒 NovaStore - Modern E-Commerce Platform

[![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.x-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)

*A clean, feature-rich, and fully modernized e-commerce application built with Laravel and Tailwind CSS.*

</div>

---

## 🌟 About NovaStore

**NovaStore** is a complete, lightweight e-commerce web application designed with a sleek, modern UI/UX using **Tailwind CSS**. It provides a robust control panel for managing inventory, categories, and customer interactions, seamlessly integrated with **Laravel Breeze** authentication.

---

## ✨ Key Features

- **🔐 Modern Authentication Suite:** Complete guest authentication views (Login, Register, Forgot Password, Reset Password, Email Verification, and Confirm Password) styled with a unified brand aesthetic.
- **📦 Product Management:** Full CRUD operations for products, featuring pricing, stock tracking, category association, and optional image management support.
- **📂 Category Organization:** Structured category resource management with optimized routing to prevent conflict between static endpoints and dynamic parameters.
- **📊 Admin Control Panel:** A centralized dashboard providing quick navigation and inventory management metrics.
- **📱 Responsive UI:** Built from the ground up with **Tailwind CSS** for a fully responsive mobile-first experience.
- **📄 Informational Pages:** Includes beautifully styled **About Us** and **Contact Us** views.

---

## 🛠️ Tech Stack

- **Backend:** PHP, Laravel Framework
- **Frontend Styling:** Tailwind CSS, Blade Templates
- **Authentication:** Laravel Breeze
- **Database:** MySQL / SQLite

---

## 🚀 Getting Started

Follow these steps to set up the project locally on your machine:

### 1. Clone the Repository
```bash
git clone https://github.com/your-username/novastore.git
cd novastore
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Environment Configuration
Copy the example environment file and generate the application key:
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Database Setup
Configure your database connection details in the `.env` file, then run migrations:
```bash
php artisan migrate
```

### 5. Link Storage (for product images)
```bash
php artisan storage:link
```

### 6. Run the Development Server
Start the local development server and Vite asset compiler:
```bash
# Terminal 1: Run Laravel Server
php artisan serve

# Terminal 2: Run Vite Asset Builder
npm run dev
```

Visit `http://127.0.0.1:8000` in your browser to explore NovaStore!

---

## 📂 Project Routing Structure

| Method | URI | Action / Route Name | Description |
| :--- | :--- | :--- | :--- |
| `GET` | `/` | `welcome` | Storefront Homepage |
| `GET` | `/dashboard` | `dashboard` | Admin Control Panel (Auth protected) |
| `GET`/`POST` | `/Categorys/*` | `Categorys.*` | Category Resource Management |
| `GET`/`POST` | `/Products/*` | `Products.*` | Product Inventory Management |
| `GET` | `/about` | `about` | About Us view |
| `GET` | `/contact` | `contact` | Contact Us view |

---

## 🤝 Contributing

Contributions, issues, and feature requests are welcome! Feel free to check issues page or submit a pull request.

---

## 📄 License

This project is open-source software licensed under the [MIT license](LICENSE).