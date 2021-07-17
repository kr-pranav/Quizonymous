<b>Quizonymous - The Quizzing Site</b>

Database Management System project which aims in providing a platform for organizations to conduct quiz competitions alongside providing a user-friendly quizzing experience to the users.

Go to the Documentation folder to view detailed description of the project. <br>
--TABLE OF CONTENTS--

	1. INTRODUCTION 
	2. FUNCTIONAL REQUIREMENTS 
	3. ER DIAGRAM 
	4. RELATIONAL SCHEMA 
	5. USER INTERFACE DESIGN 
	6. IMPLEMENTATION
		a. CREATING AND CONNECTING TO DATABASE 
		b. TABLE CREATION 
		c. SETTING UP FOREIGN KEYS & CONSTRAINTS 
		d. SIGNING UP 
		e. LOGGING IN 
		f. TAKING QUIZ 
		g. SETTING UP TRIGGERS 
		h. SETTING UP PROCEDURES (WITH CURSORS) 
		i. SETTING UP VIEWS 
		j. FRONT END 
	7. RESULT 
	8. REFERENCES 

<br>In order to use this application, download and install XAMPP from https://www.apachefriends.org/index.html.<br>
Then clone this repo into the hosting folder [var/www/html in 'Linux', htdocs in 'Windows'].

Open the XAMPP control panel and start Apache and MySQL.<br>
Edit the <b>config.php</b> file with your phpMyAdmin credentials (You can create your account by going into http://localhost/phpmyadmin/).

To configure the PHP-Mailer (to send OTP for facilitating account creation), edit PHP-mailer/mail.php file by entering your G-mail account credentials in the indicated areas (Creation of a new G-mail account is highly recommended). <br>
After creating the new G-mail account, follow the below steps: <br>
&emsp;&emsp;Sign-in --> Manage your Google Account --> Security --> Less Secure App Access --> Turn ON

Now run <b>build.php</b> file to setup the application.

After the successful completion of the aforementioned steps, the application is ready to use. <br>
Enter http://localhost/Quizonymous/front-end in your web browser to go to the home page.	

If you wish to remove the database from your SQL server, run dropDB.php file.

--HAPPY QUIZZING--

