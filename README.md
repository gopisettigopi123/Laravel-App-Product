# To create table
1.php artisan make:controller ContactController
-->wrtie code for table columns next
2.php artisan migrate
-->to make visible in xampp database
# to create models 
1.php artisan make:model Product
-->this can create models like ex:defining the table columns with protected fillable....
# To create controllers
1.php artisan make:controller UserController
-->To create controllers inside http folder in app
# Create views 
-->Normally create folder inside views.
# to create routes after views 
->Then controllers write the logic 
# To push into github
-->Initialize Git in Your Laravel Project
Open terminal in your project folder:

cd your-laravel-project-folder
git init

#  Add GitHub Repository as Remote
git remote add origin https://github.com/your-username/laravel-app.git

# Stage and Commit Your Project
git add .
git commit -m "Initial commit"
# Push to GitHub
git branch -M main
git push -u origin main

