________________________________________
**MyExcelApp**

MyExcelApp is a web application designed to allow users to register, log in, upload Excel files, and display the uploaded data on the webpage. The application is devloped using Laravel 10 and PostgreSQL, and leverages the Maatwebsite Excel package for handling Excel file imports.
 <br></br>

**Features**
1.	**User Registration**: Allows new users to register by providing their email and password.
2.	**User Login**: Registered users can log in using their email and password.
3.	**Excel File Upload**: Users can upload Excel files (.xlsx format).
4.	**Data Storage**: Uploaded data is stored in a PostgreSQL database.
5.	**Logout option**
6.	**Data Display**: The data from the uploaded Excel files is displayed on a user-friendly dashboard.
 <br></br>

   ![Screenshot 2024-06-16 153253](https://github.com/SriCoD/Nic-Project/assets/72248660/475ca9b7-6ec5-4cef-adfe-0a53f29e651a)

   ![Screenshot 2024-06-16 153223](https://github.com/SriCoD/Nic-Project/assets/72248660/20f69466-5ca6-435c-aca3-1283aa89c3a2)
![Screenshot 2024-06-16 151942](https://github.com/SriCoD/Nic-Project/assets/72248660/ae4bd8f3-4152-4f9a-8690-097a59a0ff7a)

![Screenshot 2024-06-16 152451](https://github.com/SriCoD/Nic-Project/assets/72248660/7d14e477-1cec-4240-8c39-d4e16db8cc3d)

![Screenshot 2024-06-16 153007](https://github.com/SriCoD/Nic-Project/assets/72248660/1864529e-ae29-4675-95ac-11e1cd446173)

![Screenshot 2024-06-16 154203](https://github.com/SriCoD/Nic-Project/assets/72248660/f10dad2d-b00f-404f-8bc0-84c815207e03)

![Screenshot 2024-06-16 154703](https://github.com/SriCoD/Nic-Project/assets/72248660/b3187fcb-0c78-4442-8b4a-577c9dfb933d)



<br></br>
**Technologies Used**!

•	Backend: Laravel 10 Framework!
•	Frontend: HTML, CSS (Bootstrap), JavaScript
•	Database: PostgreSQL
•	File Processing: Maatwebsite Excel package for Laravel
 <br></br>


**Installation and Setup**

Prerequisites
•	PHP >= 8.0
•	Composer
•	PostgreSQL
•	Node.js & npm (optional for running Laravel Mix)

 <br></br>

**Steps to use this project**

1.	Clone the Repository

git clone https://github.com/yourusername/MyExcelApp.git<br></br>
cd MyExcelApp<br></br>

2.	Install Dependencies

composer install<br></br>
npm install<br></br>
npm run dev<br></br>

3.	Environment Configuration<br></br>
Copy .env.example to .env
<br></br>
cp .env.example .env<br></br>
Set up your database credentials in the .env file
env <br></br>

DB_CONNECTION=pgsql  <br></br>
DB_HOST=127.0.0.1  <br></br>
DB_PORT=5432 <br></br>
DB_DATABASE=your_database_name <br></br>
DB_USERNAME=your_database_username <br></br>
DB_PASSWORD=your_database_password <br></br>
<br></br>
4.	Generate Application Key

php artisan key:generate<br></br>

5.	Run Migrations

php artisan migrate<br></br>

6.	Run the Application
<br></br>
**php artisan serve**

The application will be accessible at http://127.0.0.1:8000.
 <br></br>

_**Usage**_

**User Registration and Login**
1.	Register: Navigate to the registration page and fill out the registration form.
2.	Login: Use the registered email and password to log in.
 <br></br>
**Uploading an Excel File**
1.	Navigate to Upload Page: After logging in, navigate to the file upload page.
2.	Upload: Select an Excel file (.xlsx) and upload it.
 <br></br>
**Viewing Uploaded Data**
1.	Dashboard: Once the file is uploaded, you will be redirected to the dashboard where the data from the uploaded Excel file is displayed in a table format.


 <br></br>

_**Code Structure**_

**Controllers**
•	AuthController: Handles user registration and login.
•	ExcelController: Manages file upload and data display.
 <br></br>
**Models**
•	User: Represents the user entity.
•	ExcelDataTable: Represents the table where Excel data is stored.
 <br></br>
**Views**
•	auth/register.blade.php: Registration form.
•	auth/login.blade.php: Login form.
•	upload.blade.php: File upload form.
•	dashboard.blade.php: Displays uploaded Excel data.
 <br></br>
**Middleware**
•	AuthCheck: Ensures users are authenticated before accessing certain routes.
 <br></br>

Important Files
•	**.env**: Environment variables configuration.
•	**routes/web.php**: Web routes for the application.
•	**config/database.php**: Database configuration.
•	**resources/views/**: Directory containing all view files.
•	**app/Http/Controllers/**: Directory containing all controller files.

 <br></br>
Dependencies
•	Laravel Framework: For building the web application.
•	Bootstrap: For frontend styling.
•	Maatwebsite Excel: For handling Excel file uploads and processing.

 <br></br>
Customization
Styling
•	Modify the CSS in the view files to customize the appearance.
Routes
•	Update routes/web.php to add or modify routes.
Controllers
•	Extend controller logic as needed for additional functionality.

