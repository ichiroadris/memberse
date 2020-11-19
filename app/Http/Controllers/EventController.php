<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class EventController extends Controller
{
    public function index() {
        return Inertia::render('Admin/Event/Index');
    }

    public function create() {
        dd("event create");
    }
}
