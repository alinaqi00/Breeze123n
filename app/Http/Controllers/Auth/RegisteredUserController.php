<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Twilio\Rest\Client;
class RegisteredUserController extends Controller
{
    
    public function create(): View
    {
        return view('auth.register');
    }

   
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone_number' => 'required|string|min:10|max:15|unique:users',
            'role' => 'required|string|in:user,vendor,admin',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone_number' => $request->phone_number,
            'role' => $request->role,
        ]);
        $verificationCode = rand(1000, 9999);
        $user->verification_code = $verificationCode;
        $user->save();

        // Use Twilio to send SMS
        
             $twilio = new Client(config('services.twilio.sid'),config('services.twilio.token'));
        // dd($twilio);    
        $twilio->messages->create(
            "+923335980276", // User's phone number
            array(
                'from' => config('services.twilio.from'),
                'body' => "Your verification code is: $verificationCode",
            )
        );
        return redirect()->route('login');
    }

}
