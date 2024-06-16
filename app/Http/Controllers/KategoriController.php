<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Http\RedirectResponse;

use App\Http\Requests\StorePostRequest;
use App\Models\m_user;
use Yajra\DataTables\Facades\DataTables;



class KategoriController extends Controller
{


    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Daftar kategori',
            'list' => ['Home', 'kategori']
        ];

        $page = (object) [
            'title' => 'Daftar user yang terdaftar dalam sistem',
        ];

        $activeMenu = 'kategori';

        $kategori = KategoriModel::all();

        return view('kategori.index', ['breadcrumb' => $breadcrumb,'kategori'=>$kategori,'page' => $page, 'activeMenu' => $activeMenu]);

    }

    //list
    public function list(Request $request) {
        $kategoris = KategoriModel::select('kategori_id','kategori_nama', 'kategori_kode');

        $user = m_user::all();

        

        if ($request->level_id) {
            $user->where('level_id', $request->level_id);
        }

        return DataTables::of($kategoris)
            ->addIndexColumn()
            ->addColumn('action', function ($kategori) {
                $btn = '<a href="'.url('/user/' . $kategori->kategori_id).'" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="'.url('/user/' . $kategori->kategori_id . '/edit').'" class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="'.url('/user/'.$kategori->kategori_id).'">'
                    . csrf_field() . method_field('DELETE') .
                    '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure to delete this data?\');">Delete</button></form>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    //create
    public function create()
    {
        return view('kategori.create');
    }

    public function show(string $id)
    {
        $kategori = KategoriModel::find($id);


        $breadcrumb = (object) [
            'title' => 'Detail kategori',
            'list' => ['Home', 'kategori', 'Detail']
        ];
        $page = (object) [
            'title' => 'Detail user',
        ];

        $activeMenu = 'user';
        return view('kategori.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'kategori' => $kategori, 'activeMenu' => $activeMenu]);


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