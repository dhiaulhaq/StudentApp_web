## Instalasi Website

- Setelah anda selesai meng-clone atau download project, buatlah database baru pada server anda
- Setelah itu buka project dan duplikat file '.env.example' dan ubah namanya menjadi '.env'
- Ubah pengaturan seperti pada gambar di bawah ini menjadi sesuai dengan konfigurasi database anda
    ![ss file env](https://user-images.githubusercontent.com/19872458/153229484-26ea4f25-9086-42c2-ae7f-fd913180b621.png)
- Buka terminal atau cmd kemudian arahkan pada folder project
- Jalankan 'composer install'
- Jalankan 'php artisan key:generate'
- Jalankan 'php artisan cache:clear'
- Jalankan 'php artisan migrate:refresh --seed'
- Jjalankan 'php artisan passport:install'
- Jalankan 'ipconfig' kemudian salin IPv4 Address yang tertera
- Jalankan 'php artisan serve --host=IPv4 Address anda'

## Screenshot Website

- Halaman Login
    ![image](https://user-images.githubusercontent.com/19872458/153230707-d589bf04-9412-4820-927d-f81bf849b9d8.png)

- Halaman Home
    ![image](https://user-images.githubusercontent.com/19872458/153230823-ee472a3c-54f6-4141-8898-56cb9f73daff.png)

- Halaman Edit
    ![image](https://user-images.githubusercontent.com/19872458/153230953-92be77af-b6c9-4014-8d9e-5026ab3da71b.png)
