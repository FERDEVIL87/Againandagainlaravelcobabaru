<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Diubah agar defaultnya selalu 'mysql' sesuai dengan .env Anda.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    */

    'connections' => [

        'sqlite' => [
            // ... konfigurasi sqlite tidak diubah ...
        ],

        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            
            // ==========================================================
            // PERBAIKAN FINAL UNTUK SSL
            // ==========================================================
            // Menggunakan opsi SSL yang lebih kompatibel
            // Ini akan memaksa koneksi terenkripsi tanpa bergantung pada
            // konstanta modern yang mungkin tidak ada.
            'options' => extension_loaded('pdo_mysql') ? [
                PDO::MYSQL_ATTR_SSL_CIPHER => 'DHE-RSA-AES256-SHA' 
            ] : [],
            // ==========================================================
        ],

        'mariadb' => [
            // ... konfigurasi mariadb tidak diubah ...
        ],

        'pgsql' => [
            // ... konfigurasi pgsql tidak diubah ...
        ],

        'sqlsrv' => [
            // ... konfigurasi sqlsrv tidak diubah ...
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    */
    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    */

    'redis' => [
        // ... konfigurasi redis tidak diubah ...
    ],

];