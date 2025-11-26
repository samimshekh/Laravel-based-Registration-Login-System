# Laravel Simple User Authentication System  
**Features:** Register • Login • Logout • Protected Dashboard

Ye ek simple Laravel authentication system hai jisme user sirf **username** aur **password** ke through register aur login kar sakta hai. Login ke baad user ko apna **personal dashboard** show hota hai jisme uski details hoti hain.  

---

## Features
- User Registration (username + password)
- User Login (session based)
- User Logout
- Protected Dashboard (sirf login hone ke baad access)
- Guest Middleware (login user ko login/register page nahi dikhega)
- Modern UI (Login + Register + Dashboard styled)
- Secure password hashing
- Session-based auth handling

---

## Installation Guide

### 1. Clone Project
```

git clone https://github.com/samimshekh/Laravel-based-Registration-Login-System.git
cd Laravel-based-Registration-Login-System
```

### 2. Environment Setup
```
# 1. Install dependencies
composer install

# 2. Create environment file
cp .env.example .env

```

### 3. App Key Generate
```

php artisan key:generate

```

### 4. Database Configure  
`.env` file me database config set kare:

```

DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
SESSION_DRIVER=file

```

### 5. Migrations Run
```

php artisan migrate

```

### 6. Start Development Server
```

php artisan serve
# open url http://*:* 
```

---

## Authentication Flow

### Register
User username + password create karega  
Password auto-hashed store hota hai.

### Login
User apne username + password se login karega.  
Login successful hone par dashboard par redirect hota hai.

### Dashboard (Protected Route)
Dashboard **sirf logged-in** users ke liye accessible hai.

### Logout
Session destroy hota hai aur user login page par redirect hota hai.

---

## Routes Overview

| Route | Method | Description |
|------|--------|-------------|
| `/register` | GET | Register page |
| `/register` | POST | User register |
| `/login` | GET | Login page |
| `/login` | POST | User login |
| `/dashboard` | GET | Protected dashboard |
| `/logout` | POST | Logout |

`auth` middleware → dashboard  
`guest` middleware → login/register  

---

## UI (Pages Included)
- **Login Page** — modern centered card UI  
- **Register Page** — same theme  
- **Dashboard Page** — clean profile box + logout button  

---

## Requirements
- PHP 8.1+
- Composer
- Laravel 10/11
- MySQL / MariaDB
- Node (optional, agar aap Mix/Vite use karein)

---

## Notes
- System sirf username + password use karta hai (email optional nahi).  
- Password hashing Laravel `Hash::make()` se hota hai.  
- Session-based auth completely Laravel standard ke hisaab se likha gaya hai.  
- Ye project beginners aur small authentication systems ke liye perfect hai.
