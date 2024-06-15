MyExcelApp

MyExcelApp is a web application that allows users to register, log in, upload Excel files, and display the uploaded data on a webpage. This project is designed using Laravel 10 and PostgreSQL.

Features:

1. User Registration: New users can register by providing their email and password.
2. User Login: Registered users can log in with their email and password.
3. Excel File Upload: Users can upload Excel files (.xlsx format).
4. Data stored in database.
5. Display Uploded Data on Webpage: The data from the uploaded Excel files is displayed on a user-friendly dashboard.

Technologies Used:
Backend: Laravel 10 Framework
Frontend: HTML, CSS (Bootstrap), JavaScript
Database: PostgreSQL
File Processing: Maatwebsite Excel package for Laravel

Installation and Setup:
Prerequisites
PHP >= 8.0
Composer
PostgreSQL
Node.js & npm (optional for running Laravel Mix)

Steps
Clone the repository

bash
Copy code
git clone https://github.com/yourusername/MyExcelApp.git
cd MyExcelApp
Install dependencies

bash
Copy code
composer install
npm install
npm run dev
Environment configuration

Copy .env.example to .env
bash
Copy code
cp .env.example .env
Set up your database credentials in the .env file
env
Copy code
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

Generate application key

bash
Copy code
php artisan key:generate
Run migrations

bash
Copy code
php artisan migrate
Serve the application

bash
Copy code
php artisan serve
The application will be accessible at http://127.0.0.1:8000.

Usage:

User Registration and Login
Register: Navigate to the registration page and fill out the registration form.

Login: Use the registered email and password to log in.

Uploading an Excel File

Navigate to Upload Page: After logging in, navigate to the file upload page.
Upload: Select an Excel file (.xlsx) and upload it.

Viewing Uploaded Data

Dashboard: Once the file is uploaded, you will be redirected to the dashboard where the data from the uploaded Excel file is displayed in a table format.

Code Structure
Controllers:

AuthController: Handles user registration and login.
ExcelController: Manages file upload and data display.
Models:

User: Represents the user entity.
ExcelDataTable: Represents the table where Excel data is stored.
Views:

auth/register.blade.php: Registration form.
auth/login.blade.php: Login form.
upload.blade.php: File upload form.
dashboard.blade.php: Displays uploaded Excel data.
Middleware:

AuthCheck: Ensures users are authenticated before accessing certain routes.
Important Files
.env: Environment variables configuration.
routes/web.php: Web routes for the application.
config/database.php: Database configuration.
resources/views/: Directory containing all view files.
app/Http/Controllers/: Directory containing all controller files.
Dependencies
Laravel Framework: For building the web application.
Bootstrap: For frontend styling.
Maatwebsite Excel: For handling Excel file uploads and processing.
Toastr: For displaying notifications.
Customization
Styling: Modify the CSS in the view files to customize the appearance.
Routes: Update routes/web.php to add or modify routes.
Controllers: Extend controller logic as needed for additional functionality.
Troubleshooting
Common Issues:
Ensure all dependencies are installed and up to date.
Check database connection settings in the .env file.
Run php artisan migrate:fresh to reset the database if needed.
Table of Contents
Overview
Features
Requirements
Setup

1. Clone the Repository
2. Install Dependencies
3. Environment Configuration
4. Database Setup
5. Run Migrations and Seeders
6. Serve the Application
   Usage
7. Register
8. Login
9. Upload Excel File
10. View Imported Data

    Overview:
    MyExcelApp is designed to provide a user-friendly interface for managing Excel file uploads and displaying imported data. The application supports user registration, authentication, and data visualization, making it easy to handle Excel files in a web environment.

Features
User Registration: New users can register for an account.
User Login: Existing users can log in to access their dashboard.
Excel File Upload: Users can upload Excel files (.xlsx).
Data Visualization: Imported data from Excel files is displayed in a structured table format.

Usage

1. Register
   Navigate to the registration page.
   Fill out the registration form with your details.
   Submit the form to create a new account.
2. Login
   Navigate to the login page.
   Enter your email and password.
   Submit the form to log in to your account.
3. Upload Excel File
   After logging in, navigate to the dashboard.
   Use the provided form to upload an Excel file (.xlsx).
   Submit the form to upload and import the data from the file.
4. View Imported Data
   Once the Excel file is uploaded, navigate to the data view page.
   The imported data will be displayed in a structured table format.
