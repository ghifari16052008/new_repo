@extends('layouts.master')
@section('content')
<form action="/bahan/{{ $bahan->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="container">
        <h3 class="mt-5 mb-5 text-center">Update menu</h3>

        <div class="row mb-3">
            <label for="inputNama" class="col-sm-2 col-form-label">Menu</label>
            <div class="col-sm-10">
                <input type="text" autofocus class="form-control" value="{{ $bahan->menu }}" id="inputNama" name="menu">
            </div>
        </div>

        <div class="row mb-3">
            <label for="inputOlderItems" class="col-sm-2 col-form-label">Older_items</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputOlderItems" value="{{ $bahan->older_items }}" name="older_items">
            </div>
        </div>

        <div class="row mb-3">
            <label for="inputLevelPedas" class="col-sm-2 col-form-label">Level Pedas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputLevelPedas" value="{{ $bahan->LevelPedas }}" name="LevelPedas">
            </div>
        </div>

        <div class="row mb-3">
            <label for="inputRiviews" class="col-sm-2 col-form-label">Riviews</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputRiviews" value="{{ $bahan->Riviews }}" name="Riviews">
            </div>
        </div>

        <div class="row mb-3">
            <label for="inputPayment" class="col-sm-2 col-form-label">Payment</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPayment" value="{{ $bahan->payment }}" name="payment">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12 text-center">
                <button type="submit" class="btn btn-success btn-sm">Update</button>
                <a href="/bahan" class="btn btn-danger btn-sm">Batal</a>
            </div>
        </div>
    </div>
</form>
@endsection
