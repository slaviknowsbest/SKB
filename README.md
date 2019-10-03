# SKB
Management System

1. Extract the archive and put it in the folder you want

2. Prepare your .env file there with database connection and other settings

3. Run composer install command

4. Run php artisan migrate --seed command.

Notice: use seed to create the admin account.

5. Run php artisan key:generate command.

6. Run php artisan storage:link command.

And that's it, go to your domain and login:

Username:	admin@admin.com
Password:	password
