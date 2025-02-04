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

### 3. Set Up Firebase
Go to your Firebase Console and create a new Firebase project.
Enable Firebase Authentication (e.g., Email/Password) under the Authentication section.
Set up Firestore Database under the Database section for storing disease-related data.
In the Firebase Console, navigate to Project Settings > General, then scroll to the "Your Apps" section and add a web app.
Copy the Firebase SDK configuration and use it in the next steps.

### 4. Configure Firebase SDK in Laravel
In the .env file, configure your Firebase API keys and Firebase credentials. Here’s an example:

  ```bash
  FIREBASE_API_KEY=your_api_key
  FIREBASE_AUTH_DOMAIN=your_project_id.firebaseapp.com
  FIREBASE_PROJECT_ID=your_project_id
  FIREBASE_STORAGE_BUCKET=your_project_id.appspot.com
  FIREBASE_MESSAGING_SENDER_ID=your_sender_id
  FIREBASE_APP_ID=your_app_id
  FIREBASE_MEASUREMENT_ID=your_measurement_id
  ```

Install the Firebase PHP SDK:

  ```bash
  composer require kreait/firebase-php
  ```

Then, create a FirebaseService.php file in your app (e.g., in app/Services/) to initialize Firebase:
```bash
php
Copy
<?php
namespace App\Services;
use Kreait\Firebase\Factory;
class FirebaseService
{
    protected $auth;
    protected $database;

    public function __construct()
    {
        $this->firebase = (new Factory)
            ->withServiceAccount(__DIR__.'/firebase_credentials.json') // Path to Firebase credentials file
            ->create();
        
        $this->auth = $this->firebase->getAuth();
        $this->database = $this->firebase->getDatabase();
    }

    // Methods to interact with Firebase (e.g., authentication, database operations) can go here.
}
```
### 5. Set Up Firebase Authentication
In your Laravel routes or controllers, use Firebase to authenticate users:

```bash
use App\Services\FirebaseService;
class AuthController extends Controller
{
    protected $firebaseService;
    public function __construct(FirebaseService $firebaseService)
    {
        $this->firebaseService = $firebaseService;
    }
    public function register(Request $request)
    {
        // Register user using Firebase Authentication
        $user = $this->firebaseService->register($request->email, $request->password);
        
        // Handle the response and create a local user in Laravel if needed
    }

    public function login(Request $request)
    {
        // Log in user using Firebase Authentication
        $user = $this->firebaseService->login($request->email, $request->password);
        
        // Handle the response
    }
}
```
### 6. Set Up Firestore Database
Use Firebase Firestore to store disease-related data such as reports:

```bash
public function reportDisease(Request $request)
{
    $data = [
        'user_id' => auth()->id(),
        'symptoms' => $request->symptoms,
        'location' => $request->location,
        'date' => now(),
    ];

    $this->firebaseService->getDatabase()
        ->getReference('disease_reports')
        ->push($data);
    
    return response()->json(['message' => 'Disease report submitted successfully']);
}
```

### 7. Run the Laravel App
Now that everything is set up, you can run the Laravel application. First, create the application key by running:
```bash
php artisan key:generate
Then, run the Laravel development server:
```
```bash
php artisan serve
```

Your app should now be running on http://localhost:8000.

### 8. Test Firebase Authentication and Firestore
Make sure to test user registration and login via Firebase Authentication and verify that disease reports are stored in Firestore.

Firebase Structure
Authentication: Firebase handles user registration and login. Users must sign in to report diseases and access features.

Firestore Database: Disease-related data, such as user reports, symptoms, and locations, is stored here. Example structure:

```bash
/disease_reports
  /reportId
    - user_id: "userId"
    - symptoms: ["fever", "cough"]
    - location: "New York"
    - date: "2025-02-04"
Firebase Security Rules
Set up security rules for Firestore to restrict access to authenticated users only. Below is an example of a security rule:

{
  "rules": {
    "disease_reports": {
      ".read": "auth != null",
      ".write": "auth != null"
    }
  }
}
```

Make sure to test and adapt your security rules based on your application's needs.

### Conclusion
The Disease Monitoring System built with Laravel and Firebase offers an easy-to-use platform for tracking and managing disease outbreaks. With Firebase’s real-time database and authentication, it ensures a seamless experience for both users and administrators. You can enhance this system by adding more features such as push notifications, data analysis, and a detailed admin dashboard.
