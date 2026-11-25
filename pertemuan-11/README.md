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
- **E.4 (Uji Integrasi di Peramban):** \_[Isi hasil tampilan halaman utama di browser setelah Apache & MySQL Laragon dijalankan dan `$database` dipastikan `db_pwd_2622500020`].

## 5. Operasi READ: Kueri SELECT dan Eksekusi mysqli_query() (Bagian F.2 - F.3)

- Kueri SELECT ditentukan pada index.php setelah pemanggilan koneksi.php menggunakan $sql = "SELECT \* FROM tbl_kontak_2622500020";.
- Kueri dijalankan menggunakan fungsi mysqli_query($koneksi, $sql); dengan memanfaatkan variabel $koneksi dari koneksi.php dan variabel $sql, lalu hasilnya ditampung pada variabel $hasil.
- Catatan : sempat muncul peringatan statis Intelephense (Undefined variable '$koneksi') pada editor sebelum dijalankan, namun pengujian di peramban tetap berjalan normal tanpa pesan gagal koneksi.

## 6. Memeriksa dan Menguji Keberhasilan Kueri SELECT (Bagian F.4)

- Pemeriksaan keberhasilan kueri ditambahkan pada `index.php` setelah pemanggilan `mysqli_query($koneksi, $sql);` menggunakan kondisi `if (!$hasil)` yang menghentikan proses dan menampilkan pesan `"Kueri SELECT gagal dijalankan."` apabila hasil bernilai `false`[span_2].
- Pengujian kegagalan dilakukan dengan mengubah sementara nama tabel pada `$sql` menjadi tabel yang tidak tersedia (`tbl_tabel_tidak_tersedia`), lalu halaman diakses melalui `http://localhost/pwd/2622500020-PWD-SI1A-2026/pertemuan-11` dan berhasil menampilkan pesan `"Kueri SELECT gagal dijalankan."`
- Pengujian keberhasilan dilakukan dengan mengembalikan nama tabel pada `$sql` menjadi `tbl_kontak_2622500020`, dan halaman kembali berjalan normal tanpa pesan gagal menjalankan kueri.

## 7. Mengambil Hasil Kueri Menggunakan mysqli_fetch_assoc() (Bagian F.5)

- Pengambilan hasil kueri ditambahkan pada `index.php` setelah pemeriksaan keberhasilan kueri menggunakan larik `$dataKontak = [];` dan perulangan `while ($baris = mysqli_fetch_assoc($hasil))`.
- Fungsi `mysqli_fetch_assoc($hasil)` mengambil setiap baris data dalam bentuk larik asosiatif berdasarkan nama kolom tabel, lalu memasukkannya ke dalam `$dataKontak[]` selama baris data masih tersedia.
- Pengamatan isi larik `$dataKontak` dilakukan pada tahap pengujian berikutnya.

## 8. Menguji Penyajian Data dan Kondisi Ketika Tidak Ada Data Kontak

- Data kontak dari tabel `tbl_kontak_2622500020` berhasil diambil dan ditampilkan pada bagian **Data Kontak dari Basis Data** melalui perulangan `foreach` dengan kondisi `if-else` pada `index.php`.
- Pengujian kondisi tanpa data dilakukan dengan mengosongkan data pada tabel `tbl_kontak_2622500020` tanpa menghapus struktur tabel, lalu mengakses halaman melalui `http://localhost/pwd/2622500020-PWD-SI1A-2026/pertemuan-11/` untuk memastikan pesan `"Belum ada data kontak yang tersimpan."` tampil dengan benar.
- Setelah pengujian selesai, data kontak dikembalikan kembali sehingga seluruh data tampil normal di halaman.
- Hasil ekspor struktur tabel dan data kontak disimpan pada berkas SQL di dalam direktori `pertemuan-11/`.

## Catatan Peringatan dan Penyesuaian Kode

- Pada `index.php`, sempat muncul peringatan `Undefined variable '$koneksi'. intelephense(P1008)` pada pemanggilan `mysqli_query($koneksi, $sql)` karena `$koneksi` berasal dari berkas eksternal (`koneksi.php`) yang dimuat melalui `require_once("koneksi.php")`. Peringatan tersebut berasal dari analisis statis ekstensi dan tidak menghambat eksekusi skrip PHP saat halaman dibuka di peramban.
- Pada `fungsi.php`, sempat muncul saran/peringatan tipe parameter (`intelephense(P1132)`) pada parameter `$teks` di fungsi `bersihkan()` dan `tebal()`, sehingga dilakukan penyesuaian tipe parameter agar selaras dengan nilai masukan yang diterima.
