<?php

namespace App\Http\Controllers;

use App\Models\bumbu;
use Illuminate\Http\Request;

class bumbuController extends Controller
{
    public function index()
    {
     return view('admin.bumbu', [
         'bumbu' => bumbu::get(),
     ]);
    }
 
    public function create()
    {
     return view('admin.createbumbu');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title_bumbu' => 'nullable',
            'desc_bumbu' => 'nullable',
            'harga' => 'nullable',
        ]);

        if (isset($request->image_bumbu)) {
            $tujuan_upload = 'data_file';
            $request->image_bumbu->move($tujuan_upload,$request->image_bumbu->getClientOriginalName());
            $validatedData['image_bumbu'] = $tujuan_upload . '/' . $request->image_bumbu->getClientOriginalName();
        }

        bumbu::create($validatedData); 

        return redirect('/bumbu')->with('success', 'Data has been added');

    }

    public function edit($produkbumbu)
    {
     return view('admin.editbumbu', [
         'bumbu' => bumbu::find($produkbumbu)
     ]);
    }

    public function update(Request $request, $produkbumbu)
   {
    $validatedData = $request->validate([
        'title_bumbu' => 'nullable',
        'desc_bumbu' => 'nullable',
        'harga' => 'nullable',
    ]);
    

    if (isset($request->image_bumbu)) {
        $tujuan_upload = 'data_file';
        $request->image_bumbu->move($tujuan_upload,$request->image_bumbu->getClientOriginalName());
        $validatedData['image_bumbu'] = $tujuan_upload . '/' . $request->image_bumbu->getClientOriginalName();
    }

    bumbu::where('id', $produkbumbu)->update($validatedData);

    return redirect('/bumbu')->with('success', 'Data has been updated');
   }

    public function destroy($produkbumbu)
    {
        $produkbumbu = bumbu::find($produkbumbu);
        $produkbumbu->delete();
        return redirect('/bumbu')->with('success', 'Data has been deleted');
    }

    
}
