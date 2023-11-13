# Pengertian Transpose(Row Column) Cipher

Cipherteks diperoleh dengan mengubah posisi huruf di dalam
plaintekls.

Dengan kata lain, algoritma ini melakukan transpose terhadap
rangkaian huruf di dalam plainteks.

Nama lain untuk metode ini adalah permutasi, karena transpose
setiap karakter di dalam teks sama dengan mempermutasikan
karakter-karakter tersebut.

# Tentang program

Program ini dibuat menggunakan bahasa PHP 8.1, HTML 5, framework dari CSS yaitu bootstrap, dan menggunakan database MySQL.

# Struktur Program 

1. admin/

   -admin.php untuk tampilan setelah user melakukan login pada form login.
2. cipher/

   -encrypt.php berisikan function untuk mengenkripsi data yang dimasukkan pada saat registrasi kedalam database.
   
   -decrypt.php berisikam function untuk mengdekripsikan data yang akan digunakan pada form login.
3. config.php untuk koneksi ke database
4. daftar.php untuk registrasi data berisikan username dan password.
5. index.php sebagai halaman utama untuk login.
6. login.php sebagai halaman yang menentukan apakah admin bisa login atau tidak berdasarkan dari username dan password yang sudah dibuat sebelumnya.
7. logout.php untuk keluar dari halaman login
8. register.php untuk memastikan apakah data yang dimasukkan sudah pernah digunakan atau baru digunakan.

# Tampilan dari program

Ini adalah tampilan hasil dari kode soal 3 yaitu Transpose Cipher

<img width="448" alt="Screenshot 2023-11-10 211305" src="https://github.com/pyatamaa/transpose_cipher/assets/92738041/944f945e-1705-404b-aa21-a1099e5371af">

<img width="434" alt="Screenshot 2023-11-10 211325" src="https://github.com/pyatamaa/transpose_cipher/assets/92738041/df8f2bd5-5984-49dc-be92-d4ed2bbb3c94">

<img width="436" alt="Screenshot 2023-11-12 183315" src="https://github.com/pyatamaa/transpose_cipher/assets/92738041/06535224-9861-40ba-bacf-c0e0de5eb34f">

<img width="431" alt="Screenshot 2023-11-12 183354" src="https://github.com/pyatamaa/transpose_cipher/assets/92738041/467d2473-3da1-467a-9dfc-cee072db51c2">

# Database dari hasil registrasi

<img width="622" alt="Screenshot 2023-11-13 072840" src="https://github.com/pyatamaa/transpose_cipher/assets/92738041/9d89c66e-33dc-4d2a-b791-0050f13ffdb2">

# Penjelasan Singkat

Implementasi dari Transpose(Row Column) Cipher pada program ini bekerja pada saat saat user membuat akun. Ketika
user memasukkan data berupa username dan password maka program akan memprosesnya dengan fungsi enkripsi Transpose(Row Column) Cipher.
Maka data yang tersimpan di database adalah hasil enkripsi dari fungsi Transpose(Row Column) Cipher.

### Enkripsi:

1. Plainteks adalah “123admin123” dan kunci adalah 3.
2. Pertama, kita membuat tabel dengan 3 kolom (sesuai dengan kunci) dan menulis plainteks ke dalam tabel tersebut dari kiri ke kanan dan dari atas ke bawah.
3. Kemudian, kita membaca teks cipher dari tabel tersebut dari atas ke bawah dan dari kiri ke kanan.
Berikut adalah tabel yang menunjukkan proses ini:

<img width="265" alt="Screenshot 2023-11-10 214601" src="https://github.com/pyatamaa/transpose_cipher/assets/92738041/95bf3b45-44cf-41bb-a8f0-5a95f7e0b463">

Dari tabel ini, kita dapat melihat bahwa teks cipher adalah “12a3dmi23n1”, tetapi karena kita membiarkan karakter non alphabet agar tetap pada posisinya maka hasilnya adalah "123aidnm123".

### Dekripsi:

1. Teks cipher adalah hasil dari proses enkripsi, yaitu “12a3dmi23n1”, dan kunci adalah 3.
2. Pertama, kita membuat tabel dengan 3 kolom (sesuai dengan kunci) dan menulis teks cipher ke dalam tabel tersebut dari atas ke bawah dan dari kiri ke kanan.
3. Kemudian, kita membaca teks plainteks dari tabel tersebut dari kiri ke kanan dan dari atas ke bawah.
Berikut adalah tabel yang menunjukkan proses ini:

<img width="268" alt="Screenshot 2023-11-10 214815" src="https://github.com/pyatamaa/transpose_cipher/assets/92738041/abc7ef48-4478-464c-b84c-e4e5f695ca4a">

Dari tabel ini, kita dapat melihat bahwa teks plainteks adalah “123admin123”, yang sama dengan teks plainteks asli.
