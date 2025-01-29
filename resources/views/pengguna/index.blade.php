@extends('index')

@section('content')
    <div class="card">
        <div class="card-header">
            <button class="btn btn-primary" onclick="window.location.href='{{ route('pengguna.create') }}'">
                <i class="bx bx-category"></i> Tambah Pengguna</button>
        </div>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th class="col-2">No</th>
                            <th>Nama Lengkap</th>
                            <th>NISN / NUPTK</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>Role</th>
                            <th class="col-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengguna as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->fullname }}</td>
                                <td>{{ $data->nomor }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->gender }}</td>
                                <td>{{ $data->role }}</td>
                                <td>
                                    <form action="{{ route('pengguna.destroy', $data->id) }}" method="post">@csrf
                                        @method('DELETE')
                                        <button class="btn btn-primary" type="button"
                                            onclick="window.location.href='{{ route('pengguna.edit', $data->id) }}'"><i
                                                class="bx bx-edit-alt me-1"></i>Edit</button>
                                        <button class="btn btn-danger" type="submit"><i
                                                class="bx bx-trash me-1"></i>Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
