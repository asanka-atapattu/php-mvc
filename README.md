# php-mvc
Extremely simple and easy to understand core PHP MVC application. All core functionality is separated from the frontend functionalities. 

### Framework Structure

```
site
   -- app
      -- controllers
      -- core
      -- libs
      -- models
      -- view
      -- .htaccess
      -- init.php
   --public
      -- assets
      -- .htaccess
      -- index.php
      -- layout.php
```
* App-controllers: all the controllers are resides here. Use plural word for controller (users.php)
* App-libs: all the external php library files here
* App-models: CURD files are resides here with the same name as controller (user.php)
* App-views: contains files with frontend logics in separate folders. Folder name should equal to the controller name
* App-.htaccess : prevent access app folder
* Public-assets: contains all images, css, js, fonts
* Public-layout: links with css and js t create layout of web output

### Features
* extremely simple, easy to understand
* uses only native PHP code, so people don't have to learn a framework
* commented code
* simple but clean structure
* makes "beautiful" SEO friendly URLs
* demo CRUD actions: Create, Read, Update and Delete database entries easily
* uses PDO for any database requests

### Requirements
* PHP 5.6 +
* MySQL
* mod_rewrite enabled 

### Installation
Edit the database credentials in app/core/connnection.php
Make sure you have mod_rewrite activated on your server / in your environment.


### Security
The script makes use of mod_rewrite and blocks all access to everything outside the /public folder. Your app folder/files and everything else is not accessible (when set up correctly). For database requests PDO is used, so no need to think about SQL injection.

