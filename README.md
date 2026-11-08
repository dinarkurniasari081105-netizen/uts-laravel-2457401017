# UTS Web Development - Laravel

Repositori ini dibuat untuk memenuhi penilaian Ujian Tengah Semester (UTS) mata kuliah Web Development.

## 📝 Data Diri Mahasiswa
* **Nama Lengkap:** Mastiyah
* **NIM:** 2457401017
* **Tema UTS:** Apotek / Toko Obat (Berdasarkan digit terakhir NIM: 7)
* **Tabel Utama:** `medicines`

---

## 🛠️ Langkah-Langkah Instalasi Aplikasi

Ikuti panduan berikut untuk menjalankan project ini di lingkungan komputer lokal Anda:

1. **Clone Repository**
   ```bash
   git clone https://github.com
   cd uts-laravel-2457401017
   ```

2. **Instalasi Dependensi Composer**
   ```bash
   composer install
   ```

3. **Konfigurasi Environment File**
   Salin file `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```
   Buka file `.env` dan pastikan konfigurasi database disesuaikan sebagai berikut:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=uts_2457401017
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

5. **Migrasi Database & Seeding Data**
   Pastikan web server (XAMPP/MySQL) sudah aktif dan database `uts_2457401017` telah dibuat di phpMyAdmin, kemudian jalankan:
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

6. **Jalankan Local Server**
   ```bash
   php artisan serve
   ```
   Akses aplikasi di browser melalui URL: `http://127.0.0.1:8000`

---

## 🗃️ Skema Struktur Tabel `medicines`

Tabel utama `medicines` dibuat menggunakan sistem Migration Laravel dengan rincian struktur kolom sebagai berikut:

| Nama Kolom | Tipe Data | Atribut / Keterangan |
| :--- | :--- | :--- |
| `id` | BigInteger | Primary Key (Auto Increment) |
| `name` | String | Nama Lengkap Obat |
| `category` | String | Golongan Obat (Obat Bebas / Obat Bebas Terbatas / Obat Keras) |
| `code` | String | Kode Produk Obat (Unique) |
| `expired_at` | Date | Tanggal Kedaluwarsa Obat |
| `price` | Decimal (10,2) | Harga Satuan Obat |
| `stock` | Integer | Jumlah Stok Persediaan (Ditambahkan via Migration Terpisah) |
| `is_prescription_required` | Boolean | Kewajiban Resep Dokter (True/False) |
| `description` | Text | Deskripsi Khasiat Obat (Nullable) |
| `created_at` | Timestamp | Waktu Data Dibuat |
| `updated_at` | Timestamp | Waktu Data Diubah |

---
© 2026 Dinar Kurniasari · 2457401017
