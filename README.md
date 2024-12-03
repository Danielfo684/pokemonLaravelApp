###Pokédex Laravel Application
This is a Laravel-based web application that serves as a Pokédex. It allows users to view and manage Pokémon data, as well as handle user authentication.

##Table of Contents
#Installation
#Usage
#Routes
#Controllers
#Views
#Configuration
#License
#Installation
##Clone the repository:
git clone https://github.com/yourusername/pokedex-laravel.git
cd pokedex-laravel
##Install dependencies:
composer install
npm install
##Copy the example environment file and configure it:
cp .env.example .env
##Generate an application key:
php artisan key:generate
##Run the migrations:
php artisan migrate
##Start the development server:
php artisan serve
##Usage
To start using the application, navigate to http://localhost:8000 in your web browser. You can log in, log out, and manage Pokémon data.

##Routes
The application routes are defined in web.php. Here are the main routes:
<?php
Route::get('/', [MainController::class, 'main'])->name('main');
Route::get('login', [MainController::class, 'login'])->name('login');
Route::get('logout', [MainController::class, 'logout'])->name('logout');
Route::resource('pokemon', PokemonController::class);


