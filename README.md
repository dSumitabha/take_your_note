#PHP Web Application - User Authentication and Notes Management
###Overview
This PHP web application serves as a basic demonstration of user authentication and CRUD (Create, Read) operations with a MySQL database. The project includes the following pages:

##Home Page:

Displays links to Signup, Login, and Dashboard pages.
##Signup Page:

Allows users to create a new account with a username and password.
Basic validation is implemented; however, password hashing is not used in this version.
##Login Page:

Provides a simple login form.
Redirects users to the Dashboard upon successful login.
##Dashboard:

Welcomes the user with their session username.
Features an input field to enter a short note.
A button to save the note in the database.
Displays all saved notes in a basic table if any.
Purpose
The main purpose of this project is to provide a practical overview of a complete PHP web application with a focus on user authentication and basic database operations (CREATE and READ). The application demonstrates the following key functionalities:

User Registration and Authentication.
Login functionality with session management.
Interaction with a MySQL database for storing and retrieving user notes.
Simple CRUD (Create and Read) operations on user notes.
How to Use
Clone the repository to your local environment.

bash
Copy code
git clone https://github.com/dSumitabha/take_your_note.git
Set up a web server environment (e.g., XAMPP, WAMP, MAMP) and configure it to run the PHP project.

Import the included SQL file (database.sql) into your MySQL database to create the necessary table.

Open the project in your web browser and navigate through the Signup, Login, and Dashboard pages.

Notes
This project is intended for educational purposes and serves as a foundation for understanding PHP, user authentication, and basic database interactions.

For a production environment, consider implementing additional security measures, such as password hashing, input validation, and protection against SQL injection.
