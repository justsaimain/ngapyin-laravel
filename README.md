
# Ngapyin Laravel Scaffold

Create Laravel Multi Authentications and Backend Dashboard Scaffold within 1 minute :)




## Screenshot

![App Screenshot](https://i.ibb.co/Gv3H1wL/Screenshot-2021-12-02-123849.png)


## 📄 Usages

Create new Laravel Project

```bash
    laravel new blog
    cd /blog
```

Install package with Composer

```bash
    composer require justsaimain/ngapyin
```

Add inside `app.php` Provider

```bash
    \Justsaimain\Ngapyin\NgapyinServiceProvider::class,
```

Generate login / registration scaffolding

```bash
    php artisan ui bootstrap --auth    
```

Compile your fresh scaffolding

```bash
    npm install
    npm run dev    
```

Publish Vendor

```bash
    php artisan vendor:publish --tag="Ngapyin-Auth" --force  
    php artisan vendor:publish --tag="Ngapyin-Assets"  
    php artisan vendor:publish --tag="Ngapyin-View"   
```

Migrate

```bash
    php artisan migrate 
```

Create default Admin Account

```bash
   php artisan admin:seed
```

Default Admin Account

```
   admin@gmail.com
   password
```

## Run and Test

```bash
    php artisan serve
```

Go to `/backend/login` and Login with default Admin.


## Support

For support, email saimain.primary@gmail.com.

