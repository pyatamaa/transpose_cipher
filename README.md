# Pengertian Transpose(Row Column) Cipher
program enkripsi sederhana menggunakan metode transpose(Row Column Cipher) untuk mengenkripsi username dan password

# Tampilan dari program

Ini adalah tampilan hasil dari kode soal 3 yaitu Transpose Cipher

<img width="448" alt="Screenshot 2023-11-10 211305" src="https://github.com/pyatamaa/transpose_cipher/assets/92738041/944f945e-1705-404b-aa21-a1099e5371af">

<img width="434" alt="Screenshot 2023-11-10 211325" src="https://github.com/pyatamaa/transpose_cipher/assets/92738041/df8f2bd5-5984-49dc-be92-d4ed2bbb3c94">

# Penjelasan Singkat
### Enkripsi:

1. Plainteks adalah “123admin123” dan kunci adalah 3.
2. Pertama, kita membuat tabel dengan 3 kolom (sesuai dengan kunci) dan menulis plainteks ke dalam tabel tersebut dari kiri ke kanan dan dari atas ke bawah.
3. Kemudian, kita membaca teks cipher dari tabel tersebut dari atas ke bawah dan dari kiri ke kanan.
Berikut adalah tabel yang menunjukkan proses ini:

<img width="265" alt="Screenshot 2023-11-10 214601" src="https://github.com/pyatamaa/transpose_cipher/assets/92738041/95bf3b45-44cf-41bb-a8f0-5a95f7e0b463">

Dari tabel ini, kita dapat melihat bahwa teks cipher adalah “12a3dmi23n1”.

### Dekripsi:

1. Teks cipher adalah hasil dari proses enkripsi, yaitu “12a3dmi23n1”, dan kunci adalah 3.
2. Pertama, kita membuat tabel dengan 3 kolom (sesuai dengan kunci) dan menulis teks cipher ke dalam tabel tersebut dari atas ke bawah dan dari kiri ke kanan.
3. Kemudian, kita membaca teks plainteks dari tabel tersebut dari kiri ke kanan dan dari atas ke bawah.
Berikut adalah tabel yang menunjukkan proses ini:

<img width="268" alt="Screenshot 2023-11-10 214815" src="https://github.com/pyatamaa/transpose_cipher/assets/92738041/abc7ef48-4478-464c-b84c-e4e5f695ca4a">

Dari tabel ini, kita dapat melihat bahwa teks plainteks adalah “123admin123”, yang sama dengan teks plainteks asli.
