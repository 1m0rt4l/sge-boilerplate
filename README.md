# sge-boilerplate

So, welcome to the sge boilerplate.
It stands for 'Software de Gestão Empresarial' - boilerplate.
In words other than my mother tongue. This is a boilerplate for an Enterprise Management Software.

## It uses the following packages:

- [hyn/multi-tenant](https://laravel-tenancy.com/docs/hyn/5.3)
- [spatie/laravel-activitylog](https://docs.spatie.be/laravel-activitylog/v2/installation-and-setup)
- [spatie/laravel-backup](https://github.com/spatie/laravel-backup)
- [spatie/laravel-permission](https://github.com/spatie/laravel-permission)
- [nao-pon/flysystem-google-drive](https://github.com/nao-pon/flysystem-google-drive)
- [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar)
- [doctrine/dbal](https://laravel.com/docs/5.7/migrations#modifying-columns)

This is the core for a multi tenant solution with activity log and permissions.
There is a seeder wich creates multiple roles and permissions. Fell free to edit. Also edit the CreateTenant command to match the name of your Admin Role.

Current problems:
- If you want to use google drive, in
```php
'\Config::set('backup.backup.name', 'HERE');'
```
-> 'HERE' must be the id of your folder in google drive. Wich will also be the name a local folder. This is a persisting problem of GoogleDrive + laravel-backup.
- For google drive backup to work with notifications you must first modify the vendor folder.
Either comment
```php 
$this->sendNotification(new BackupWasSuccessful($backupDestination));
```
and make & send yourself a notification. Or edit the vendor code at your liking.

## Getting started
Please follow these steps:
```
Copy the .env.example and fill it up.
Composer update
php artisan migrate
php artisan tenant:create [prefix] [name] [email] [password]
php artisan tenant:backup --id=all
```
