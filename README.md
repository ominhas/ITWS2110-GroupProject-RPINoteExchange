# ITWS2110-GroupProject-RPINoteExchange
The group project repo for ITWS2110 Fall2017 group 5
## Guide
### Development pre-request

On Mac:
- Lamp
- PHP Composer (https://getcomposer.org/)

On Windows:
- xamp
- PHP Composer (https://getcomposer.org/)


Requires Apache / Nginx,  MySQL,  PHP5

### Getting start

(It's recommended to run these code in Powershell or Git Bash on Windows.)

1. Fork this repo

2. Clone to your disk
    ```
    git clone https://github.com/[YOUR_GITHUB_USERNAME]/ITWS2110-GroupProject-RPINoteExchange.git
    ```

3. ```cd``` to your folder
    ```
    cd YOUR_FOLDER_NAME
    ```

4. Install dependency
    ```
    composer install
    ```

5. Create environment files
    ```
    mv .env.example .env
    ```
6. Make a virtual host for this project (optional). The document root is ``` "[PROJECT_FOLDER]/public"```

   *The following are for reference only*
    ```
    <VirtualHost *:80>
        ServerName [YOUR_SERVER_NAME]
        DocumentRoot "[YOUR_FOLDER_NAME]/public"
        SetEnv APPLICATION_ENV "development"
        SetEnv LARA_ENV local
        <Directory "[YOUR_FOLDER_NAME]/public">
            Options Indexes FollowSymLinks Includes execCGI
            AllowOverride All
            Require all granted
        </Directory>
    </VirtualHost>
    ```
    
    Also, don't forget to add [YOUR_SERVER_NAME] to your hosts file.
    
    Save & exit, restart Apache.
    
    Create a new database [YOUR_DATABASE_NAME].
    
7. Open the project

8. Open .env file, modify these lines like:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=[YOUR_DATABASE_NAME]
    DB_USERNAME=[YOUR_USERNAME]
    DB_PASSWORD=[YOUR_PASSWORD]
    ```

9. make migration(in order to create table automatically):
    ```
    php artisan migrate
    ```

10. Generate a key:
    ```
    php artisan key:generate
    ```

11. Open your browser, go to http://[YOUR_SERVER_NAME], enjoy!

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).