<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('admin.dashboard');
        return view('admin.dashboard', [
            'products' => Post::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:225',
            'gambar' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required'
        ]);

        $validatedData['id'] = auth()->user()->id;
        $validatedData['deskripsi'] = Str::limit(strip_tags($request->deskripsi), 200);

        Post::create($validatedData);

        return redirect('/dashboard')->with('success', 'New post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($dashboard)
    {
        return view('admin.edit', [
            'product' => Post::find($dashboard)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $dashboard)
    {

        $request->validate([
            'nama' => 'required|max:225',
            'gambar' => 'nullable|image',
            'deskripsi' => 'required',
            'harga' => 'required'
        ]);

        $data = [];
        $data['nama'] = $request->nama;
        $data['deskripsi'] = $request->deskripsi;
        if (isset($request->gambar)) {
            $tujuan_upload = 'data_file';
            $request->gambar->move($tujuan_upload,$request->gambar->getClientOriginalName());
            $data['gambar'] = $tujuan_upload . '/' . $request->gambar->getClientOriginalName();
        }
        $data['harga'] = $request->harga;

        Post::where('id_produk', $dashboard)->update($data);

        return redirect('/dashboard')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($dashboard)
    {
        $post = Post::find($dashboard);
        // Post::destroy($product->id_produk);
        // return $product;
        $post->delete();
        return redirect('/dashboard')->with('success', 'Data has been deleted');
    }
}