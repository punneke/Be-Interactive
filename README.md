Greetings and welcome to the Be-Interactive Venice trip project! In this readme I will guide you through the various things that were involved in making this project, and I will give a short instruction as to how to setup this project for use on your own pc! But, first things first:

This project was made so that employee’s of Be-Interactive could visit the site and sign up for the Venice business trip planned later this year. Upon registration for the trip, said employee’s would receive a confirmation e-mail with the filled in info plus a link they could use to edit their filled in info.

The project had the following requirements:

The form must contain the following fields: 
-	Name
-	Email
-	Date of birth
-	Passport number
-	A checkbox to indicate going with or not.

Optional fields:
-	Fear of flying (Yes, No, Maybe (in dropdown))
-	Allergies and/or medicine use
-	Travelwishes

System requirements included:
-	Laravel 8 framework or separate PHP files
-	PHP 7.4 or higher
-	Data storage in MySQL

Note: I added phone number here, since it is very handy to have in case of an emergency during travels.


Installation:
In order to install the project on your pc you can use the following link to clone and download the project: 

https://github.com/Torque-86/Be-Interactive

Unzip the project in the htdocs folder of your Xampp folder. Open Commandprompt or Powershell. Navigate to the folder where you just unzipped the project. Now type “Code .” This should automatically open Visual studio Code with the entire project loaded.

Start up Xampp, start your Apache and SQL servers. 

Connecting the database:
In order to properly use the project you have to connect a database to Laravel. There is one provided in the Github Repository. Import it to your SQL server. If you have a useraccount already set up in MySQL make sure it is now connected to the new database and has all rights to create, delete, edit etc.

Setup .env:
Laravel uses a connection file to handle all database, e-mailservers and other connections. In VSC, navigate to .env. Fill in all relevant data here. This includes:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=be-interactive
DB_USERNAME=Be-Admin
DB_PASSWORD=

And for the e-mailserver:

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=b70535d8f8e8f7
MAIL_PASSWORD=19ef520bf15329
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"


Starting the project:
Go back to VSC, select terminal -> New Terminal. Now type: “php artisan serve” to start the project. After this, navigate to localhost:8000 on any browser to view the project.


Overview of work done:

Routes\web.php
Added routes for the contactform and editform. I left some leftover signed routes in there. I got far with their implementation but in the end I decided the UUID method was easier.

Views
-	Confirmation_email.blade.php is the email template for the employee.
-	Contact_email.blade.php is the email template for the systemadmin to be notified by a new sign up.
-	Contact_us.blade.php is the sign up form. This blade was part of a tutorial I followed to set up a starting point for my form. The tutorial came with a form and controller but I ended up adapting these in their entirety. I wanted to change the name afterwards but got too many naming and define errors so I left it as is.
-	Edit_confirmation.blade.php is the email template to confirm changes made to an employee’s info.
-	Edit_form.blade.php is basically a copy of the contact_us.blade with the exception that an ID has to be entered. This way I was able to pull the relevant data for that user from the database and perform a sort of reCAPTCHA at the same time since no Bot could enter the ID from the confirmation mail.
-	Welcome.blade.php is the default starting blade made my Laravel. I changed it to have a more thematically correct homepage for the project.

Public\css\style.css
Added several css values to handle the contact_us form, edit_form and homepage.

Database\Migrations
Added create_contacts_table to generate a database to use in the project. Changed the Schema to all the required fields.

App\Traits\traits.php
Traits.php was added to handle the UUID generation. Since I have to use these as a more unique ID so that employee’s can change their data with the edit form.

App\Models\Contact.php
Added use UUID for UUID functionality

App\Models\ContactModel.php
Added for functionality in the edit form.

App\Http\Controllers
Added both ContactController.php and UpdateContact.php. These controllers are used to manage the first sign up form and the edit form. They also send out the e-mail when a form is filled out. The sign up form also sends an e-mail to the system administrator as a heads up that the form has been filled out.


How it works:
Employee’s visit the homepage and are greeted with a very nice background of Venice and a button to sign up for the trip. When the button is pressed they are presented with a form where they can add their information required to go on the trip.
When all information has been entered, the employee presses “Verstuur!”. All entries in the form will be stored in the database. Aside from that, a unique ID key will be generated and 2 e-mails will be send out.

1 e-mail goes to the systemadmin as a notification that a new user has signed up for the trip and 1 e-mail goes to the user him or herself with a copy of all information they entered and a link to the edit page. Above the link there will be a notification that, if they wish to change any information, they have to use the unique ID provided in the e-mail. 

When the link is followed the user will reach the edit page where they have to enter the unique ID and they have to fill out their data again. Upon clicking “Wijzig!” the system will overwrite all previous data in de database and 1 new e-mail will be send out to the user, confirming their changes. And even here, a new link will be provided to change the data again if needed.

How can you help this project?
If you wish to help with his project, you can start by explaining to me how Signed routes work, how to implement them and to use their routes.


