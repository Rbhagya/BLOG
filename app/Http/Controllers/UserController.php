<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;


class UserController extends Controller
{
    public function showUsers()
    {
        return view('blog');
    }

    public function storeUser(Request $request)
    {
        try {
            // Validation logic
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string|max:255'
            ]);
    
            // Create a new User instance
            $user = new Blog;
            $user->name = $request->input('name');
            $user->description = $request->input('description');
            $user->image = $request->input('image');
            // Save the user
            $user->save();
            echo "success";
    
            return redirect()->route('user.show')->with('success', 'User registered successfully');
            // return redirect()->route('user.show');

        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect()->route('user.show')->with('error', 'Failed to register user');
        }
    }
    public function showData()
    {
        $data = Blog::all();
        // echo($data);exit();

        return view('dashboard', ['data' => $data]);
    }

    public function showall()
    {
        $data = Blog::all();
        // echo($data);exit();

        return view('show', ['data' => $data]);
    }

    public function showbyID($id)
    {
        $data = Blog::find($id);

        // echo($data);exit();

        return view('showbyid', ['data' => $data]);
    }
    
    
    
}
