# FindPeken Backend Readme

1. Clone project
2. Jalankan MySQL dan Apache di Xampp
3. Buat database dengan nama db_findpeken
4. Lalu import file db.findpeken.sql yang ada di dalam folder project
5. Setting .env 
    - DB_DATABASE=db_findpeken
    - DB_USERNAME=root
    - DB_PASSWORD=
6. Jalankan perintah : php artisan key:generate --> untuk mengenerate APP_KEY
7. Berikutnya jalankan perintah : php artisan serve ---> untuk menjalankan server laravel
8. Akses dengan url : localhost:8000
