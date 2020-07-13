# lib-user-main-type

## Instalasi

Jalankan perintah di bawah di folder aplikasi:

```
mim app install lib-user-main-type
```

## Konfigurasi

Tambahkan konfigurasi seperti di bawah pada aplikasi untuk menentukan
daftar type akun user yang didukung:

```php
return [
    'libEnum' => [
        'enums' => [
            'user.type' => [
                1 => 'General',
                2 => 'Special',
                3 => 'Other Special'
            ]
        ]
    ]
];
```