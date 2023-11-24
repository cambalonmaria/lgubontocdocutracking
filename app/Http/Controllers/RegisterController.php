<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use App\Models\User_role; // Don't forget to import the User_role model if you haven't already
use Exception;

class RegisterController extends Controller
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
    public function register(Request $request) 
    {
        $data = [
            'position' => $request->position,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'updated_at' => Carbon::now(),
            'department' =>$request->department,
            'type' => 'user'
        ];

        try{
            User::insert($data);
            return response()->json([
                'status_code' => 1
            ]);
        }
        catch(Exception $e){
            return response()->json([
                'status_code' => 0
            ]);
        }

    }
}
