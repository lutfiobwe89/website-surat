@extends('layouts.template')

@section('content')

    @if (Session::get('success'))
        <div class="alert alert-success"> {{ Session::get('success') }}</div>       
    @endif
    @if (Session::get('deleted'))
        <div class="alert alert-danger"> {{ Session::get('deleted') }}</div>   
    @endif
    <div class="container">
        <div class="d-flex justify-content-between">
            <a href="" class="btn btn-primary">Tambah akun</a>
        </div>
    </div>
    <br>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($users as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['email'] }}</td>
                    <td>{{ $item['role'] }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="" class="btn btn-secondary me-3">Edit</a>
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal-">
                    Hapus
                </button>
            </td>
        </tr>
            <div class="modal fade" id="exampleModal-" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Apotek App</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure?
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('lettertype.delete') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-dark">Hapus</button>
                            </form>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </tbody>
    </table>
@endsection