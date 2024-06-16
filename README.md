________________________________________
**MyExcelApp**

MyExcelApp is a web application designed to allow users to register, log in, upload Excel files, and display the uploaded data on the webpage. The application is devloped using Laravel 10 and PostgreSQL, and leverages the Maatwebsite Excel package for handling Excel file imports.


**Features**
1.	**User Registration**: Allows new users to register by providing their email and password.
2.	**User Login**: Registered users can log in using their email and password.
3.	**Excel File Upload**: Users can upload Excel files (.xlsx format).
4.	**Data Storage**: Uploaded data is stored in a PostgreSQL database.
5.	**Logout option**
6.	**Data Display**: The data from the uploaded Excel files is displayed on a user-friendly dashboard.


   
**Technologies Used**
•	Backend: Laravel 10 Framework
•	Frontend: HTML, CSS (Bootstrap), JavaScript
•	Database: PostgreSQL
•	File Processing: Maatwebsite Excel package for Laravel



**Installation and Setup**

Prerequisites
•	PHP >= 8.0
•	Composer
•	PostgreSQL
•	Node.js & npm (optional for running Laravel Mix)



**Steps to use this project**

1.	Clone the Repository
bash
Copy code
git clone https://github.com/yourusername/MyExcelApp.git
cd MyExcelApp

2.	Install Dependencies
bash
Copy code
composer install
npm install
npm run dev

3.	Environment Configuration
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

4.	Generate Application Key
bash
Copy code
php artisan key:generate

5.	Run Migrations
bash
Copy code
php artisan migrate

6.	Run the Application
bash
Copy code
**php artisan serve**

The application will be accessible at http://127.0.0.1:8000.


_**Usage**_

**User Registration and Login**
1.	Register: Navigate to the registration page and fill out the registration form.
2.	Login: Use the registered email and password to log in.

**Uploading an Excel File**
1.	Navigate to Upload Page: After logging in, navigate to the file upload page.
2.	Upload: Select an Excel file (.xlsx) and upload it.

**Viewing Uploaded Data**
1.	Dashboard: Once the file is uploaded, you will be redirected to the dashboard where the data from the uploaded Excel file is displayed in a table format.




_**Code Structure**_

**Controllers**
•	AuthController: Handles user registration and login.
•	ExcelController: Manages file upload and data display.

**Models**
•	User: Represents the user entity.
•	ExcelDataTable: Represents the table where Excel data is stored.

**Views**
•	auth/register.blade.php: Registration form.
•	auth/login.blade.php: Login form.
•	upload.blade.php: File upload form.
•	dashboard.blade.php: Displays uploaded Excel data.

**Middleware**
•	AuthCheck: Ensures users are authenticated before accessing certain routes.


Important Files
•	.env: Environment variables configuration.
•	routes/web.php: Web routes for the application.
•	config/database.php: Database configuration.
•	resources/views/: Directory containing all view files.
•	app/Http/Controllers/: Directory containing all controller files.


Dependencies
•	Laravel Framework: For building the web application.
•	Bootstrap: For frontend styling.
•	Maatwebsite Excel: For handling Excel file uploads and processing.


Customization
Styling
•	Modify the CSS in the view files to customize the appearance.
Routes
•	Update routes/web.php to add or modify routes.
Controllers
•	Extend controller logic as needed for additional functionality.

