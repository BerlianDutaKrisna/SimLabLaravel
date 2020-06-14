<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pasien extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = DB::table('patients')->get();
        // dd($patients);
        return view('pasien/index',['data' => $patients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function addview()
    {
        return view('pasien/tambah_pasien');
    }

    public function add(Request $request)
    {
        DB::table('patients')->insert(
            [
                'no_rm' =>$request->no_rm,
                'nama_pasien' =>$request->nama_pasien,
                'gender' =>$request->gender,
                'usia' =>$request->usia,
                'tanggal_lahir' =>$request->tanggal_lahir
            ]);
            return redirect('pasien')->with('status', 'Data Pasien Berhasil Ditambahkan!');
    }

    public function editview($no_rm)
    {
        $data = DB::table('patients')->where('no_rm', $no_rm)->first();
        return view('pasien/edit_pasien',compact('data'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $no_rm)
    {
        $affected = DB::table('patients')
                ->where('no_rm', $no_rm)
                ->update([
                'no_rm' =>$request->no_rm,
                'nama_pasien' =>$request->nama_pasien,
                'gender' =>$request->gender,
                'usia' =>$request->usia,
                'tanggal_lahir' =>$request->tanggal_lahir
                    ]);
        return redirect('pasien')->with('status', 'Data Pasien Berhasil Diedit!');
    }

    public function delete($no_rm)
    {
        DB::table('patients')->where('no_rm', $no_rm)->delete();
        return redirect('pasien')->with('status', 'Data Pasien Berhasil Dihapus!');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
