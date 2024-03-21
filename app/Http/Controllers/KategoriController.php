<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use App\DataTable\KategoriDataTable;


class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
       
        return $dataTable->render('kategori.index');
    }
}