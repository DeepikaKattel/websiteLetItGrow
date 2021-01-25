<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function dashboard()
    {
        $users = User::all()->count();
        $candidates = Career::all()->count();
        $usersUnverified = User::whereNull('email_verified_at')->get();
        $usersCount = count($usersUnverified);
        return view('admin.dashboard', compact('users','usersCount','candidates'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
