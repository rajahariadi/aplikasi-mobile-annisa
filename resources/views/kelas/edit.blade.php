@extends('index')

@section('content')
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('kelas.update', $data->id) }}" method="post">@csrf @method('PUT')
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Kode Kelas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" name="kode"
                                value="{{ $data->kode }}">
                            @error('kode')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Kelas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" name="nama"
                                value="{{ $data->nama }}">
                            @error('nama')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button class="btn btn-secondary" type="button"
                                onclick="window.location.href='{{ route('kelas.index') }}'">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
