<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display register page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function registration(RegistrationRequest $request) 
    {
        // return $request->type;
        $user = User::create($request->validated());

        if ($user) {
            $saveUser_role = new User_role;
            $saveUser_role->userid = $user->id;
            $saveUser_role->roleid = $request->type;
            if ($request->type == 0) {
                $saveUser_role->role_name = "Admin";
            } elseif ($request->type == 2) {
                $saveUser_role->role_name = "User";
            }

            if ($saveUser_role->save()) {
                return redirect()->back()->with('success', 'New user has been created successfully.');
            }
        }

        return redirect()->back()->withErrors('Error', 'Something went wrong while creating the user.');
    }
}
