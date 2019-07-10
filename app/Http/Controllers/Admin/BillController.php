<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\BillDetail;
class BillController extends Controller
{
    public function index(){
        $dataBill = Bill::latest()->get();
        return view('admin.bill.index',compact('dataBill'));        
    }
    public function detail($id){
        $billDetail = BillDetail::where('bill_id','=',$id)->get();
        return view('admin.bill.detail',compact('billDetail'));
    }
    public function status($id){
        $bill = Bill::find($id);
        $bill->status = 1;
        $bill->save();
        return back();
    }
}
