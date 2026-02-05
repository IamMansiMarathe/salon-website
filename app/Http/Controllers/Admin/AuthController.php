<?php

namespace App\Http\Controllers\Admin;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $admin = Admin::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Session::put('admin_id', $admin->id);
            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        Session::forget('admin_id');
        return redirect()->route('admin.login');
    }
}

