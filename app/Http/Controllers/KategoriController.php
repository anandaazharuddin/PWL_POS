<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StorePostRequest;

class KategoriController extends Controller
{
    //index
    public function index(KategoriDataTable $dataTable)
    {
        // DB::insert('insert into m_kategori(kategori_nama, kategori_kode, created_at) values(?, ?, ?)', ['permen', '89', now()]);
        // return 'Data berhasil ditambah';

        //update
        // $row = DB::table('m_kategori')->where('kategori_kode', '89')->update(['kategori_nama' => 'Permen']);
        // return 'Data berhasil diupdate. jumlah data yang diupdate: ' . $row;

        //delete
        // $row = DB::table('m_kategori')->where('kategori_kode', '89')->delete();
        // return 'Data berhasil dihapus. jumlah data yang dihapus: ' . $row;

        //select view
        // $data = DB::table('m_kategori')->get();
        // return view('kategori', ['data' => $data]);

        // return $dataTable->render('kategori.index');

        return $dataTable->render('kategori.index');

        //tampilkan data datatable


    }
    //create
    public function create()
    {
        return view('kategori.create');
    }

    //store
    // public function store(Request $request)
    // {
    //     KategoriModel::create(
    //           [
    //             'kategori_kode' => $request->kodeKategori,
    //             'kategori_nama' => $request->namaKategori,
    //           ]
    //    );

    //      return redirect('/kategori');
    // }

    // public function store(Request $request): RedirectResponse {
        public function store(StorePostRequest $request): RedirectResponse {


        // $validated = $request->validateWithBag('categoxry', [
        //     'kategori_kode' => 'bail|required|unique:m_kategori|max:255',
        //     'kategori_nama' => 'required'
        // ]);
        // KategoriModel::create([
        //     'kategori_kode' => $validated['kategori_kode'],
        //     'kategori_nama' => $validated['kategori_nama']
        // ]);

        $validated = $request->validated();

        $validated = $request->safe()->only(['kategori_kode', 'kategori_nama']);
        $validated = $request->safe()->except(['kategori_kode', 'kategori_nama']);

        return redirect('/kategori');

    }


    public function update($id) {
        $data = KategoriModel::find($id);
        return view('kategori.update', ['kategori' => $data]);
    }

    public function update_save(Request $request, $id) {
        $data = KategoriModel::find($id);
        $data->kategori_kode = $request->kodeKategori;
        $data->kategori_nama = $request->namaKategori;
        $data->save();

        return redirect('/kategori');
    }

    public function delete($id) {
        $data = KategoriModel::find($id);
        $data->delete();

        return redirect('/kategori');
    }
}