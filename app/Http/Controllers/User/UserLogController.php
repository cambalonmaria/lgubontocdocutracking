<?php

namespace App\Http\Controllers\User;

use App\Models\Log;
use App\Models\TrackingLog;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserLogController extends Controller
{

     public function userdocumentlog(){
        
        return view('User.Log.document');
    }

    public function userSearchTransaction(Request $request){
        $search_val = $request->search_value;

        $transactions =TrackingLog::select('tracking_logs.title', 'tracking_logs.short_description', 'tracking_logs.department','tracking_logs.updated_at')
        ->join('transactions', 'transactions.id', '=', 'tracking_logs.transaction_id')
        ->where('transaction_code', $search_val)
        ->get();

        return view('User.Log.document-search',compact('transactions'));
        
    }
}
