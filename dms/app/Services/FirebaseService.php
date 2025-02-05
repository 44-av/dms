<?php

namespace App\Services;

use Kreait\Firebase\Factory;

class FirebaseService
{
    protected $firebase;

    public function __construct()
    {
        $factory = (new Factory)
            ->withServiceAccount(storage_path('firebase_credentials.json'))  // Path to your Firebase credentials
            ->withDatabaseUri(env('FIREBASE_DATABASE_URL'));  // Firebase Realtime Database URL

        $this->firebase = $factory->createDatabase();
    }

    // Function to get a Firebase reference
    public function getDatabase()
    {
        return $this->firebase;
    }
}
