## Usage
* Fork repository and clone it locally
* cd into the project folder
* Run ```composer install --no-scripts```
* ```cp .env.example .env``` to make your .env file
* ```php artisan key:gen``` to make your application key.
* Change the name of the db in .env from laravel to your db name
* ```php artisan storage:link``` to create a symbolic link for your application files
* ```cp public/storage/photo/ storage/app/public/``` to copy the application files to the symlinked folder
* ```php artisan serve``` Launch the web app.
* Go to ```127.0.0.1:8000``` and that's the site. Play with it and contribute.
* Share the goodness of this awesome web template by sharing it & leaving a star on the repo
