# PHP_native

A lightweight custom PHP MVC-style project built manually, using Composer for class autoloading.

## Features
- Simple and clean custom MVC-like structure
- Routing system with centralized `Routes.php`
- Composer autoloader (`vendor/autoload.php`) for automatic class loading
- Separated controllers and views
- Database connection layer included
- Example SQL schema provided

## Setup
1. Clone the repository:
   ```bash
   git clone https://github.com/MD2001/PHP-native.git
   ```
2. Install Composer dependencies:  
   `composer install`
   
3. Create a MySQL database and import the provided SQL file:  
   ` sample_of_DB.sql`
   
4. Update database settings in config.php.  
   
5. Ensure Composer autoload is included in index.php:  
   `require __DIR__ . '/vendor/autoload.php';`
   
6. Run the project using PHP’s built-in server:  
  ```bash
   php -S localhost:8888 -t public  
   ```
7. **Project Structure**  
  ```bash
  /Controllers        → Application logic   
  /view               → Views and partials  
  /public             → Public web root (entry point)  
  vendor/             → Composer packages + autoloader  
  Routes.php          → URL route definitions   
  Router.php          → Routing system   
  Database.php        → Database connection handler  
  config.php          → App configuration  
```

## Testing
* you have some testing her using **pestphp/pest** pakges
make sure you dump the autoloader before you start testing 
```bash
 composer dump-autoload
```
this make the project see where he get the Test class 
