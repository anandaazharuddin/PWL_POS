<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StorePostRequest;


class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::with('level')->get();
        return view('user', ['data' => $user]);

        // $user = UserModel::with('level')->get();
        // dd($user);

        // $user = UserModel::all();
        // return view('user', ['data' => $user]);

        // $data = [
        //     'username' => 'manager_tiga',
        //     'nama' => 'manager 3',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2
        // ];

        // UserModel::create($data);

        //update
        // $data = [
        //     'nama' => 'John Doe',
        // ];
        // UserModel::where('username', 'johndoe')->update($data);


    //    $user = UserModel::all();
    //      return view('user', ['data' => $user]);

    // $user = UserModel::find(1);
    // return view('user', ['data' => $user]);

    // $user = UserModel::where('level_id', 1)->first();
    // return view('user', ['data' => $user]);

    // $user = UserModel::firstWhere('level_id', 1);
    // return view('user', ['data' => $user]);

    // $user = UserModel::findOrfail(1);
    // return view('user', ['data' => $user]);

    // $user = UserModel::where('username','manager9' )->firstOrfail();
    // return view('user', ['data' => $user]);

    // $user = UserModel::where('level_id', 2)->count();
    // dd($user);
    // return view('user', ['data' => $user]);


    // $user = UserModel::firstOrCreate(
    //     [
    //         'username' => 'manager',
    //         'nama' => 'manager',
    //     ],

    // );
    // return view('user', ['data' => $user]);


    // $user = UserModel::firstOrCreate(
    //     [
    //         'username' => 'manager22',
    //         'nama' => 'manager dua dua',
    //         'password' => Hash::make('12345'),
    //         'level_id' => 2
    //     ],
    // );

    // $user = UserModel::firstOrNew(
    //     [
    //         'username' => 'manager33',
    //         'nama' => 'Manager tiga tiga',
    //         'password' => Hash::make('12345'),
    //         'level_id' => 2
    //     ],
    // );

    // $user->save();



    // return view('user', ['data' => $user]);


    // $user = UserModel::create(
    //     [
    //         'username' => 'manager55',
    //         'nama' => 'Manager55',
    //         'password' => Hash::make('12345'),
    //         'level_id' => 2
    //     ]
    //     );

    //     $user->username = 'manager56';

    //     $user->isDirty();
    //     $user->isDirty('username');
    //     $user->isDirty('nama');
    //     $user->isDirty(['nama','username']);

    //     $user->isClean();
    //     $user->isClean('username');
    //     $user->isClean('nama');
    //     $user->isClean(['nama','username']);

    //     $user->save();

    //     $user->isDirty();
    //     $user->isClean();
    //     dd($user->isDirty());


    // $user = UserModel::create(
    //         [
    //             'username' => 'manager11',
    //             'nama' => 'Manager11',
    //             'password' => Hash::make('12345'),
    //             'level_id' => 2
    //         ]
    //         );

    //         $user->username = 'manager12';

    //         $user->save();


    //         $user->wasChanged();
    //         $user->wasChanged('username');
    //         $user->wasChanged(['username','level_id']);

    //         $user->wasChanged('nama');
    //         dd($user->wasChanged(['nama','username']));

    }
    public function tambah()
    {
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request)
    {
        $data = [
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id
        ];

        UserModel::create($data);
        return redirect('/user');

    }

    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }

    //ubah simpan
    // public function ubah_simpan(Request $request)
    public function ubah_simpan(StorePostRequest $request): RedirectResponse


{
    // $id = $request->user_id; // Change from $request->user_id to $request->id
    // $data = [
    //     'username' => $request->username,
    //     'nama' => $request->nama,
    //     'level_id' => $request->level_id,
    // ];

    // UserModel::where('user_id', $id)->update($data);
    $validated = $request->validated();

    $validated = $request->safe()->only(['username', 'nama', 'password', 'level_id']);
    $validated = $request->safe()->except(['username', 'nama', 'password', 'level_id']);
    return redirect('/user');
}


    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');

    }

}