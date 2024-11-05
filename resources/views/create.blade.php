@extends('layouts.master')
@section('content')
<form action="/bahan/store" method="POST">
    @csrf
    <div class="container">
        <h3 class="mt-5 mb-5 text-center">Tambah Siswa</h3>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" autofocus class="form-control" id="inputEmail3" name="nama">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nis</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="nis" maxlength="6">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nisn</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="nisn" maxlength="6">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
                <select class="form-select" id="inputEmail3" aria-label="Default select example" name="gender">
                    <option value="">Pilih gender</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="alamat">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-12">
                <label for="" class="col-sm-2"></label>
                <input type="submit" name="submit" value="simpan" class="btn btn-success btn-sm">
                <a href="/bahan" class="btn btn-danger btn-sm">Batal</a>
            </div>
        </div>
    </div>
</form>
@endsection
