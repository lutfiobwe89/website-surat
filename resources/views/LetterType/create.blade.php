@extends('layouts.template')

@section('content')
<div class="mb-2">
    <h4>Tambah Data Klasifikasi Surat</h4>
    <a href="{{ route('user.home') }}">Home</a>
    /
    <a href="{{ route('user.create') }}">Data Klasifikasi Surat</a>
    /
    <a href="{{ route('user.create') }}">Tambah Data Klasifikasi Surat</a>
</div>  
<form action="{{ route('lettertype.store') }}" method="POST" class="card p-5">
    @csrf

    @if (Session::get('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
        
    <div class="mb-3 row">
        <div class="col-sm-10">
            <label for="letter_code" class="col-sm-2 col-form-label">Kode Surat </label>
            <input type="number" class="form-control" id="letter_code" name="letter_code">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-10">
            <label for="name_type" class="col-sm-2 col-form-label">Klasifikasi Surat </label>
            <input type="text" class="form-control" id="name_type" name="name_type">
        </div>
    </div>
    <button type="submit" class="btn btn-primary ms-auto mt-3">Tambah</button>
</form>
<div class="container mt-2">
    <div class="d-flex justify-content-between">
        <a href="{{ route('lettertype.home') }}" class="btn btn-danger">Kembali</a>
    </div>
</div>
@endsection