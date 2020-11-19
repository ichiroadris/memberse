<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MemberController extends Controller
{
    public function index() {
        $members = User::role(['free', 'silver', 'gold'])->with('subscription')->with('roles')->get();
        // dd(Carbon::now());
        return Inertia::render('Admin/Member/Index', ['members' => $members, 'currentDate' => Carbon::now()]);
    }
}
