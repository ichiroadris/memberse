<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return Inertia::render('Admin/Post/Index');

    }
}
