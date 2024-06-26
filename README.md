# Candidate Registration Form

This is a simple candidate registration form that allows users to enter their details for a job application as a web developer. The form includes fields for name, email, mobile number, qualification, references, and language skills.

## Features
- Validates user inputs for email and mobile number format.
- Stores user details in a MySQL database.
- Provides feedback to the user upon successful submission.

## Requirements
- PHP server
- MySQL database

## Installation
1. Clone or download the repository to your local machine.
2. Import the provided `database.sql` file into your MySQL database to create the necessary table.
3. Update the `dbcon.php` file with your MySQL database credentials.
4. Ensure that your PHP server is running.
5. Navigate to the project directory in your browser and open the `index.php` file.

## Usage
1. Fill in the registration form with your details.
2. Click the "Register" button to submit the form.
3. Upon successful submission, you will receive a success message.
4. You can view all registered candidates by clicking the "Check Form" link.

## Files
- `index.php`: Contains the HTML form for user registration and PHP code for form submission.
- `dbcon.php`: Contains the database connection code.
- `css/style.css`: Contains the CSS styles for the registration form.
- `links/inks.php`: Provides additional CSS styles (if any).
- `select.php`: Displays the list of registered candidates.

## Credits
This project is created by [Your Name].

## License
This project is licensed under the [MIT License](LICENSE).
