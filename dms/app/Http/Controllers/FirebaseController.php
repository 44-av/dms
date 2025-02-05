<?php

namespace App\Http\Controllers;

use Kreait\Laravel\Firebase\Facades\Firebase;
use Illuminate\Http\Request;
use App\Services\FirebaseService;

class FirebaseController extends Controller
{
    protected $firebase;

    public function __construct(FirebaseService $firebaseService)
    {
        $this->firebase = $firebaseService->getDatabase();
    }

    // Store Data in Firebase
    public function storeUser()
    {
        $newUser = $this->firebase
            ->getReference('users/' . uniqid()) // Firebase Node
            ->set([
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'age' => 25
            ]);

        return response()->json(['message' => 'User added successfully!']);
    }

    // Fetch All Users from Firebase
    public function getUsers()
    {
        $users = $this->firebase->getReference('user-account')->getValue();
        return view('users.index', compact('users'));
        //return response()->json($users);
    }

    // Update User in Firebase
    public function updateUser($id)
    {
        $this->firebase
            ->getReference('users/' . $id)
            ->update([
                'age' => 30 // Update age to 30
            ]);

        return response()->json(['message' => 'User updated successfully!']);
    }

    // Delete User from Firebase
    public function deleteUser($id)
    {
        $this->firebase->getReference('users/' . $id)->remove();
        return response()->json(['message' => 'User deleted successfully!']);
    }
}
