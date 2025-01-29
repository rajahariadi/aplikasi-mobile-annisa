@extends('index')

@section('content')
    <div class="card">
        <div class="card-header">
            <button class="btn btn-primary" onclick="window.location.href='{{ route('materi.create') }}'">
                <i class="bx bx-category"></i> Tambah Materi</button>
        </div>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th class="col-2">No</th>
                            <th>Judul</th>
                            <th>Sumber</th>
                            <th>Mapel</th>
                            <th>Pengajar</th>
                            <th>Kelas</th>
                            <th>Deskripsi</th>
                            <th class="col-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataMateri as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->judul }}</td>
                                <td>{{ $data->sumber }}</td>
                                <td>{{ $data->mapel->nama }}</td>
                                <td>{{ $data->user->fullname }}</td>
                                <td>{{ $data->kelas->nama }}</td>
                                <td>{{ $data->deskripsi }}</td>
                                <td>
                                    <form action="{{ route('materi.destroy', $data->id) }}" method="post">@csrf
                                        @method('DELETE')
                                        <button class="btn btn-primary" type="button"
                                            onclick="window.location.href='{{ route('materi.edit', $data->id) }}'"><i
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
