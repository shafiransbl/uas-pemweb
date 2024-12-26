# Kabar UNTIRTA - Aplikasi Berita

Aplikasi ini adalah platform berita berbasis Laravel yang memungkinkan pengguna untuk membaca berita, serta admin untuk mengelola (membuat, mengedit, dan menghapus) artikel berita. Pengguna dapat mencari berita berdasarkan kata kunci dan melihat artikel secara detail.

## Fitur
- Halaman depan yang menampilkan berita terbaru.
- Pencarian artikel berdasarkan kata kunci.
- Halaman detail untuk membaca artikel.
- Fitur untuk admin: membuat, mengedit, dan menghapus artikel.

## Prasyarat
Pastikan Anda sudah menginstal hal-hal berikut sebelum memulai:

- **PHP** >= 8.x
- **LARAVEL** >= 11.x
- **Composer**
- **Node.js** dan **NPM** untuk manajemen dependensi front-end
- **MySQL** atau **database** lain yang didukung oleh Laravel

## Langkah-langkah Instalasi

### 1. Clone Repository
Clone proyek ini ke komputer lokal Anda menggunakan Git:

```bash
git clone https://github.com/username/repository-name.git
cd repository-name
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run dev
npm run build
php artisan serve
