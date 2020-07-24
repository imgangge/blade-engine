# blade-engine
Use Laravel Blade templates engine without the full Laravel framework.

### 声明
感谢 [ailuoy/laravel-context](https://github.com/duncan3dc/blade) 。  
因项目需求新增功能，故而新建仓库。


Quick Examples
--------------

Output the view from `/var/www/views/index.blade.php`:
```php
use Talk\BladeInstance;

$blade = new BladeInstance("/var/www/views", "/var/www/cache/views");

echo $blade->render("index");
```

There is also a static class available:
```php
use duncan3dc\Laravel\Blade;

echo Blade::render("index");
```


