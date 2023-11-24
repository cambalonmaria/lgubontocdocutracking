<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use App\Models\Position;
// use App\Models\Department;


class EmployeeController extends Controller
{
    public function newemployee(){
        return view('Admin.Employee.new');
    }
     public function editemployee($id){
        dd($id);
        $employee = User::where('id',$id)->first();

        return view('Admin.Employee.update',[
              'employee'=>$employee
        ]);
    }
    public function saveemployee(Request $request){
        $Employeesave= new Employee();
        $Employeesave->fullname = $request->fullname;
        $Employeesave->password = Hash::make($request->password);
        $Employeesave->position = $request->position;
        $Employeesave->department = $request->department;
        
        if($Employeesave->save()) {
             return redirect()->back()->withErrors('Successfully Saved!');
        }
    }
    // public function updateemployee(Request $request){
       
    //     $Updatesave=Employee::where('id',$request->id)->first();
    //     $Updatesave= new Employee();
    //     $Updatesave->fullname = $request->fullname;

    //     // if (isset($request->password)) {
    //         $Updateesave->password = Hash::make($request->password);
    //     // } else{
    //     //     $Updatesave->password =  $Updatesave->password;
    //     // }
        
    //     $Updatesave->device_id= $request->device_id;
    //     $Updateesave->position = $request->position;
    //     $Updatesave->department = $request->department;
        
    //     if($Updatesave->update()) {
    //          return redirect()->url('employee/list')->withSuccess('Successfully Updated!');
    //     }
    // }
}
