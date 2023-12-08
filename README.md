

Installation
Video tutorial : https://youtu.be/IbPbqzmC_aI

Admin Credentials (For Login Purpose) : 
Email : test.user@gmai8l.com
Password : 12345678

Software/Environment Needed (Please install these requirements) :
1. Xampp
2. MySQL Workbench
3. Microsoft Visual Code
4. Git Bash
5. Composer

Steps (Part 1 : Web App) :
1. Open git on your computer and type : git clone https://github.com/irfanAzmi1999/backup.git
2. On your git, change directory by type cd backup.
3. Then, install composer by type : composer install
4. Then, type : cp .env.example .env
5. Open env file inside the project folder and insert your database name and password. Save.
6. Then, run : php artisan key:generate
7. run : php artisan storage:link


Steps (Part 2 : Database) :
1. Open MySQL Workbench (please ensure XAMPP run first (Apache and MySQL)).
2. Then, create connection :
    Hostname : 127.0.0.1
    Password :
    Port : 3306
3. Click Ok.
4. Create new schema make sure same name with your database name in env file (Part 1 - No 5). 
5. Download database sql file from : https://drive.google.com/file/d/1yMqWgBNRyQwM-_kdpCsqsSGfpTl6mWjg/view?usp=sharing
6. Then, in MySQL workbench go to server tab and click data import.
7. Click import from self contained file.
8. Choose the downloaded database sql file.
9. Click Start Import.
10. Then run : php artisan serve
11. The git will display the ip address for you to run the website.


