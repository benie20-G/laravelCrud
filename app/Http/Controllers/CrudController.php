<?php

namespace App\Http\Controllers;

use App\Models\MyUser;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    // Create
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'age' => 'required|numeric',
            'password' => 'required',
            // Add more validation rules as needed
        ]);

        // Create a new user in the databasey
        $user = MyUser::create($validatedData);
        return view('user',['user'=>$user]);
        // Return a response
        // return response()->json($user, 201);
    }

    // Read - Get all users
    public function index()
    {
        $users = MyUser::all();
        // return response()->json($users);
        return view('index', ['users' => $users]);
    }

    // Read - Get a specific user
    public function show($id)
    {
        $user = MyUser::findOrFail($id);
        return view('user',['user'=>$user]);
        // return response()->json($user);
    }

    // Update
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'age' => 'required|numeric',
            'password' => 'required',
            // Add more validation rules as needed
        ]);

        // Find the user and update it
        $user = MyUser::findOrFail($id);
        $user->update($validatedData);
        return response()->json($user);
    }

    // Delete
    public function destroy($id)
    {
        $user = MyUser::findOrFail($id);
        $user->delete();
        $users = MyUser::all();
        // return response()->json($users);
        return view('index', ['users' => $users]);
    }
    public function edit($id)
    {
        $user = MyUser::findOrFail($id);
        return view('edit', ['user' => $user]);
    }
    public function create()
    {
        return view('create');
    }

}
?>
