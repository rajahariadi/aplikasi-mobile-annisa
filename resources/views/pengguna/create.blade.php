@extends('index')

@section('content')
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('pengguna.store') }}" method="post">@csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" name="fullname"
                                placeholder="Nama Lengkap">
                            @error('fullname')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">NISN / NUPTK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" name="nomor"
                                placeholder="Mata Pelajaran">
                            @error('nomor')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" name="email"
                                placeholder="Email">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="basic-default-name" name="password"
                                placeholder="Password">
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select name="gender" id="" class="form-control">
                                <option value="" selected hidden>-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('gender')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Role</label>
                        <div class="col-sm-10">
                            <select name="role" id="" class="form-control">
                                <option value="" selected hidden>-- Pilih Role --</option>
                                <option value="Guru">Guru</option>
                                <option value="Siswa">Siswa</option>
                            </select>
                            @error('role')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button class="btn btn-secondary" type="button"
                                onclick="window.location.href='{{ route('pengguna.index') }}'">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
