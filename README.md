# log-activiti-laravel

save log activity for you !


This is an educational project !

## Installation

Use the package manager [composer](https://getcomposer.org/) to install foobar.
```bash
composer require amirhossein256/log-activity
```

Run package Migrations :
```bash
php artisan migrate 
```

Add ServiceProviders in 'config.php'
```bash
Amirhossein256\LogActivity\LogActivityServiceProvider::class
```

Use Facade :
```bash
use Amirhossein256\LogActivity\Facades\LogActivity as LogFacad;


LogFacad::info(1, 'success', '{"test:test"}', '{"test:test"}');
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
