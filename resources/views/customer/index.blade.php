@extends('layouts.master')
@section('title','Customer')
@section('heading','Halaman Customer')

@section('content')
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Customer</h6>
                        </div>  
                        <div class="card-header">
                        <h3 class="text-left">                           
                            <a href="/customer/form/" class="btn btn-primary"><i class="fa fa-folder-plus"></i> Tambah Data</a>
                        </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Customer</th>
                                            <th>Alamat Customer</th>
                                            <th>Nomor Telepon</th>  
                                            <th>Aksi</th>                                          
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        @forelse ($cus as $item)
                                        <tr>
                                        <td>{{$nomor++}}</td>
                                        <td>{{$item->nama_customer}}</td>
                                        <td>{{$item->alamat_customer}}</td>
                                        <td>{{$item->telp_customer}}</td>  
                                            <td>
                                                <a href="/customer/edit/{{$item->id}}" class="btn btn-info btn-sm"><i class="fa fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>                                        
                                        @empty

                                        @endforelse                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection