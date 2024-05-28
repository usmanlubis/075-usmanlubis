<h1 align="center">eRent</h1>

## Navigation

- [About eRent](#about-erent)
- [Installation Guide](#installation-guide)

## About eRent
Usman Lubis - 075

eRent is a web-based application created for booking car rentals. It facilitates users and rental companies by automatically providing information on available cars, prices, specifications, and conditions. This eliminates the need for rental administrators to respond to inquiries individually about car availability, prices, and details.

## Installation Guide

1. Clone this GitHub project with the command
    ```sh
    git clone https://github.com/usmanlubis/075-usmanlubis
    ```
2. Open a terminal and navigate to the project directory with the command
    ```
    cd 075-usmanlubis
    ```
3. Download Laravel dependencies with the command:
    ```sh
    composer install
    ```
4. Download Node dependencies for Tailwind with the command:
    ```sh
    npm install
    ```
5. Start MySQL as the database and create a new database named "jda" or adjust it with <code>.env</code> file.
6. In the terminal, enter the command:
    ```sh
    php artisan key:generate
    ```
7. Run the database migrations and seed the initial data with the command:
    ```sh
    php artisan migrate --seed
    ```
8. Run Node for Tailwind with the command:
    ```sh
    npm run dev
    ```
    Keep this terminal open, and open a new terminal.
9. Start the Laravel project directly with Laragon or another application, or through the new terminal with the command:
    ```sh
    php artisan serve
    ```
    Click the link that appears to be directed to your web browser.
10. You can log in with two schemes, as an admin or as a regular user:
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
    - You can also register a new account by signing up.
11. You are now logged into the eRent application. To switch accounts, you can log out using the navbar in the top right corner.
12. To add a new car data, you can use this [dummyData.txt](dummyData.txt).
