<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\PDF;

class CustomerController extends Controller
{
    public function index()
    {
    	$customer = Customer::all();
    	return view('customer',['customer'=>$customer]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'pekerjaan' => 'required',
        ]);

        $customer = new Customer;
        $customer->nama = $request->nama;
        $customer->email = $request->email;
        $customer->alamat = $request->alamat;
        $customer->telepon = $request->telepon;
        $customer->pekerjaan = $request->pekerjaan;

        $customer->save();
        return redirect('/customer')->with('status', 'successfully added a new customer!');
    
    }

    public function edit($id)
    {
        $customer = DB::table('customer')->where('id',$id)->get();
        
        return view('edit',['customer'=>$customer])->with('status', 'successfully edited a new customer!');
    
    }

    public function update(Request $request)
    {
       $customer = DB::table('customer')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'pekerjaan' => $request->pekerjaan,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/customer');
    
    }

    public function hapus($id)
    {
        $customer = DB::table('customer')->where('id',$id)->delete();
            
        return redirect('/customer');
    }
 
    public function cari(Request $request)
    {
        $cari  = $request->cari;
        $customer = DB::table('customer')->where([
            ['nama', 'like', '%' . $cari . '%']
            ])
            ->orWhere([
            ['email', 'like', '%' . $cari . '%']
            ])
            ->orWhere([
            ['alamat', 'like', '%' . $cari . '%']
            ])
            ->orWhere([
            ['pekerjaan', 'like', '%' . $cari . '%']
            ])
            ->get();

            return view('customer',['customer' => $customer]);
    }

    public function cetak_pdf()
    {
    	$customer = Customer::all();
 
    	$pdf = PDF::loadview('customer_pdf',['customer'=>$customer]);
    	return $pdf->download('MiFi Customer Data Report.pdf');
    }
}
