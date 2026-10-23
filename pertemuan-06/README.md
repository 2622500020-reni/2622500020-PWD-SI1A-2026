# Pertemuan-06: PHP Dasar dan Pemrograman Sisi Peladen

## Deskripsi
Pada pertemuan P6 ini dilakukan pengembangan website dengan PHP dasar dan pemrograman sisi peladen yaitu mengubah `index.html` ke `index.php`, penggunaan sintaks dasar PHP, mengelola data menggunakan variabel, konstanta, operator, percabangan, dan perulangan, serta menjalankannya dengan web server lokal localhost.

---

## Fitur dan Pengembangan
1. **Perubahan file HTML menjadi PHP:** Mengganti `index.html` menjadi `index.php` dan menambahkan tag pembuka untuk menuliskan kode PHP di dalam halaman.
2. **Variabel:** Menggunakan tanda `$` untuk membuat variabel, contohnya `$nama = "Reni";` untuk menyimpan data nama.
3. **Konstanta:** Menggunakan `const` untuk menyimpan nilai yang tidak berubah, contohnya `const NAMA_MATA_KULIAH = "Pemrograman Web Dasar";.
4. **Operator:** Digunakan untuk melakukan operasi perhitungan serta menentukan hubungan antar nilai. Contohnya, `$sisaSemester = $batasSemester - $semester;` untuk menghitung sisa semester, sedangkan `$semesterValid = $semester >= 1 && $semester <= $batasSemester;` untuk memeriksa apakah nilai semester berada dalam rentang yang ditentukan.
5. **Percabangan:** Menggunakan `if`, `elseif`, dan `else` untuk menentukan hasil berdasarkan kondisi tertentu.
6. **Switch-Case-Default:** Memilih satu hasil dari beberapa pilihan nilai, contohnya yaitu `switch ($programStudi) { case "SI": ... case "TI": ... default: ... }` untuk menentukan fokus program studi.
7. **Perulangan `for` dan `while`:** `for ($i = 1; $i <= 5; $i++)` dipakai untuk membuat daftar target belajar, dan `while ($nomorSemester <= 3)` dipakai untuk membuat daftar semester.
8. **Menampilkan Data:** `echo` dan `print` untuk mencetak nilai, serta `<?= ... ?>` sebagai singkatan `echo`, contohnya yaitu untuk tahun di footer.

---

## Cara Menjalankan Website
File PHP tidak dapat dijalankan secara langsung dengan klik dua kali, sehingga membutuhkan server lokal untuk memprosesnya. Langkah-langkahnya sebagai berikut:
1. Membuka aplikasi **Laragon**, kemudian menekan tombol **Start All** untuk mengaktifkan server.
2. Membuka browser dan memasukkan alamat `http://localhost/pwd/2622500020-PWD-SI1A-2026/`.
3. Mengakses halaman website melalui localhost untuk melihat hasil eksekusi kode PHP.

---

## Pengujian
* **Variabel dan konstanta:** Pengujian dilakukan dengan membuka `index.php` melalui localhost dan memeriksa bagian Beranda. Hasilnya, nama, mata kuliah, dan tahun akademik berhasil ditampilkan sesuai data yang telah ditentukan, yaitu "Reni", "Pemrograman Web Dasar", dan "2026/2027.
* **Operator:** Pengujian dilakukan pada bagian Tentang Saya untuk melihat hasil perhitungan dan validasi semester. Hasilnya, sisa semester menunjukkan angka 7 dan status pemeriksaan rentang semester menampilkan "Sesuai rentang.
* **If-Elseif-Else:** Pengujian dilakukan dengan memperhatikan informasi pada bagian Semester. Hasilnya, nilai semester 1 menghasilkan keterangan "Semester awal". Ketika nilai diubah menjadi 4 atau 7, keterangan menyesuaikan menjadi "Semester menengah" atau "Semester akhir.
* **Switch-Case-Default:** Pengujian dilakukan dengan melihat informasi Program Studi dan Fokus Program Studi. Hasilnya, program studi menampilkan "Sistem Informasi (SI)" dengan fokus "Komputasi dan pengembangan perangkat lunak". Apabila nilai program studi tidak sesuai pilihan, sistem menampilkan "Belum ditentukan.
* **Perulangan `for`:** Pengujian dilakukan dengan memeriksa bagian Target Belajar. Hasilnya, program berhasil menampilkan lima daftar target belajar, dengan target kelima berisi "Belum dipetakan" karena menggunakan kondisi default.
* **Perulangan `while`:** Pengujian dilakukan pada bagian daftar Semester. Hasilnya, perulangan berhasil menghasilkan tiga data semester, yaitu Semester 1, Semester 2, dan Semester 3.
* **Format nilai dan null:** Pengujian dilakukan dengan melihat informasi IPK dan Catatan Tambahan. Hasilnya, IPK ditampilkan dalam format 3,99, sedangkan data catatan yang bernilai null diganti menjadi "Belum ada.
* **Fitur lama (navigasi dan form):** Pengujian dilakukan dengan menekan tombol hamburger (☰) dan mencoba mengirim formulir menggunakan data kosong maupun data yang telah diisi. Hasilnya, menu navigasi dan proses validasi formulir tetap berjalan dengan baik seperti pada versi sebelumnya (`index.html`).

---

## Riwayat Pengembangan
Riwayat pengembangan proyek dicatat berdasarkan tahapan pengerjaan melalui *commit Git* yang memiliki keterangan sesuai perubahan yang dilakukan:
1. Menyalin file P5 ke P6.
2. Mengubah `index.html` menjadi `index.php`.
3. Menguji komentar, `echo`, dan tag PHP.
4. Mempelajari komentar, `echo`, dan `print`.
5. Menguji penggunaan HTML dan PHP.
6. Membuat variabel PHP (`$nim`, `$namaMahasiswa`, `$semester`, `$ipk`).
7. Mendefinisikan konstanta PHP (`NAMA_MATA_KULIAH`, `PROFIL_GITHUB`).
8. Menampilkan informasi mahasiswa pada halaman Beranda.
9. Menerapkan operator aritmetika untuk sisa semester.
10. Membuat validasi rentang semester.
11. Menerapkan percabangan `if-elseif-else`.
12. Menggunakan operator ternary untuk nama program studi dan status keaktifan.
13. Menerapkan `switch-case` untuk fokus program studi.
14. Membuat perulangan `for` untuk target belajar.
15. Membuat perulangan `while` untuk daftar semester.
16. Mengatur format tampilan IPK menggunakan `number_format()`.
17. Menangani nilai `null` pada catatan tambahan.
18. Menampilkan tahun secara otomatis menggunakan `date("Y")`.
19. Menggunakan sintaks singkat PHP (`<?= ... ?>`).
20. Menyesuaikan *action* formulir ke `index.php`.
21. Menyusun dokumentasi `README`.
