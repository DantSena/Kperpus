PERPUSTAKAAN // Protyp 0102102501

----------------------------------------------------------------------------------------------

Website karya kami dari SMA NEGERI 1 NGANJUK dengan anggota
1. Achmad Rafi Setiawan
2. Pradipa Wijaksara Putera

----------------------------------------------------------------------------------------------

Website ini dibuat untuk mencatat daftar kunjungan siswa ke perpustakaan sekolah. Sistem bekerja dengan cara siswa membuka halaman web dan mengisi form kunjungan. Form tersebut berisi nama, kelas, tanggal, dan keperluan berkunjung seperti membaca buku, meminjam, mengembalikan, mengerjakan tugas, atau lainnya. Jika memilih meminjam atau mengembalikan buku maka akan muncul kolom tambahan untuk menuliskan judul dan nomor buku. Jika memilih keperluan lain, maka akan muncul kolom keterangan tambahan yang bisa diisi bebas.

Setelah siswa menekan tombol kirim, data dikirim ke server menggunakan bahasa Python (Flask). Server kemudian menyimpan data tersebut ke dalam database MySQL. Data yang masuk akan tersimpan di tabel kunjungan yang berisi kolom id, tanggal, nama, kelas, keperluan, judul buku, nomor buku, dan keterangan lain. Server juga akan mengirimkan pesan ke pengguna bahwa data berhasil disimpan. Semua data yang sudah masuk bisa dilihat oleh petugas melalui phpMyAdmin atau langsung dari database MySQL.

Website ini bisa dijalankan secara lokal menggunakan XAMPP untuk menjalankan Apache dan MySQL. Komputer perpustakaan berfungsi sebagai pusat server, sementara siswa bisa membuka web di perangkat masing-masing selama masih terhubung ke jaringan WiFi yang sama. Jika MySQL atau Apache dimatikan, data baru tidak bisa dikirim, tetapi data lama tetap tersimpan di database. Saat komputer dinyalakan lagi dan server dijalankan, data sebelumnya masih ada. itu untuk versi awal saat ini website ini sudah terhosting jadi bisa ON 24 jam tanpa memerlukan server lokal.

Website ini terdiri dari beberapa file utama yaitu index.html untuk tampilan form, style.css untuk mengatur tampilan desain, script.js untuk mengatur logika interaktif form, dan app.py sebagai program utama Flask yang menangani proses penyimpanan data ke database. Semua file ini bekerja bersama untuk membuat sistem pencatatan kunjungan yang praktis dan efisien di perpustakaan sekolah.

----------------------------------------------------------------------------------------------

Secara umum, alur kerja sistem ini sebagai berikut:
1. Input data dilakukan melalui halaman web (index.html) yang berisi form kunjungan.
2. Pengguna (siswa) mengisi nama, kelas, tanggal, dan memilih keperluan berkunjung:
3. Jika memilih Meminjam Buku atau Mengembalikan Buku, maka akan muncul kolom tambahan untuk mengisi judul dan nomor buku.
4. Jika memilih Lainnya, akan muncul kolom keterangan tambahan yang bisa diisi sesuai kebutuhan.
5. Setelah tombol kirim ditekan, data dikirim ke server Python (Flask).
6. Flask akan menyimpan data tersebut ke database MySQL yang sudah dibuat di XAMPP.
7. Setelah berhasil, sistem menampilkan pesan bahwa data telah tersimpan.
8. Petugas perpustakaan dapat melihat data kunjungan melalui phpMyAdmin di tabel kunjungan.


Secara keseluruhan, sistem ini berfungsi sebagai alat bantu untuk mencatat kunjungan perpustakaan dengan proses yang efisien dan bisa dijalankan di lingkungan sekolah tanpa harus online di internet. dengan adanya sistem ini, diharapkan proses administrasi kunjungan perpustakaan menjadi lebih mudah, efisien, dan modern. Semoga website ini dapat membantu meningkatkan semangat literasi serta memperkuat budaya membaca di lingkungan sekolah.