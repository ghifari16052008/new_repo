@extends('layouts.master')
@section('content')
<form action="/datapembeli" method="POST">
    @csrf
    <div class="container">
        <h3 class="mt-5 mb-5 text-center">Tambah menu</h3>

        <div class="row mb-3">
            <label for="inputNama" class="col-sm-2 col-form-label">menu</label>
            <div class="col-sm-10">
                <input type="text" autofocus class="form-control" id="inputNama" name="menu">
            </div>
        </div>

        <div class="row mb-3">
            <label for="inputNis" class="col-sm-2 col-form-label">Older_items</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNis" name="older_items" maxlength="6">
            </div>
        </div>

        <div class="row mb-3">
            <label for="inputNisn" class="col-sm-2 col-form-label">Level_pedas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNisn" name="LevelPedas" maxlength="6">
            </div>
        </div>

        <!-- <div class="row mb-3">
            <label for="inputGender" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <select class="form-select" id="inputGender" aria-label="Gender Select" name="gender">
                    <option value="">Pilih gender</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
        </div> -->

        <div class="row mb-3">
            <label for="inputAlamat" class="col-sm-2 col-form-label">Riviews</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputAlamat" name="Riviews">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputAlamat" class="col-sm-2 col-form-label">payment</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputAlamat" name="payment">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12 text-center">
                <input type="submit" name="submit" value="Simpan" class="btn btn-success btn-sm">
                <a href="/bahan" class="btn btn-danger btn-sm">Batal</a>
            </div>
        </div>
    </div>
</form>

@endsection
