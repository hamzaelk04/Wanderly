<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        $previous = url()->previous();
        if ($user->id !== auth()->id()) {
            return view('forbidden.forbidden', [
                'previous' => $previous
            ]);
        }

        $user->load(['role', 'image']);

        $hideFooter = true;

        return view('dashboard.profile', compact('user', 'hideFooter'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $rules = [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'image' => 'nullable|image|max:2048',
        ];

        if ($request->filled('new_password') || $request->filled('current_password')) {
            $rules['current_password'] = ['required', 'current_password'];
            $rules['new_password'] = ['required', 'min:6', 'confirmed'];
        }

        $request->validate($rules, [
            'current_password.current_password' => 'The current password is incorrect.',
            'new_password.confirmed' => 'The new passwords do not match.',
        ]);

        $request->validate($rules);

        $user->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('profiles', 'public');
            $user->image()->updateOrCreate([], ['path' => $path]);
        }

        if ($request->filled('new_password')) {
            $user->password = Hash::make($request->new_password);
        }

        $user->save();

        return redirect()->route('profile.show', $user->id)
            ->with('success', 'Profile updated successfully.');
    }

}
