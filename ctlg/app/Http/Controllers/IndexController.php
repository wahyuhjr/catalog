<?php

namespace App\Http\Controllers;

use App\Models\DataContent;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function index()
   {
    return view('admin.home', [
        'contents' => DataContent::get(),
    ]);
   }

   public function create()
   {
    return view('admin.createcontent');
   }

   public function store(Request $request)
   {
    $validatedData = $request->validate([
        'identify' => 'required|unique:data_content,identify',
        'value' => 'required',
    ]);

    $validatedData['identify'] = $request->identify;
    $validatedData['value'] = $request->value;

    DataContent::create($validatedData);

    return redirect('/datacontent')->with('success', 'New post has been added');
   }

   public function edit($dataContent)
   {
    return view('admin.editcontent', [
        'contents' => DataContent::find($$dataContent)
    ]);
   }

   public function destroy($dataContent)
   {
       $dataContent = DataContent::find($dataContent);
       $dataContent->delete();
       return redirect('/datacontent')->with('success', 'Data has been deleted');
   }
}


