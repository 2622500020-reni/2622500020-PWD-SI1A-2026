# README - Pertemuan 10

Catatan praktikum Pertemuan 10 (Analisis Kebutuhan Data dan Dasar MySQL Satu Tabel) menggunakan baseline dari Pertemuan 7 (P7)

---

### 1. Baseline & Lingkungan Pengembangan

- **Baseline:** Menyalin seluruh berkas dari `pertemuan-07\` ke `pertemuan-10\` dan memastikan formulir berjalan normal.
- **Laragon & phpMyAdmin:** Menjalankan layanan Apache dan MySQL, mengakses proyek via `http://localhost/pertemuan-10/`, serta memastikan phpMyAdmin (`http://localhost/phpmyadmin/`) terhubung dengan user `root` tanpa password.

### 2. Analisis Kebutuhan Data

- Mengidentifikasi 8 input dari formulir Kontak untuk disimpan ke database: `nama`, `email`, `semester`, `tanggal`, `jenis_pesan`, `minat`, `prodi`, dan `pesan`.
- Pilihan ganda pada checkbox `minat[]` (HTML, CSS) digabung dan disimpan dalam satu kolom teks dengan pemisah koma.

### 3. Struktur Database & Tabel

- **Database:** `db_pwd_2622500020`
- **Tabel:** `tbl_kontak_2622500020`
- **Kolom (9 Atribut):**
  - `id` : INT (PRIMARY KEY, AUTO_INCREMENT)
  - `nama` : VARCHAR(50)
  - `email` : VARCHAR(255)
  - `semester` : TINYINT
  - `tanggal` : DATE
  - `jenis_pesan` : VARCHAR(20)
  - `minat` : VARCHAR(50)
  - `prodi` : VARCHAR(2)
  - `pesan` : VARCHAR(300)

### 4. Uji Data Awal & Ekspor SQL

- **Data Awal:** Memasukkan data uji coba lewat menu _Insert_ / query `INSERT INTO` dan mengecek hasilnya di tab _Browse_ (nilai `id` terisi otomatis).
- **Ekspor SQL:** Mengekspor database dengan metode _Quick_ (format SQL) menjadi berkas `db_pwd_2622500020.sql` di dalam folder `pertemuan-10\`. Berkas sudah dicek di VS Code dan memuat query `CREATE TABLE` serta `INSERT INTO`.
