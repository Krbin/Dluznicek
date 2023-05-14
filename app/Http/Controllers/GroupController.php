<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function store(Request $request)

    {
        $formFields = request()->validate([
            'group_name' => 'required',
        ]);

        Group::create($formFields);


        return redirect('/')->with('succes', 'Payment created succesfully');
    }
}
