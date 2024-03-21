@extends('layouts.app')

@section('subtitle', 'kategori')
@section('content_header_title','home')
@section('content_header_subtitle', 'kategori')


@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"> Manage Kategori</div>
            <div class="card-body">
                {{$dataTable->table()}}
            </div>
        </div>

    </div>
@endsection

@push('scripts')
{{$dataTable->scripts()}}
    
@endpush