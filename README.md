# Blog with Laravel

This is a blog project developed with Laravel that allows users to register, log in, and manage their posts. Additionally, it includes an administration panel for user management.

## Features

- User registration and login.
- Creation and deletion of posts.
- Admin panel for user management.
- Intuitive and responsive interface.

## Requirements

- PHP >= 8.0
- Composer
- Laravel >= 10
- MySQL or any other compatible database
- Node.js and NPM (for assets and frontend dependencies)

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/DavidLC578/LaravelBlog.git
   cd LaravelBlog
   ```

2. Install Laravel dependencies:
   ```bash
   composer install
   ```

3. Create the environment file:
   ```bash
   cp .env.example .env
   ```

4. Generate the application key:
   ```bash
   php artisan key:generate
   ```

5. Configure the database in the `.env` file and then run:
   ```bash
   php artisan migrate --seed
   ```

6. Install frontend dependencies and compile assets:
   ```bash
   npm install && npm run dev
   ```

7. Start the local server:
   ```bash
   php artisan serve
   ```

The project will be available at `http://127.0.0.1:8000`.

## Usage

- Users can register and log in.
- Each user can create and delete their own posts.
- Administrators can manage users from the admin panel.

## License

This project is under the MIT license. See the `LICENSE` file for more details.

