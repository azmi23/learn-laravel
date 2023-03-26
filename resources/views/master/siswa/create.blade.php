@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Data siswa</h1>

        <div class="mt-3">
            <form id="siswa-form" method="POST" action="{{route('master.siswa.store')}}">
                <div class="form-group mt-2">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group mt-2">
                    <label for="nis">NIS</label>
                    <input type="text" class="form-control" name="nis" id="nis">
                </div>
                 <div class="form-group mt-2">
                    <label for="tempat-lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat-lahir">
                </div>
                 <div class="form-group mt-2">
                    <label for="tanggal-lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal-lahir">
                </div>
                 <div class="form-group mt-2">
                    <label for="jenis-kelamin">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" id="jenis-kelamin">
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="kristen">Kristen</option>
                    </select>
                </div>
                 <div class="form-group mt-2">
                    <label for="agama">Agama</label>
                    <select type="text" class="form-control" name="agama" id="agama">
                        <option value="islam">Islam</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-2" form="siswa-form">Submit</button>
                <a href="{{route('master.siswa')}}" class="btn btn-secondary mt-2">Cancel</a>
            </form>
        </div>
    </div>
@endsection
