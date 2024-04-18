<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LevelModel;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\RedirectResponse;

class LevelController extends Controller
{
    public function index()
    {
        // DB::insert('insert into m_level(level_kode, level_name, created_at) values(?, ?, ?)', ['CuS', 'Pelanggan', now()]);
        // return 'Data berhasil ditambah';

        //update
        // $row = DB:: update( 'update m_level set level_name = ? where level_kode = ?', ['Customer', 'CUS']);
        // return 'Data berhasil diupdate. jumlah data yang diupdate: ' . $row;

        //delete
        // $row = DB:: delete('delete from m_level where level_kode = ?', ['CUS']);
        // return 'Data berhasil dihapus. jumlah data yang dihapus: ' . $row;

        //select
        $data = DB:: select('select * from m_level');
        return view ('level', ['data' => $data]);
     }

     public function add() {
        return view('add_level');
    }

    // public function add_save(Request $request) {
        public function add_save(StorePostRequest $request): RedirectResponse {
        // LevelModel::create([
        //     'level_kode' => $request->level_kode,
        //     'level_name' => $request->level_nama
        // ]);


        $validated = $request->validated();

        $validated = $request->safe()->only(['level_kode', 'level_nama']);
        $validated = $request->safe()->except(['level_kode', 'level_nama']);


        return redirect('/level');
    }
}
