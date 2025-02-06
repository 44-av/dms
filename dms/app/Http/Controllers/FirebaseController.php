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
    public function storeUser()
    {
        $newUser = $this->firebase
            ->getReference('user-account/' . uniqid()) // Firebase Node
            ->set([
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'age' => 25
            ]);

        return response()->json(['message' => 'User added successfully!']);
    }
    public function getUsers()
    {
        $users = $this->firebase->getReference('user-account')->getValue();
        return view('users', compact('users'));
    }
    public function updateUser($id)
    {
        $this->firebase
            ->getReference('user-account/' . $id)
            ->update([
                'age' => 30 // Update age to 30
            ]);

        return response()->json(['message' => 'User updated successfully!']);
    }
    public function deleteUser($id)
    {
        $this->firebase->getReference('user-account/' . $id)->remove();
        return response()->json(['message' => 'User deleted successfully!']);
    }

    public function storeDisease()
    {
        $newUser = $this->firebase
            ->getReference('disease/' . uniqid()) // Firebase Node
            ->set([
                'name' => 'Virus',
                'description' => 'Virus',
                'scan-date' => 'January 2, 2025',
            ]);

        return response()->json(['message' => 'Disease added successfully!']);
    }
    public function getDisease()
    {
        $data = $this->firebase->getReference('disease')->getValue();
        return view('diseases', compact('data'));
    }
    public function updateDisease($id)
    {
        $this->firebase
            ->getReference('disease/' . $id)
            ->update([
                'age' => 30 // Update age to 30
            ]);

        return response()->json(['message' => 'User updated successfully!']);
    }
    public function deleteDisease($id)
    {
        $this->firebase->getReference('disease/' . $id)->remove();
        return response()->json(['message' => 'User deleted successfully!']);
    }
    
}
