@extends('layouts.template')

@section('content')
<div class="mb-2">
    <h4>Tambah Data Staff Tata Usaha</h4>
    <a href="{{ route('user.home') }}">Home</a>
    /
    <a href="{{ route('user.create') }}">Data Staff Tata Usaha</a>
    /
    <a href="{{ route('user.create') }}">Tambah Data Staff Usaha</a>
</div>
<form action="{{ route('user.store') }}" method="POST" class="card p-5">
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
            <label for="name" class="col-sm-2 col-form-label">Nama </label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-10">
            <label for="email" class="col-sm-2 col-form-label">Email </label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
    </div>
    <button type="submit" class="btn btn-primary ms-auto mt-3">Tambah</button>
</form>
<div class="container mt-2">
    <div class="d-flex justify-content-between">
        <a href="{{ route('user.home') }}" class="btn btn-danger">Kembali</a>
    </div>
</div>
@endsection