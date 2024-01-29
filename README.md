EDMISSIONS.APP is an edtech startup which aims to bridge the gap between students, intsitutions and companies.

# edmissions.co Setup Guide

Follow these steps to set up and run edmissions.co on your local machine:

## Prerequisites
- [XAMPP](https://www.apachefriends.org/index.html): Make sure you have XAMPP installed.

## Installation Steps

1. **Install XAMPP:**
   - Download and install XAMPP from [here](https://www.apachefriends.org/index.html).

2. **Move the Folder:**
   - For Windows: Paste the `edmissions-co` folder in `C:/xampp/htdocs/`.
   - For macOS: Paste the `edmissions-co` folder in `Applications/XAMPP/htdocs/`.

3. **Setup Servers:**
   - Start the Apache Web Server and MySQL Server using XAMPP Control Panel.

4. **Access phpMyAdmin:**
   - Open your web browser and go to `localhost/phpmyadmin`.

5. **Create Database:**
   - Create 2 databases named `userform` and `studentDetailsToInstitutions`.

6. **Import Database Tables:**
   - Import the table named `usertable.sql` into the `userform` database.
   - Import the table named `studentDetailsToInstitutions.sql` into the `studentDetailsToInstitutions` database.

7. **Access the Application:**
   - Open your browser and go to `http://localhost/edmissions-co/login-signup-php/` to access the application.
