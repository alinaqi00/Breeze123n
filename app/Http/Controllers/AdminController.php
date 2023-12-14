<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Team;
use App\Models\Post;
use App\Models\Product;

class AdminController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function login(Request $request){
        $check = $request->all();
    
        if ($check && Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])){
            return redirect()->route('admin.dashboard')->with('success', 'Successfully logged in');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }
    

    // AdminController.php

public function Dashboard(){
    // Fetch analytics data (replace this with your actual data fetching logic)
    $analyticsData = [
        'teamData' => Team::count(),
        'postData' => Post::count(),
        'productData' => Product::count(), // Example: Count of team members
        // Add more data as needed for other entities
    ];

    return view('admin.dashboard', compact('analyticsData'));
}

   
    


    public function register(){
        return view('admin.register ');
}
public function register_create(Request $request){
    // dd($request->all());

    Admin::insert([ 
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'created_at' => Carbon::now(),
    ]);
    return redirect()->route('login_form')->with('error','Admin Created Suscessfully');
}

}