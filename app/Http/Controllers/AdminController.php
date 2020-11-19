<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // return dd($user->getRoleNames());
        return Inertia::render('Admin/Index');
    }
}
