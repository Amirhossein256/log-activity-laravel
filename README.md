# log-activity-laravel

save log activity for you !


This is an educational project !

## Installation

Use the package manager [composer](https://getcomposer.org/) to install foobar.
```bash
composer require amirhossein256/log-activity
```
Add ServiceProviders in 'config/app.php'
```bash
Amirhossein256\LogActivity\LogActivityServiceProvider::class
```

Run package Migrations :
```bash
php artisan migrate 
```

Use Facade :
```bash
use Amirhossein256\LogActivity\Facades\LogActivity as LogFacad;


LogFacad::info($user_id, $status, $payload, $response);
```
or

Create New Instance :
```bash
use Amirhossein256\LogActivity\LogActivity;

$instance = new LogActivity();
$instance->info();
$instance->alert();
$instance->error();
```
get report Log in gui
```bash
127.0.0.1:8000/report
```

enjoy greenWeb Camp :))
