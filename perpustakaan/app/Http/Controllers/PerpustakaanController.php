<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;


class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data= DB::select ('select * from admin');
        // $data2= DB::table ('admin')->select('id','nama_admin')->get();
        $data3= Buku::all();
    
        // dd($data3);
        return view('siswa',compact('data3'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('add');
        // $data2=Sekolah::all();
        // return view('add', compact('data2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        // dd($request->all());
        // cara pertama
        // DB::table('siswa')->insert([
        //     'nis' => $request->nis,
        //     'nama_siswa' => $request->nama_siswa,
        //     'alamat' => $request->alamat,
        //     'sekolah_id' => $request->sekolah_id,
        // ]);

        $validator=$request->validate([
            'nis'=>'required|integer',
            'nama_siswa'=>'required|string',
            'alamat'=>'required|string',
            'sekolah_id'=>'required'
        ]);
        // cara kedua
        // Siswa::create ($request->all());
        Siswa::create ($validator);
        return redirect('siswa')->with('success','Data Berhasil Masuk');


        // cara ketiga
        // Siswa::create([
        //     'nis' => $request->nis,
        //     'nama_siswa' => $request->nama,
        //     'alamat' => $request->alamat,
        //     'sekolah_id' => $request->sekolah_id,

        // ]);

       

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
    public function edit($id)
    {
        // $data = Siswa::where('id', $id)->get();
        // return view('edit', ['data3' => $data]);

        // $data=DB::select('select * from siswa where active = ?',$id);
        // $data=DB::table('siswa')->where('id','=',$id);
        // $data=Siswa::where('id','=','$id');
        // $data = Siswa::find($id);
        // $sekolah = Sekolah::all();

        // return view('edit', compact('data','sekolah'));
        
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
        // Siswa::where('id', $request->id)->update([
        //     'nis' => $request->nis,
        //     'nama_siswa' => $request->nama_siswa,
        //     'alamat' => $request->alamat,
        //     'sekolah_id' => $request->sekolah_id,
        // ]);
        // return redirect('siswa')->with('success', 'Data telah diubah');

        $data = Siswa::find($id);
        $validator=$request->validate([
            'nis'=>'required|integer',
            'nama_siswa'=>'required|string',
            'alamat'=>'required|string',
            'sekolah_id'=>'required'
        ]);
        $data->update($validator);
        return redirect('siswa')->with('success','Data Berhasil Di Update');

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
        Siswa::where('id', $id)->delete();
        return back()->with('error','Data Telah Dihapus');
    }
}