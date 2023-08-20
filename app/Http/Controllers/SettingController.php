<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingController extends Controller
{
    public function editSetting(User $id)
    {
        return view('profile.editt', compact('id'));

    }

    public function updateSetting(Request $request, User $user)
    {


        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => ''
        ]);

        $imagePath = request('image')->store('profile', 'public');


        $imageArray = ['image' => $imagePath];


        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));
        return redirect("/account/{$user}");
    }









}
