@extends('layouts.master')
@section('title','Tambah Customer')
@section('heading','Tambah Customer')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/customer/store/">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Customer</label>
                    <input type="text" name="ncustomer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat Customer</label>
                    <input type="text" name="acustomer" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">No Telepon</label>
                    <input type="text" name="ntcustomer" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
@endsection