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
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            
            // ==========================================================
            // PERUBAIKAN PENTING DI SINI
            // ==========================================================
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                // Mengaktifkan SSL/TLS untuk koneksi database cloud
                // Jika DB_SSL_MODE di .env tidak ada, maka defaultnya 'REQUIRED'
                PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
                PDO::MYSQL_ATTR_SSL_MODE => env('DB_SSL_MODE', 'REQUIRED'),
            ]) : [],
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