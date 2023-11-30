# create laravel project
laravel new taskproject

# make model , controller, seeders, migration, faker in one command
php artisan make:model Task -mfsc

#add table column and run command
php artisan migrate

#for seeders go to new seedes created file i.e. TaskSeeder and import Faker using that you can make how you want fake data and run command to add in database table
php artisan db:seed --class=TaskSeeder

#create route in web.php

#add functions in controller and make views file like layout and all views in resources view

#put all css, js, images in public folder

#last run project
php artisan serve 

