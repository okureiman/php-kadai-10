<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function add()
    {
    return view('admin.profile.create');
}

 public function create()
 {
    //  PHP/Laravel 14 課題　6
    $this->validate($request,Profile::$rules);
    
    $profile = new profile;
    $form = $request->all();
    
     $profile->fill($form);
     $profile->save();
     
     return redirect('admin/profile/create');
 }

public function edit()
{
    return view('admin.profile.edit');
}

public function update()
{
    return redirect('admin/profile/edit');
}
}