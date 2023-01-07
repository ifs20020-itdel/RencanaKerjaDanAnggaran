<?php

/*
    NIM  : 11S20020
    Nama : Roosen Gabriel Manurung 
*/

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function simpanBuku(){
        return view('buku.tambah-buku');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|max:150',
            'author' => 'required|max:150',
            'publisher' => 'required|max:50',
            'year' => 'required|max:4',
        ],
        [
            'title.required' => 'Title Harus diisi',
            'author.required' => 'Author Harus diisi',
            'publisher.required' => 'Penerbit Harus diisi',
            'year.required' => 'Tahun Terbit Harus diisi',
        ]);

        DB::table('buku')->insert([
            'title' => $request['title'],
            'author' => $request['author'],
            'publisher' => $request['publisher'],
            'year' => $request['year'],
        ]);
    
        return redirect('/buku');
    
        }
    
        public function index(){
            $buku = DB::table('buku')->get();
     
            return view('buku.buku', compact('buku'));
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $buku = DB::table('buku')->where('id', $id)->first();
        return view('buku.show-buku', compact('buku'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $buku = DB::table('buku')->where('id', $id)->first();
        return view('buku.edit-buku', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){
        $request->validate([
            'title' => 'required|max:150',
            'author' => 'required|max:150',
            'publisher' => 'required|max:50',
            'year' => 'required|max:4',
        ],
        [
            'title.required' => 'Title Harus diisi',
            'author.required' => 'Author Harus diisi',
            'publisher.required' => 'Penerbit Harus diisi',
            'year.required' => 'Tahun Terbit Harus diisi',
        ]
    );

    DB::table('buku')
    ->where('id', $id)
    ->update([
        'title' => $request['title'],
        'author' => $request['author'],
        'publisher' => $request['publisher'],
        'year' => $request['year'],
    ]);

    return redirect('/buku');
    }

    public function destroy($id){
        DB::table('buku')->where('id', '=', $id)->delete();
        return redirect('/buku');
    }
}
