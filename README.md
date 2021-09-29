# Laravel5.5---Rest-API

**1.Create table using below command:**
php artisan make::migration create_articles_table --create=articles

**2. Set string length in AppServiceProvider file.**
Schema::defaultStringLength(191);

**3. Create Articles table seeder using below command.**
-php artisan make:seeder ArticlesTableSeeder
- Add no of articles to create using Factory
- uncomment the line DatabaseSeeder and call ArticlesTableSeeder

**4. Create a Factory**
php artisan make:factory ArticleFactory

**5. Create a Model**
php artisan make:model Article

**6. php artisan db:seed**

**7. Create controller **
php artisan make:controller ArticleController --resource

**8. Create routes in Routes/api.php**

**9. Create resource**
php artisan make:resource Article
We can edit response and the fields we need 
