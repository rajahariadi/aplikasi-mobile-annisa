@extends('index')

@section('content')
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('materi.update', $dataMateri->id) }}" method="post">@csrf @method('PUT')
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Judul Materi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" name="judul"
                                value="{{ $dataMateri->judul }}">
                            @error('judul')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Sumber Materi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" name="sumber"
                                value="{{ $dataMateri->sumber }}">
                            @error('sumber')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Mata Pelajaran</label>
                        <div class="col-sm-10">
                            <select name="mapel_id" id="" class="form-control">
                                @foreach ($dataMapel as $mapel)
                                    <option value="{{ $mapel->id }}"
                                        {{ $mapel->id == $dataMateri->mapel_id ? 'selected' : '' }}>{{ $mapel->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('mapel_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Mata Pelajaran</label>
                        <div class="col-sm-10">
                            <select name="user_id" id="" class="form-control">
                                @foreach ($dataGuru as $guru)
                                    <option value="{{ $guru->id }}"
                                        {{ $guru->id == $dataMateri->user_id ? 'selected' : '' }}>{{ $guru->fullname }}
                                    </option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Kelas</label>
                        <div class="col-sm-10">
                            <select name="kelas_id" id="" class="form-control">
                                @foreach ($dataKelas as $kelas)
                                    <option value="{{ $kelas->id }}"
                                        {{ $kelas->id == $dataMateri->kelas_id ? 'selected' : '' }}>{{ $kelas->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kelas_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea name="deskripsi" id="" cols="30" rows="3" class="form-control">{{ $dataMateri->deskripsi }}</textarea>
                            @error('deskripsi')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button class="btn btn-secondary" type="button"
                                onclick="window.location.href='{{ route('materi.index') }}'">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
