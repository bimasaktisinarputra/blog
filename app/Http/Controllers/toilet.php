<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class toilet extends Controller
{
      /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $data = \App\toilet::all();
      
      return view('admin.toilet.index',compact('data'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('admin.toilet.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      $this->validate($request, [
          'nama' => 'required',
      ]);
      
      $tambah = new \App\toilet();
      $tambah->nama =  $request['nama'];
      $tambah->save();

      return redirect()->route('toilet.index')->with('pesan','Berhasil membuat baru');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $data = \App\toilet::findOrFail($id);
              
      return view('admin.toilet.show',compact('data'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $data = \App\toilet::findOrFail($id);
              
      return view('admin.toilet.edit',compact('data'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      $this->validate($request, [
          'nama' => 'required',
      ]);

      $edit = \App\toilet::findOrFail($id);
      $edit->nama =  $request['nama'];
      $edit->save();

      return redirect()->route('toilet.index')->with('pesan','Berhasil diperbarui');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $delete = \App\toilet::findOrFail($id);
      $delete->delete();
      return redirect()->route('toilet.index')->with('pesan','Berhasil dihapus');
  }
}
