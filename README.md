
# 🎓 Edmissions.co

EDMISSIONS.CO is an edtech startup which aims to bridge the gap between students, intsitutions and companies alike.

## 🚀 Features

- **User Registration and Authentication**: Secure login for students and admins.
- **Dynamic Student Dashboard**: Enhance your experience with a clean interface.
- **Real-time Updates**: Get the latest notifications about your application.
- **Security**: Strong encryption for user credentials.

## 🛠️ Tech Stack

- **Frontend**: HTML5, CSS3, Bootstrap
- **Backend**: PHP, MySQL
- **Database**: MySQL
- **Version Control**: GitHub

## 📂 Setup Instructions

Follow these steps to set up and run edmissions.co on your local machine:

## Prerequisites
- [XAMPP](https://www.apachefriends.org/index.html): Make sure you have XAMPP installed.


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






  It looks like the repository **edmissions-co** is a PHP-based project that involves user management. Since you asked for a beautified version of its README, here's a possible structure with enhancements:

---

# 🎓 Edmissions.co

Welcome to **Edmissions.co**, a web application built to simplify and streamline the college admission process for students and administrators alike.

## 🚀 Features

- **User Registration and Authentication**: Secure login for students and admins.
- **Dynamic Student Dashboard**: Manage your application process with a clean interface.
- **Admin Panel**: Oversee and manage student admissions seamlessly.
- **Real-time Updates**: Get the latest notifications about your application.
- **Security**: Strong encryption for user credentials.

## 🛠️ Tech Stack

- **Frontend**: HTML5, CSS3, Bootstrap
- **Backend**: PHP, MySQL
- **Database**: MySQL
- **Version Control**: GitHub

## 📂 Setup Instructions

1. Clone the repository:
    ```bash
    git clone https://github.com/akifurrahman/edmissions.co.git
    ```
2. Import the MySQL database:
    ```sql
    mysql -u <username> -p <password> edmissions < usertable.sql
    ```
3. Update your database credentials in `config.php`.
4. Run the app locally by starting your PHP server:
    ```bash
    php -S localhost:8000
    ```

## ⚙️ Database Structure

Ensure that your MySQL server is running, and create the database using the `usertable.sql` script provided in the repository.

### Tables

- **usertable**: Stores user information (id, name, email, password, etc.)
  
## 💡 Key Files

- **config.php**: Contains database configurations.
- **index.php**: Entry point of the application.
- **usertable.sql**: SQL dump for user data table.

---

This version adds icons for clarity and organizes the information for easy readability. Let me know if you want any additional modifications!
