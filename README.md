# Bootstrap Blog Example
## Blog Example built with Laravel Framework 
This blog has a CRUD functionality .. You can add Posts and and show them separately and also you can comment on them ..

### Installation

### Step 1: local server config.
 * App requires PHP 7.1.3+
 * App requires apache with appropriate configuration for vhosts
 * Add an entry to your vhosts file pointing to the /public directory in your myblog folder
 * Add a corresponding entry to your hosts file, Suggestion: myblog.localhost

### Misc

Step 2: MySQL setup

 * Create a database and database user using the values set in the .env file (Or change the values in the .env file as these are unique to your environment)

### Step 3: App configuration

 * From the app root in terminal run `composer install`
 * Verify you have artisan installed: `php artisan --help`
 * Install artisan following official documentation if not present
 * With artisan installed and configured run `php artisan migrate`

### Step 4:
 * Access site and begin