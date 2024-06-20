
## Features

- Displays products on a single page with basic information.
- Allows viewing detailed information about each product in a modal.
- Includes functionality to add new products and delete existing ones.
- Uses Bootstrap for styling and modals.

## Installation

1. Clone the repository: git clone https://github.com/hauzenberge/tz_from_Spefix
2. Navigate into the project directory
3. Install PHP dependencies: composer install
4. Duplicate the .env.example file and rename it to .env. Update the database information in this file.
5. Generate application key: php artisan key:generate
6. Run database migrations and seed data: php artisan migrate --seed
7. Start the development server: php artisan serve

Access the application at http://localhost:8000.

8. (Optional) Set up storage link:

If your application uses storage (e.g., for product images), create a symbolic link from public/storage to storage/app/public: php artisan storage:link


## Usage

- Navigate to http://localhost:8000 in your web browser to view the application.
- Click on "Details" button on any product card to view more information in a modal.
- Use the "Add Product" button to add new products.
- Use the "Delete" button on each product card to remove products.

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).