<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        $user->load(['role', 'image']);

        $hideFooter = true;

        return view('dashboard.profile', compact('user', 'hideFooter'));
    }
}
