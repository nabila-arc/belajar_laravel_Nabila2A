# Belajar Laravel — Daftar Mahasiswa & Kalkulator Geometri

Repositori praktikum pengembangan aplikasi web menggunakan framework **Laravel** yang mengimplementasikan konsep dasar *Routing*, *Controller*, *Blade Templating*, dan pengolahan input *Form*.

---

## Identitas Pembuat

| Keterangan | Detail |
| :--- | :--- |
| **Nama** | Nabila Nur Imtiyaaz |
| **Kelas** | 2A |
| **Program Studi** | Sistem Informasi |
| **Perguruan Tinggi** | Universitas Nusantara PGRI Kediri |
| **Akun GitHub** | [@nabila-arc](https://github.com/nabila-arc) |
| **Repositori** | [belajar_laravel_Nabila2A](https://github.com/nabila-arc/belajar_laravel_Nabila2A) |

---

## Fitur Aplikasi

<img width="1366" height="720" alt="mahasiswa" src="https://github.com/user-attachments/assets/64ea8771-160e-45fa-b813-8a69ada91d0c" />

1. **Data Akademik — Daftar Mahasiswa (`/daftar/mahasiswa`)**
   - Menampilkan tabel daftar mahasiswa yang memuat informasi **Nama**, **Alamat**, dan **Gender** (`L` / `P`).
   - Dilengkapi indikator total jumlah mahasiswa pada bagian bawah tabel.

<img width="1366" height="739" alt="kalkulator" src="https://github.com/user-attachments/assets/6351f650-f6c0-4b57-83d6-0181888fa648" />
<img width="1366" height="726" alt="hasil" src="https://github.com/user-attachments/assets/8fc0fbe3-a5c7-4c0c-b33d-03494d9ec570" />

2. **Kalkulator Geometri — Hitung Luas Segitiga (`/kalkulator/segitiga`)**
   - Menyediakan antarmuka formulir input **Alas (cm)** dan **Tinggi (cm)**.
   

---

## Daftar Route Utama

| Method | Endpoint URL | Deskripsi Halaman |
| :--- | :--- | :--- |
| `GET` | `/daftar/mahasiswa` | Menampilkan halaman tabel daftar mahasiswa |
| `GET` | `/kalkulator/segitiga` | Menampilkan halaman formulir kalkulator luas segitiga |
| `POST` | `/kalkulator/segitiga` | Memproses perhitungan luas segitiga dari input form |

---

## Peta Struktur Inti Proyek

Seluruh kode sumber aplikasi Laravel berada di dalam direktori `web-app/`:

```text
belajar_laravel_Nabila2A/
└── web-app/
    ├── app/
    │   ├── Http/
    │   │   └── Controllers/        # Logika pemrosesan data mahasiswa & kalkulator
    │   ├── Models/                 # Model representasi data aplikasi
    │   └── Providers/              # Service provider inti aplikasi
    ├── bootstrap/                  # File inisialisasi dan cache framework Laravel
    ├── config/                     # Pengaturan konfigurasi aplikasi (app, database, dll.)
    ├── database/                   # Migrasi tabel, factory, dan seeder database
    ├── public/                     # Entry point publik (index.php) & aset statis
    ├── resources/
    │   ├── css/                    # File stylesheet aplikasi
    │   ├── js/                     # File JavaScript aplikasi
    │   └── views/                  # Template tampilan antarmuka (.blade.php)
    ├── routes/
    │   └── web.php                 # Definisi rute URL web (/daftar/mahasiswa, /kalkulator/segitiga)
    ├── storage/                    # Penyimpanan log, session, dan file terkompilasi
    ├── tests/                      # Pengujian otomatis (Feature & Unit Test)
    ├── .env.example                # Contoh konfigurasi environment variabel
    ├── artisan                     # Antarmuka baris perintah (CLI) bawaan Laravel
    ├── composer.json               # Daftar dependensi PHP & Laravel
    ├── package.json                # Daftar dependensi aset front-end (Node/Vite)
    └── vite.config.js              # Konfigurasi asset bundler Vite
```


# BAB Sistem Templating Laravel (Blade)

Repository ini berisi hasil pengerjaan tugas **Pemrograman Web SI 2A** melanjutkan modul praktikum framework Laravel pada bagian **Sistem Templating** (Halaman 12–19), mencakup pembagian struktur *layout* menggunakan Blade (`@include`, `@yield`, `@extends`, `@section`), pengelolaan aset CSS, serta konfigurasi *controller* dan *routing*.


## Fitur yang Dikerjakan (Bab Sistem Templating)
* **Master Layout (`dashboard.blade.php`):** Kerangka utama halaman web yang menggabungkan komponen *header*, *sidebar*, dan area konten dinamis menggunakan `@yield('content')`.
* **Komponen Parsial (`resources/views/template/`):** Pemisahan bagian `header.blade.php` dan `sidebar.blade.php` agar mudah dipelihara dan dipanggil ulang dengan `@include`.
* **Halaman Konten (`home.blade.php` & `gallery.blade.php`):** Implementasi pewarisan tampilan menggunakan `@extends('dashboard')` dan `@section('content')`.
* **Styling CSS (`public/css/style.css`):** Pengaturan tata letak (*container*, *banner*, *sidebar* navigasi, dan area konten) yang dipanggil menggunakan helper `{{ asset('css/style.css') }}`.
* **Controller & Routing:** Pengaturan logika tampilan dan *parsing* data judul halaman melalui `DashboardController` serta pendaftaran rute `/dashboard` dan `/gallery` pada `routes/web.php`.

---
## Fitur aplikasi
1. **Sistem Templating Blade – Halaman Home (`/dashboard`)**
   <img width="1366" height="733" alt="Halaman Home" src="https://github.com/user-attachments/assets/6ca06157-ae97-4e4f-88a3-11686fd18428" />

   - Menerapkan pewarisan tata letak (*master layout*) `dashboard.blade.php` dengan pemisahan komponen parsial `header.blade.php` dan `sidebar.blade.php` menggunakan direktif `@include`, `@extends`, dan `@yield('content')`.
   - Menampilkan navigasi sidebar dan area konten dinamis untuk halaman utama.

2. **Sistem Templating Blade – Halaman Gallery (`/gallery`)**
   <img width="1366" height="736" alt="Halaman Galeri" src="https://github.com/user-attachments/assets/15a49102-71c4-47a2-b368-0da552a2f3d3" />

   - Menggunakan kerangka tampilan utama `dashboard.blade.php` yang sama tanpa menulis ulang struktur HTML dari awal.
   - Menampilkan galeri gambar dinamis melalui `DashboardController@gallery`.

## Struktur Folder Utama
```text
belajar_laravel_Nabila2A/
└── web-app/
    ├── app/
    │   └── Http/
    │       └── Controllers/
    │           └── DashboardController.php
    ├── public/
    │   └── css/
    │       └── style.css
    ├── resources/
    │   └── views/
    │       ├── template/
    │       │   ├── header.blade.php
    │       │   └── sidebar.blade.php
    │       ├── dashboard.blade.php
    │       ├── gallery.blade.php
    │       └── home.blade.php
    └── routes/
        └── web.php
```
## Daftar Endpoint / URL

| Method | URL | Controller & Method | Keterangan |
| :--- | :--- | :--- | :--- |
| `GET` | `/dashboard` | `DashboardController@home` | Menampilkan laman utama (Home) dengan layout template |
| `GET` | `/gallery` | `DashboardController@gallery` | Menampilkan laman Gallery dengan layout template yang sama |


# BAB Fitur CRUD 

Repositori praktikum mata kuliah **Pemrograman Web** menggunakan framework **Laravel** yang mencakup implementasi *Routing*, *Controller*, *Blade Templating*, serta operasi *CRUD (Create, Read, Update, Delete)* dengan database **MySQL** pada halaman 19-27.

## Fitur yang Telah Diimplementasikan (Bab Fitur CRUD)

1. **Integrasi Database MySQL & Model Eloquent**
   - Menghubungkan aplikasi Laravel ke database **`company`** pada MySQL (XAMPP)[cite: 1, 6].
   - Konfigurasi model Eloquent **`Employe`** (`app/Models/Employe.php`) yang dipetakan ke tabel **`employes`** dengan primary key `id` serta pengaturan *mass assignment* (`$fillable`) untuk kolom `id`, `nama`, `alamat`, `gender`, dan `gaji`.
2. **Read / Tampil Data Pegawai (`/employe`)**
   - Mengambil seluruh rekaman data pegawai dari tabel `employes` menggunakan metode `Employe::all()` pada **`EmployeController@index`**.
   - Menampilkan data ke dalam tabel terstruktur pada view **`tampil_data.blade.php`** yang terintegrasi dengan *master layout* Blade (`@extends('dashboard')` dan `@section('content')`).
   - Menyediakan antarmuka kolom aksi (**Edit** dan **Delete**) pada setiap baris data pegawai.

     <img width="1366" height="742" alt="database CRUD" src="https://github.com/user-attachments/assets/fa102abc-9200-4ba9-9c41-afb108bea9da" />
     <img width="1366" height="733" alt="edit" src="https://github.com/user-attachments/assets/497c7c4e-8dd8-4436-86e1-cc37310b3b87" />


---

## Struktur Utama Proyek (`web-app/`)

```text
web-app/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── DashboardController.php
│   │       ├── EmployeController.php
│   │       ├── KalkulatorController.php
│   │       ├── MahasiswaController.php
│   │       └── Web.php
│   └── Models/
│       └── Employe.php
├── public/
│   ├── css/
│   └── js/
├── resources/
│   └── views/
│       ├── kalkulator/
│       ├── layouts/
│       ├── mahasiswa/
│       ├── template/
│       ├── dashboard.blade.php
│       ├── gallery.blade.php
│       └── tampil_data.blade.php
├── routes/
│   └── web.php
└── README.md
```
## Konfigurasi Database (`MySQL / XAMPP`)
<img width="1366" height="739" alt="employes" src="https://github.com/user-attachments/assets/ad3a7d6a-193c-437c-bfa0-348bb0a7b73b" />

- **Nama Database:** `company`
- **Nama Tabel:** `employes`

| Kolom | Tipe Data | Keterangan |
| :--- | :--- | :--- |
| `id` | `INT(11)` | Primary Key (`AUTO_INCREMENT`) |
| `nama` | `VARCHAR(100)` | Nama lengkap pegawai |
| `alamat` | `TEXT` | Alamat domisili pegawai |
| `gender` | `ENUM('L', 'P')` | Jenis kelamin (`L` = Laki-laki, `P` = Perempuan) |
| `gaji` | `INT(11)` | Nominal gaji pegawai |
| `created_at` | `TIMESTAMP` | Waktu data dibuat |
| `updated_at` | `TIMESTAMP` | Waktu data diperbarui |
---

## Daftar Endpoint / URL

| Method | Endpoint / URL | Controller & Method | Deskripsi |
| :--- | :--- | :--- | :--- |
| `GET` | `/` | `Web@index` | Halaman beranda utama aplikasi |
| `GET` | `/dashboard` | `DashboardController@index` | Halaman utama dashboard dengan master layout |
| `GET` | `/gallery` | `DashboardController@gallery` | Halaman galeri menggunakan template layout |
| `GET` | `/mahasiswa` | `MahasiswaController@index` | Menampilkan daftar data mahasiswa |
| `GET` | `/kalkulator` | `KalkulatorController@index` | Menampilkan halaman form kalkulator geometri |
| `POST` | `/kalkulator` | `KalkulatorController@hitung` | Memproses perhitungan rumus geometri dari input form |
| `GET` | `/employe` | `EmployeController@index` | Menampilkan seluruh data pegawai dari tabel `employes` |
---

## Cara Menjalankan Proyek Secara Lokal untuk CRUD

1. **Sesuaikan koneksi database di file `.env`:**
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=company
   DB_USERNAME=root
   DB_PASSWORD=
   ```
2. **Jalankan migrasi & server lokal:**
   ```bash
   php artisan migrate
   php artisan serve
   ```
## Cara Menjalankan di Komputer Lokal

1. **Clone repositori dan masuk ke folder proyek:**
   ```bash
   git clone [https://github.com/nabila-arc/belajar_laravel_Nabila2A.git](https://github.com/nabila-arc/belajar_laravel_Nabila2A.git)
   cd belajar_laravel_Nabila2A/web-app
   ```

2. **Instal dependensi PHP:**
   ```bash
   composer install
   ```

3. **Salin file konfigurasi `.env` dan buat *application key*:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Jalankan server lokal Laravel:**
   ```bash
   php artisan serve
   ```
   **Buka browser dan akses:**
    | Halaman | Link URL |
    | :--- | :--- |
    | Halaman Mahasiswa | `http://127.0.0.1:8000/daftar/mahasiswa` |
    | Halaman Kalkulator | `http://127.0.0.1:8000/kalkulator/segitiga` |
    | Halaman Home | `http://127.0.0.1:8000/dashboard` |
    | Halaman Gallery | `http://127.0.0.1:8000/gallery` |
    | Halaman CRUD data pegawai | `http://127.0.0.1:8000/employe` |

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
