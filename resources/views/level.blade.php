@extends('layout.template')

@section('content')
<html>
    <head>
        <title>Level</title>
    </head>
    <body>
       <h1>Level</h1>
       <table class="table table-bordered table-striped table-hover table-sm" id="table_user">
           <tr>
               <th>ID</th>
               <th>Kode Level</th>
               <th>Nama Level</th>
           </tr>
           @foreach ($data as $d)
           <tr>
               <td>{{ $d->level_id }}</td>
               <td>{{ $d->level_kode }}</td>
               <td>{{ $d->level_nama }}</td>
           </tr>
           @endforeach
       </table> <!-- Penutup tabel -->
    </body>

@push('css')
@endpush

@endsection