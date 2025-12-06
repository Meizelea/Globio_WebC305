# Globio 🌐

![Project Status](https://img.shields.io/badge/status-active-success.svg)
![License](https://img.shields.io/badge/license-MIT-blue.svg)
![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=flat&logo=laravel&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=flat&logo=tailwind-css&logoColor=white)

**Globio** is a robust web application built using the **Laravel** framework and styled with **Tailwind CSS**. This project serves as a portfolio/content management system featuring secure admin authentication, dynamic image handling, and a responsive modern UI.

---

## 📸 Screenshots

![Portfolio Preview](public/images/pic.jpg)
*(Replace the path above with your actual screenshot path if different)*

---

## 🚀 Features

* **Secure Authentication**: Custom Admin login system with validation and error handling.
* **Modern UI/UX**: Fully responsive design using Tailwind CSS utility classes.
* **Dynamic Content**: Efficient handling of static and user-uploaded assets (Storage linking).
* **Dashboard**: Protected routes and dashboard views for content management.

---

## 🛠️ Built With

* [Laravel](https://laravel.com) - The PHP Framework for Web Artisans
* [Tailwind CSS](https://tailwindcss.com) - A utility-first CSS framework
* [MySQL](https://www.mysql.com/) - Relational Database Management System

---

## 💻 Getting Started

Follow these steps to set up the project locally on your machine.

### Prerequisites

* PHP >= 8.1
* Composer
* Node.js & NPM

### Installation

1.  **Clone the repository**
    ```bash
    git clone [https://github.com/Meizelea/Globio_WebC305.git](https://github.com/Meizelea/Globio_WebC305.git)
    cd Globio_WebC305
    ```

2.  **Install PHP dependencies**
    ```bash
    composer install
    ```

3.  **Install NPM dependencies**
    ```bash
    npm install
    npm run build
    ```

4.  **Environment Setup**
    ```bash
    cp .env.example .env
    ```
    *Open `.env` and configure your database credentials (DB_DATABASE, DB_USERNAME, etc.)*

5.  **Generate Application Key**
    ```bash
    php artisan key:generate
    ```

6.  **Run Migrations**
    ```bash
    php artisan migrate
    ```

7.  **Link Storage** (Important for images!)
    ```bash
    php artisan storage:link
    ```

8.  **Run the Server**
    ```bash
    php artisan serve
    ```

Access the application at `http://localhost:8000`.

---

## 📂 Project Structure

```text
Globio_WebC305/
├── app/             # Application logic (Controllers, Models)
├── resources/
│   ├── css/         # Tailwind imports
│   └── views/       # Blade templates (Login, Dashboard)
├── public/
│   └── images/      # Static assets (logo, placeholders)
├── routes/          # Web and API routes
└── ...
