<?php

namespace App\Http\Controllers;

use App\Models\DataContent;
use App\Models\HomeContent;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function index()
   {
    return view('admin.home', [
        'contents' => HomeContent::get(),
    ]);
   }

   public function create()
   {
    return view('admin.createcontent');
   }

   public function store(Request $request)
   {



    $validatedData = $request->validate([
        'title' => 'required',
        'desc' => 'required',
        'about_title' =>'required',
        'about_desc' => 'required',
        'about_image' => 'image|nullable',
    ]);
    

    if (isset($request->about_image)) {
        $tujuan_upload = 'data_file';
        $request->about_image->move($tujuan_upload,$request->about_image->getClientOriginalName());
        $validatedData['about_image'] = $tujuan_upload . '/' . $request->about_image->getClientOriginalName();
    }

    HomeContent::create($validatedData); 

    return redirect('/datacontent')->with('success', 'New post has been added');
   }

   public function edit($dataContent)
   {
    return view('admin.editcontent', [
        'contents' => HomeContent::find($dataContent)
    ]);
   }

   public function destroy($dataContent)
   {
       $dataContent = HomeContent::find($dataContent);
       $dataContent->delete();
       return redirect('/datacontent')->with('success', 'Data has been deleted');
   }
}

