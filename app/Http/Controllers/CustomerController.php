<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
 
use PDF;

class CustomerController extends Controller
{
    public function index()
    {
    	$customer = Customer::all();
    	return view('customer',['customer'=>$customer]);
    }
 
    public function cetak_pdf()
    {
    	$customer = Customer::all();
 
    	$pdf = PDF::loadview('customer_pdf',['customer'=>$customer]);
    	return $pdf->download('laporan-customer-pdf');
    }
}
