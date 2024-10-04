
# 🎓 Edmissions.co

EDMISSIONS.CO is an edtech startup which aims to bridge the gap between students, intsitutions and companies alike.

## 🚀 Features

•	User Registration and Authentication: Secure login for students and admins, including registration based on E-Mail OTPs.
•	Dynamic Student Dashboard: Enhance your experience with a clean interface.
•	Real-time Updates: Get the latest notifications about your application.
•	Security: Strong encryption for user credentials.

## 🛠️ Tech Stack

•	Frontend: HTML5, CSS3, Bootstrap
•	Backend: PHP, MySQL
•	Database: MySQL
•	Version Control: GitHub

## Setup Guide

Follow these steps to set up and run edmissions.co on your local machine:

## Prerequisites
- [XAMPP](https://www.apachefriends.org/index.html): Make sure you have XAMPP installed.

## Installation Steps

1. **Install XAMPP:**
   - Download and install XAMPP from [here](https://www.apachefriends.org/index.html).

2.	**Clone the repository:**

git clone https://github.com/akifurrahman/edmissions.co.git

3. **Move the Folder:**
   - For Windows: Paste the `edmissions-co` folder in `C:/xampp/htdocs/`.
   - For macOS: Paste the `edmissions-co` folder in `Applications/XAMPP/htdocs/`.

4. **Setup Servers:**
   - Start the Apache Web Server and MySQL Server using XAMPP Control Panel.

5. **Access phpMyAdmin:**
   - Open your web browser and go to `localhost/phpmyadmin`.

6. **Create Database:**
   - Create 2 databases named `userform` and `studentDetailsToInstitutions`.

7. **Import Database Tables:**
   - Import the table named `usertable.sql` into the `userform` database.
   - Import the table named `studentDetailsToInstitutions.sql` into the `studentDetailsToInstitutions` database.

8. **Access the Application:**
   - Open your browser and go to `http://localhost/edmissions-co/login-signup-php/` to access the application.
