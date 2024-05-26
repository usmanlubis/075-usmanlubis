<h1 align="center">eRent</h1>

## Navigasi

- [Tentang eRent](#tentang-erent)
- [Cara Install](#cara-install)

## Tentang eRent
Usman Lubis - 075

eRent adalah aplikasi berbasis web yang dibuat untuk booking rental/sewa mobil, berfungsi agar memudahkan user dan pihak rental dalam menawarkan dan memberi informasi mobil-mobil yang tersedia secara otomatis dari sistem, sehingga tidak perlu lagi admin rental membalas pesan satu per satu terkait ketersediaan mobil, harganya, serta spesifikasi dan kondisi mobilnya.

## Cara Install

1. Clone project github ini
2. Masuk terminal dan tempatkan di direktori project
3. Donwload dependensi laravel dengan perintah
    ```sh
      composer install
    ```
4. Download dependensi node untuk Tailwind dengan perintah
    ```sh
      npm install
    ```
5. Jalankan MySQL sebagai database dan buat database baru bernama "jda" atau sesuaikan dengan file <code>.env</code>
6. Kembali ke terminal, masukkan perintah
    ```sh
      php artisan key:generate
    ```
7. Lakukan migrasi database dengan perintah
    ```sh
      php artisan migrate
    ```
8. Lakukan seeding database untuk Role dengan perintah
    ```sh
      php artisan db:seed RoleSeeder
    ```
9. Lakukan seeding database untuk User dengan perintah
    ```sh
      php artisan db:seed UserSeeder
    ```
10. Lakukan seeding database untuk Car (opsional) dengan perintah
    ```sh
      php artisan db:seed CarSeeder
    ```
11. Jalankan node untuk Tailwind dengan perintah
    ```sh
      npm run dev
    ```
    Biarkan terminal itu, dan buka terminal baru lagi
12. Jalankan project laravel langsung dengan Laragon atau aplikasi lain yang digunakan atau melalui terminal yang baru tadi dengan perintah
    ```sh
      php artisan serve
    ```
    Lalu klik link yang muncul dan akan diarahkan ke web browser
13. Anda bisa login dengan 2 skema, yaitu sebagai admin dan user biasa
    - Sebagai admin anda bisa login dengan mengisi data form
      - email: `admin@erent.com`
      - password: admin
    - Sebagai user anda punya 2 akun user
      1. User bernama Toni
          - email: `toni@gmail.com`
          - password: toni
      2. User bernama Joni
          - email: `joni@gmail.com`
          - password: joni
14. Anda sudah masuk ke aplikasi eRent dan jika ingin berpindah akun, anda bisa logout pada navbar di pojok kanan atas
15. Untuk menambahkan data mobil baru, anda bisa gunakan data pada file [Data Dummy Ini](dummyData.txt)