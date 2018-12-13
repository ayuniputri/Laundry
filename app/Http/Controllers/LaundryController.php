<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laundry;
use PDF;

class LaundryController extends Controller
{
   	public function indexlaundry()
    {
    	$data['laundry'] = \App\Laundry::all();
    	return view('Laundry.index')->with($data);

    }

    public function createlaundry()
    {
    	
    	$data['laundry'] = \App\Laundry::all();
    	return view('Laundry.create');
    }

    public function savelaundry(Request $r)
    {
        // dd($r->input());
    	$laundry = new Laundry;
    	$laundry->nama_pelanggan = $r->input('nama_pelanggan');
    	$laundry->no_telp = $r->input('no_telp');
        $laundry->total_berat = $r->input('total_berat');
        $laundry->total_harga = $r->input('total_harga');
    	$laundry->status = $r->input('status');
    	$laundry->save();

    	return redirect(url('/Laundry'));
    }

    public function editlaundry($id)
    {
    	$data['laundry'] = Laundry::find($id);
    	//dd($data);
    	return view('Laundry.edit', $data);
    }

    public function updatelaundry(Request $r)
    {
    	$edit = Laundry::find($r->input('id'));
    	$edit->nama_pelanggan = $r->input('nama_pelanggan');
    	$edit->no_telp = $r->input('no_telp');
        $edit->total_berat = $r->input('total_berat');
        $edit->total_harga = $r->input('total_harga');
    	$edit->status = $r->input('status');
    	$edit->save();

    	return redirect(url('/Laundry'));
    }

    public function deletelaundry($id)
    {
    	$flight = Laundry::find($id);
		$flight->delete();

    	return redirect('Laundry');

    }

        public function pdfall(Request $r)
    {
        $laundry = Laundry::find($r->input('id'));
        $data['laundry'] = Laundry::all();
        $pdf = PDF::loadview('Laundry.pdfall',$data);
        return $pdf->download('DataLaundry.pdf');
    }
   }
