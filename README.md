# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation]

Alternative installation is possible without local dependencies relying on [Docker](#docker).

Clone the repository

```bash
git clone https://github.com/richardlibrata/todo-project.git
```

Switch to the repo folder

```bash
cd todo-and-monitoring-task
```

Install all the dependencies using composer

    composer install
    
Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Run your Laravel localhost

```bash
php artisan serve
```

Open in your browser url localhost webserve
    
    https://180.0.0.1

## Learn More

To learn more about Laravel, take a look at the following resources:

- [Laravel Main Menu](https://laravel.com/) - learn about Laravel features and guides.
- [Laravel Documentation](https://laravel.com/docs/11.x/readme) - an interactive Laravel tutorial.
