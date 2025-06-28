Cara Install
Clone projek melalui terminal / command prompt / git bash 

Pindahkan folder (presensi_karyawan) hasil clone ke direktori Xampp/htdocs/disini.

Buka Vscode, buka folder dan pilih presensi_karyawan yang tadi sudah di-clone.

Buka terminal di Vscode, ketik composer install, lalu tunggu sampai selesai.

Setelah itu ketik npm install, lalu tunggu sampai selesai.

Jalankan npm dengan perintah npm run dev.

Setelah berhasil dijalankan, buka / tambahkan terminal baru di VScode.

Setelah itu buka file env.example, dan ubah namanya menjadi .env, lalu ketik di terminal php artisan key:generate,

Masuk ke dalam .env dan ubah bagian DB_DATABASE=, menjadi nama database yang akan digunakan, contohnya DB_DATABASE=absen_karyawan.

Buka phpMyAdmin, buat database baru berdasarkan nama yang ada di .env, yaitu absen_karyawan (sesuaikan).

Kembali ke Vscode, tambahkan terminal baru, lalu ketik php artisan migrate, dan tunggu migrasi sampai selesai.

Setelah itu, instalasi user admin dengan seeder. Buka folder database/seeder/UsersTableSeeder.php.

Ubah informasi admin, seperti nama, email, dan password.

Jalankan perintah di terminal Vscode:

php artisan db:seed --class=UsersTableSeeder
Tunggu sampai selesai. Setelah itu, ketik php artisan config:cache.

Setelah selesai, ketik php artisan serve.

Selesai! Buka link localhost:8000 dan login sebagai admin.
