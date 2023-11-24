<?php

namespace App\Http\Controllers;

use App\Models\TrackingLog;
use Illuminate\Http\Request;
use App\Models\Transaction;

class PendingController extends Controller
{
	 public function edittransaction(Request $request){
	 	$transactions=Transaction::where('id',$request->id)->first();

        return view('Admin.Transaction.update',[
              'transaction'=>$transactions
        ]);
    }
    public function pendingtransaction(){
        $transactions=Transaction::orderby('created_at','desc')->with('destinations')->paginate(10);


     
        return view('Admin.Transaction.pending',[
              'transactions'=>$transactions
        ]);
    }
    public function updatetransaction(Request $request){
       

        $Updatesave=Transaction::where('id',$request->id)->first();
        $Updatesave->transaction_code = $request->transaction_code;
        $Updatesave->fullname = $request->fullname;
        $Updatesave->contact_number = $request->contact_number;
        $Updatesave->email_address= $request->email_address;
        $Updatesave->address = $request->address;
        $Updatesave->title = $request->title;
        $Updatesave->destination = $request->destination;
        $Updatesave->purpose = $request->purpose;
        $Updatesave->short_description = $request->short_description;

        if($Updatesave->update()) { 
            return redirect()->back()->withErrors('Updated!');
        }
    }
     public function deletetransaction(Request $request){
        

        $Deletesave=Transaction::where('id',$request->id)->first();
        $Deletesave->transaction_code = $request->transaction_code;
        $Deletesave->fullname = $request->fullname;
        $Deletesave->contact_number = $request->contact_number;
        $Deletesave->email_address= $request->email_address;
        $Deletesave->address = $request->address;
        $Deletesave->title = $request->title;
        $Deletesave->destination = $request->destination;
        $Deletesave->purpose = $request->purpose;
        $Deletesave->short_description = $request->short_description;

        if($Deletesave->delete()) { 
            return redirect()->back()->withErrors('Deleted!');
        }
    }


    public function viewPending(){
        $pendings = Transaction::select('*')->where('status', 'pending')->get();

        return view('Admin.Dashboard.view-pending', compact('pendings'));
    }

}

