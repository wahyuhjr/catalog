<?php

namespace App\Http\Controllers;

use App\Models\Selai;
use Illuminate\Http\Request;

class SelaiController extends Controller
{
    public function index()
    {
     return view('admin.selai', [
         'selai' => Selai::get(),
     ]);
    }
 
    public function create()
    {
     return view('admin.createselai');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title_selai' => 'nullable',
            'desc_selai' => 'nullable',
            'harga' => 'nullable',
        ]);

        if (isset($request->image_selai)) {
            $tujuan_upload = 'data_file';
            $request->image_selai->move($tujuan_upload,$request->image_selai->getClientOriginalName());
            $validatedData['image_selai'] = $tujuan_upload . '/' . $request->image_selai->getClientOriginalName();
        }

        Selai::create($validatedData); 

        return redirect('/selai')->with('success', 'Data has been added');

    }

    public function edit($produkselai)
    {
     return view('admin.editselai', [
         'selai' => Selai::find($produkselai)
     ]);
    }

    public function update(Request $request, $produkselai)
   {
    $validatedData = $request->validate([
        'title_selai' => 'nullable',
        'desc_selai' => 'nullable',
        'harga' => 'nullable',
    ]);
    

    if (isset($request->image_selai)) {
        $tujuan_upload = 'data_file';
        $request->image_selai->move($tujuan_upload,$request->image_selai->getClientOriginalName());
        $validatedData['image_selai'] = $tujuan_upload . '/' . $request->image_selai->getClientOriginalName();
    }

    Selai::where('id_selai', $produkselai)->update($validatedData);

    return redirect('/selai')->with('success', 'Data has been updated');
   }

    public function destroy($produkselai)
    {
        $produkselai = Selai::find($produkselai);
        $produkselai->delete();
        return redirect('/selai')->with('success', 'Data has been deleted');
    }

    
}
