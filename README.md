<h1 align="center">eRent</h1>

## Navigation

- [About eRent](#about-erent)
- [Installation Guide](#installation-guide)

## About eRent
Usman Lubis - 075

eRent is a web-based application created for booking car rentals. It facilitates users and rental companies by automatically providing information on available cars, prices, specifications, and conditions. This eliminates the need for rental administrators to respond to inquiries individually about car availability, prices, and details.

## Installation Guide

1. Clone this GitHub project.
2. Open a terminal and navigate to the project directory.
3. Download Laravel dependencies with the command:
    ```sh
    composer install
    ```
4. Download Node dependencies for Tailwind with the command:
    ```sh
    npm install
    ```
5. Start MySQL as the database and create a new database named "jda" or adjust it according to the <code>.env</code> file.
6. In the terminal, enter the command:
    ```sh
    php artisan key:generate
    ```
7. Run the database migrations with the command:
    ```sh
    php artisan migrate
    ```
8. Seed the database for roles with the command:
    ```sh
    php artisan db:seed RoleSeeder
    ```
9. Seed the database for users with the command:
    ```sh
    php artisan db:seed UserSeeder
    ```
10. Optionally, seed the database for cars with the command:
    ```sh
    php artisan db:seed CarSeeder
    ```
11. Run Node for Tailwind with the command:
    ```sh
    npm run dev
    ```
    Keep this terminal open, and open a new terminal.
12. Start the Laravel project directly with Laragon or another application, or through the new terminal with the command:
    ```sh
    php artisan serve
    ```
    Click the link that appears to be directed to your web browser.
13. You can log in with two schemes, as an admin or as a regular user:
    - As an admin, log in with the following credentials:
      - Email: `admin@erent.com`
      - Password: admin
    - As a user, you have two user accounts:
      1. User named Toni:
          - Email: `toni@gmail.com`
          - Password: toni
      2. User named Joni:
          - Email: `joni@gmail.com`
          - Password: joni
    - You can also register new accound by Signing Up
14. You are now logged into the eRent application. To switch accounts, you can log out using the navbar in the top right corner.
15. To add new car data, you can use the data in the file [This Dummy Data](dummyData.txt).
