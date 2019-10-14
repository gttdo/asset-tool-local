# Asset Management Tool
![StackShare](https://img.shields.io/badge/wcd-asset%20tool-orange)

> A simple management tool for all of Gap WCD's devices.

## Contents

- Tech Stack
- Setup
- Admin vs User Frontend
- Future Features
- Contact


### :hammer_and_wrench: Tech Stack
- Apache
- MySQL 5.7.26
- PHP 7.3.8
- Node 10.15.3
- JavaScript
- SASS

### :hammer_and_wrench: Setup
1. Clone or download the git repository and install the essential node packages using this command:
```
$ npm install
```
- If you are using Windows as your OS, the node-sass package will become incompatible and will run into errors when compiling SASS. Skip step number 1, and start with step number 2.

2. Clone or download the git repository and delete the package.json file. You will need to initialize npm again and manually download the dependencies. Thankfully, there are only two (for now)!
```
$ npm init
$ npm i -D node-sass nodemon
```
3. In our package.json file, copy these scripts in our scripts code block.
```
"build-css": "node-sass --include-path scss public/sass/main.scss public/css/main.css",
"watch-css": "nodemon -e scss -x \"npm run build-css\""
```
- "build-css" will compile our main.scss file located in public/sass folders and build our css file to our main.css, located in our public/css folders.
- "watch-css" will watch and compile our sass files automatically with nodemon.


4. Download and install the free version of MAMP and drop this project folder inside the htdocs folder. Our htdocs folder is basically where our project files will live if we want to use MAMP as its server.
```
On Mac, it will be located in:
Applications > MAMP > htdocs > {project_folder_name}

On Windows, it will be located in:
C: > MAMP > htdocs > {project_folder_name}
```


5. Run MAMP and make sure that the Web Server is set to Apache. Moreover, our document root should be under where it can look for our project files.
```
MAC: Macintosh HD > Applications > MAMP > htdocs

WINDOWS: C:\\ > MAMP > htdocs
```

6. On the MAMP Application, click on "Open WebStart page". On the web page, under the "Tools" dropdown, click on phpMyAdmin. This will be the GUI Frontend of our database. You can run SQL queries to create our database or use the frontend interface.

7. Create a new database and name it "asset_tool".

8. In our asset_tool database, create 3 tables by running SQL commands. Click on the "SQL" tab and copy and paste the mysql code under ``users.sql, devices.sql and loans.sql `` one at a time. After copying and pasting the SQL commands, submit the query with "Go" and repeat it again for the remaining two sql tables.

9. Almost there! We're now going to make sure that our database is connected with our web application by verifying our host name, server username, password and database name in our config file. Our config file is inside our /includes folder from our root.
```
$con  =  mysqli_connect("localhost", "root", "root", "asset_tool");
```

10. Head on to our localhost:8888/{project_name} web page, and you'll see the login page. Create an account and use it to sign in! If you're running into a broken or redirect page, make sure that your localhost url is correct within the folders and index.php file.


### :hammer_and_wrench: Future Features
> I've created this application to help manage our devices at work and this was the first full stack application using PHP that I've built. It's very rough and I'm consistently improving and applying more from what I've learned. Feel free to message me for potential bugs, improvements or ideas! Happy building!

- User settings to edit their email, password and add more information to their account.
- Email confirmation that a user has signed up or checked out/ returned a device to the original user and admin.
- Improved filter functionality.
- Improved user experience and design flow.
- Re-build the frontend with React.

### :hammer_and_wrench: Admin vs User Frontend

- Admin: You can login as the admin. You can edit the admin account email under the login-handler.php file inside includes > handlers folder.
``Email: admin@admin.com PW: password``

- User: Create our own or use an existing one inside the users database:
``Email: someone@email.com PW: password``

### :pushpin: pareja.jackie@gmail.com | www.jackiepareja.com
