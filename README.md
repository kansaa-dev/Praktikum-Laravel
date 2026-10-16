## Tentang Praktikum ini

Praktikum ini kedepannya membahas tentang penggunaan teknologi pada Laravel

Teknologi yang digunakan :
- PHP
- Laravel 12
- Composer
- Node.js
- NPM
- Git
- MySQL

## Persyaratan

Sebelum menjalankan project, pastikan sudah menginstall :

- PHP
- Composer
- Node.js
- Git
- MySQL / XAMPP / Laragon

# Pengembangan terbaru

# Sistem Informasi Manajemen Surat (Surat Masuk & Surat Keluar) (15/10/2026) Pertemuan Ke-3

## Fitur & Fitur Utama Saat Ini
* **Dashboard Utama**: Halaman awal aplikasi.
* **Modul Surat Masuk**: Menampilkan daftar surat masuk dan detail surat berdasarkan ID menggunakan simulasi *dummy data*.
* **Modul Surat Keluar**: Menampilkan daftar surat keluar dan detail surat berbasis ID dengan parameter dinamis.
* **Sistem Layouting Global**: Menggunakan satu master layout induk untuk efisiensi kode tampilan UI.

---

## Struktur Komponen dan Alur Kerja (MVC)

Proyek saat ini berfokus pada hubungan integrasi antara tiga komponen utama Laravel:

### 1. Rute Aplikasi (`routes/web.php`)
Mengatur lalu lintas URL dan memetakan setiap permintaan pengguna ke *Controller* yang sesuai menggunakan *Named Routes*.
* `GET /dashboard` ➔ Menuju ke halaman Dashboard.
* `GET /surat-masuk` ➔ Memanggil `SuratMasukController@index` (Daftar Surat).
* `GET /surat-masuk/{id}` ➔ Memanggil `SuratMasukController@show` (Detail Surat).
* `GET /surat-keluar` ➔ Memanggil `SuratKeluarController@index` (Daftar Surat).
* `GET /surat-keluar/{id}` ➔ Memanggil `SuratKeluarController@show` (Detail Surat).

### 2. Pengendali Logika (`app/Http/Controllers/`)
Tempat pemrosesan data. Pada tahap praktikum ini, Controller menyediakan *array* data tiruan (*dummy data*) yang dikirim ke View menggunakan fungsi `compact()`.
* **`SuratMasukController.php`**: Mengolah data koleksi surat masuk dan pencarian detail berdasarkan parameter `$id`.
* **`SuratKeluarController.php`**: Mengolah data koleksi surat keluar dan visualisasi detail konten surat.

### 3. Tampilan dan Tata Letak Induk (`resources/views/`)
Menggunakan Blade Engine untuk memisahkan struktur utama halaman web dengan konten yang dinamis.
* **`layout/app.blade.php`**: Berperan sebagai kerangka induk global (*Master Layout*). Berisi struktur HTML standar, menu `<nav>` transisi antar-halaman, serta penanda `@yield('content')`.
* **`surat-masuk/` & `surat-keluar/`**: Berisi file `index.blade.php` dan `show.blade.php` yang memperluas kerangka induk menggunakan perintah `@extends('layout.app')` dan menyisipkan konten tabel/detail di dalam blok `@section('content')`.

## Cara Menjalankan Proyek Secara Lokal

1. **Clone repository ini:**
   ```bash
   git clone https://github.com/kansaa-dev/Praktikum-Laravel
   ```
2. **Masuk ke direktori proyek:**
   ```bash
   cd praktikum-laravel
   ```
3. **Install dependensi composer:**
   ```bash
   composer install
   ```
4. **Salin file konfigurasi environment:**
   ```bash
   cp .env.example .env
   ```
5. **Generate application key:**
   ```bash
   php artisan key:generate
   ```
6. **Jalankan server lokal:**
   ```bash
   php artisan serve
   ```
7. Buka browser Anda dan akses `http://127.0.0.1:8000`.

## Tentang Pengembangan

Pengembangan praktikum ini akan terus diperbarui sesuai tugas dan pertemuan pada matakuliah.
