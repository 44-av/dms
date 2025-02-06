# Disease Monitoring System - Laravel

## Introduction

The Disease Monitoring System is a web application developed using Laravel, designed to track and monitor the spread of diseases in real-time. Users can report symptoms, their locations, and other disease-related data. This data is stored in Firebase, enabling real-time updates and easy access for administrators to track and analyze disease trends.

The app includes features like user registration, disease reporting, symptom tracking, and location monitoring. All data is managed using Firebase as the backend, including authentication and Firestore database.

## Features

- **User Registration and Authentication**: Users can register and log in using Firebase Authentication.
- **Disease Reporting**: Users can report symptoms and track the spread of diseases.
- **Real-Time Updates**: Data is stored and synchronized with Firebase in real-time.
- **Admin Dashboard**: Admin users can access and analyze the submitted data.
- **Location-Based Reporting**: Track disease data based on users' locations.

## Prerequisites

Before setting up the app, make sure you have the following:

- **PHP 8.0+**: Ensure that PHP is installed on your system. You can download it from [PHP.net](https://www.php.net/).
- **Composer**: Install Composer (dependency manager for PHP) from [getcomposer.org](https://getcomposer.org/).
- **Laravel**: This project uses Laravel as the framework. You can download it from [Laravel](https://laravel.com/).
- **Firebase Account**: Create a Firebase account and project by visiting [Firebase](https://firebase.google.com/).
- **Firebase Project**: Set up Firebase Authentication (Email/Password) and Firestore Database.

## Setup Instructions

### 1. Clone the Repository

Clone the repository to your local machine:
  
  ```bash
  git clone https://github.com/yourusername/disease-monitoring-system-laravel.git
  cd disease-monitoring-system-laravel
  ```

### 2. Install Dependencies
Install Laravel project dependencies using Composer:

  ```bash
  composer install
  ```

### 3. Copy env file
```bash
  cp .env.example .env
```

### 4. Run the Laravel App
Now that everything is set up, you can run the Laravel application. First, create the application key by running:
```bash
php artisan key:generate
Then, run the Laravel development server:
```
```bash
php artisan serve
```

Your app should now be running on http://localhost:8000.


Make sure to test and adapt your security rules based on your application's needs.

### Conclusion
The Disease Monitoring System built with Laravel and Firebase offers an easy-to-use platform for tracking and managing disease outbreaks. With Firebase’s real-time database and authentication, it ensures a seamless experience for both users and administrators. You can enhance this system by adding more features such as push notifications, data analysis, and a detailed admin dashboard.
