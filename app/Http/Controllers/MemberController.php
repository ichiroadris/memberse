<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MemberController extends Controller
{
    public function index()
    {
        $members = User::role(['free', 'silver', 'gold'])->with('subscription')->with('roles')->get();
        // dd($members[1]->roles);
        foreach ($members as $member) {
            if ($member->roles[0]->name != "free") {
                $daysLeft = $member->subscription->expires_at->subDays(10);
                // dd($daysLeft->diffInDays());
                if ($daysLeft->diffInDays() < 10) {
                    $member->subscription->status = 'expiring';
                    $member->subscription->save();
                }
            }
        }
        return Inertia::render('Admin/Member/Index', ['members' => $members, 'currentDate' => Carbon::now()]);
    }
}
