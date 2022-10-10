<?php

namespace App\Http\Controllers;

use App\Models\DetailProduk;
use Illuminate\Http\Request;

class DetailProdukController extends Controller
{
    public function index()
    {
     return view('admin.detailproduk', [
         'details' => DetailProduk::get(),
     ]);
    }
 
    public function create()
    {
     return view('admin.createdetailproduk');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title_detail' => 'nullable',
            'desc_detail' => 'nullable',
            'harga' => 'nullable',
        ]);

        if (isset($request->image_detail)) {
            $tujuan_upload = 'data_file';
            $request->image_detail->move($tujuan_upload,$request->image_detail->getClientOriginalName());
            $validatedData['image_detail'] = $tujuan_upload . '/' . $request->image_detail->getClientOriginalName();
        }

        DetailProduk::create($validatedData); 

        return redirect('/detailproduk')->with('success', 'Data has been added');

    }

    public function edit($detailproduk)
    {
     return view('admin.editdetailproduk', [
         'details' => DetailProduk::find($detailproduk)
     ]);
    }

    public function update(Request $request, $detailproduk)
   {
    $data = $request->validate([
        'title_detail' => 'nullable',
        'desc_detail' => 'nullable',
        'harga' => 'nullable',
    ]);
    

    if (isset($request->image_detail)) {
        $tujuan_upload = 'data_file';
        $request->image_detail->move($tujuan_upload,$request->image_detail->getClientOriginalName());
        $data['image_detail'] = $tujuan_upload . '/' . $request->image_detail->getClientOriginalName();
    }

    DetailProduk::where('id', $detailproduk)->update($data);

    return redirect('/detailproduk')->with('success', 'Data has been updated');
   }

    public function destroy($detailproduk)
    {
        $detailproduk = DetailProduk::find($detailproduk);
        $detailproduk->delete();
        return redirect('/detailproduk')->with('success', 'Data has been deleted');
    }

    
}
