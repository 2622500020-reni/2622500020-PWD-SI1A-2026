# Catatan Praktikum - Pertemuan 11 (Integrasi PHP & MySQL)

## 1. Pembuatan dan Konfigurasi `koneksi.php` (Bagian D.1 - D.4)
- Berkas `koneksi.php` dibuat di direktori `pertemuan-11/` sejajar dengan `index.php`.
- Parameter koneksi dikonfigurasi menggunakan `host` (`localhost`), `user` (`root`), `password` (kosong `""`), dan `database` (`db_pwd_2622500020`).
- Pelaporan kesalahan otomatis MySQLi dinonaktifkan menggunakan `mysqli_report(MYSQLI_REPORT_OFF);` sebelum membuat koneksi.
- Koneksi ke basis data MySQL dibuat menggunakan `mysqli_connect($host, $user, $password, $database);` yang disimpan ke variabel `$koneksi`, dilengkapi pemeriksaan kegagalan menggunakan percabangan `if (!$koneksi)` dan `die("Koneksi ke basis data gagal.")`.

## 2. Pengujian Koneksi Awal & Penanganan Kegagalan (Bagian D.5 - D.6)
- Pengujian keberhasilan koneksi dilakukan menggunakan berkas sementara `uji_koneksi.php` melalui peramban dengan layanan Apache dan MySQL pada Laragon aktif.
- Hasil pengujian menampilkan pesan `Koneksi ke basis data berhasil`.
- Berkas sementara `uji_koneksi.php` telah dihapus setelah pengujian selesai agar tidak menjadi bagian dari artefak akhir Pertemuan 11.
- Pengujian penanganan kegagalan koneksi dilakukan dengan mengubah sementara nama `$database` ke basis data yang tidak tersedia, memeriksa pesan kegagalan/penghentian proses, lalu mengembalikan nilai `$database` ke `db_pwd_2622500020`.

## 3. Integrasi ke `index.php` (Bagian E.1 - E.2)
- Pada bagian awal `pertemuan-11/index.php`, `session_start();` dinonaktifkan menggunakan komentar `#session_start();`.
- Berkas pendukung dimuat menggunakan `require_once("fungsi.php");` dan `require_once("koneksi.php");` sebelum bagian pengolahan data berikutnya pada `index.php`.

## 4. Pemeriksaan Alur & Pengujian Integrasi Halaman Utama (Bagian E.3 - E.4)
- **E.3 (Ketersediaan Koneksi):** `index.php` memuat `koneksi.php` sebelum kode yang menggunakan variabel `$koneksi`, sedangkan penanganan kegagalan koneksi tetap ditangani di `koneksi.php`.
- **E.4 (Uji Integrasi di Peramban):** *[Isi hasil tampilan halaman utama di browser setelah Apache & MySQL Laragon dijalankan dan `$database` dipastikan `db_pwd_2622500020`]*.
-
