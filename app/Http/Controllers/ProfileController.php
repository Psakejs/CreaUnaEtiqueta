<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]
        );
        
        $request->file('photo')->store('profiles');  // Cambié 'photo' por 'avatar'
        return redirect('profile');
    }


}
