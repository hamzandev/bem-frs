# Website BEM FRS

- Branch Dev : Untuk Development

### Requirement
1. Web server (Apache, Nginx dll), Mysql. Pakai Xampp / Laragon udah sepaket
2. Composer
3. Nodejs
4. PHP version >= 8.2

### Cara Install ke Lokal Development
1. Clone Repo ini
2. Install dependency Laravel menggunakan composer :
   ```
   $ composer install
   ```
3. Copy file ``.env.example`` dan paste lalu rename jadi ``.env``
4. Buat database pada phpmyadmin anda dengan nama ``bem_frs`` 
5. Lakukan Migrasi Database :
    ```
    $ php artisan migrate
    ```
6. Buat User baru untuk Login sebagai Administrator
    ```
    $ php artisan make:filament-user
    ```
7. Jalankan server aplikasi :
    ```
    $ php artisan serve
    ```
