# login-system-php-mysql
the code demonstrates a login system build with PHP HTML and CSS. it allows users to login and logout with sessions
feel free to edit and use the code. pleasse leave a star.
comment and ask where you dont understand.

#how to run the code.
Install XAMPP: Download and install XAMPP from the Apache Friends website for your operating system.

Start Apache and MySQL: Once you have installed XAMPP, start the Apache and MySQL services through the XAMPP Control Panel.

Create a new folder in the htdocs directory: Create a new folder in the htdocs directory of your XAMPP installation where you will store your PHP files. For example, you can create a folder named login and store your index.php, login.php, and logout.php files in it.

Create a MySQL database: In phpMyAdmin, create a new database named login and create a table named users with the columns username, password, and user_id (as the primary key).

Update the database connection details: In your database_connection.php file, update the database hostname, username, password, and database name to match your XAMPP installation.

Run the PHP files: In your web browser, navigate to http://localhost/login/index.php (replace login with the name of the folder you created in step 3). You should see the login page. Enter your username and password (which you added to the users table in step 4) and click the "Login" button. If your credentials are correct, you will be redirected to index.php and you should see the navigation bar.

Test the logout functionality: Click on the "Logout" link in the navigation bar to test the logout functionality. You should be redirected to the login page.
