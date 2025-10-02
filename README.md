# Project Description

This is a simple Blog Platform Built with [Laravel](https://laravel.com/) 12, Blade Templates, and MySQL
Features include:

- User authentication (login/register)
- Dashboard with links to posts
- blog posts (Create, show)
- Show full post content
- Success messages after creating posts
- Clean and responsive UI with Tailwind CSS
- Publication date displayed for each post

# Steps to run the project 

- composer create-project laravel/laravel my-blog ->to set the project file
- Set up database in .env file as(DB_DATABASE=my-blog)
- php artisan serve --> to run local server
- php artisan make:model Post -mscf --> to make migration,seeder,factory,controller and model 
- Create Migration for the posts table
- php artisan migrate --> to Run Migration 
- Create Routes in web.php
- create blade templates
- sql file has 6 posts in(database/seeder/posts.sql)

# Screenshots

- App Layout -->Main application layout
![App Layout](screenshots/app-layout.png)

- Dashboard -->Dashboard after login
![Dashboard](screenshots/dashboard.png)

- Posts Index -->List of all posts
![Posts Index](screenshots/posts-index.png)

- Show Post -->View single post
![Show Post](screenshots/posts-show.png)

- Create Post -->Form to create a new post
![Create Post](screenshots/posts-create.png)
