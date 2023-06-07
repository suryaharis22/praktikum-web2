@extends('admin.layout.appadmin')
@section('table')
@if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
@endif
@if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
@endif
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            
            <a class="btn btn-warning" href="{{ url('produk/create') }}">Create</a>
            
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Np</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga-Jual</th>
                        <th>Harga-Beli</th>
                        <th>Stok</th>
                        <th>Min-Stok</th>
                        <th>Deskripsi</th>
                        <th>Kategori</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                
                <tbody>
                    @php
                        $no =1;
                    @endphp

                    @foreach ($produk as $prd)
                        
                    
                    <tr>
                        <td>{{ $no}}</td>
                        <td>{{ $prd->kode}}</td>
                        <td>{{ $prd->nama}}</td>
                        <td>{{ $prd->harga_jual}}</td>
                        <td>{{ $prd->harga_beli}}</td>
                        <td>{{ $prd->stok}}</td>
                        <td>{{ $prd->min_stok}}</td>
                        <td>{{ $prd->deskripsi}}</td>
                        <td>{{ $prd->nama_kategori}}</td>
                        <td><a onclick="return confirm('Konfirmasi Hapus data')" href="{{ url('produk/destroy/'.$prd->id)}}" class="btn btn-danger btn-sm">Hapus</a><a href="{{ url('produk/edit/'.$prd->id)}}" class="btn btn-warning btn-sm">Edit</a></td>
                    </tr>

                    @php
                        $no++
                    @endphp
                    @endforeach
                </tbody>

                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga-Jual</th>
                        <th>Harga-Beli</th>
                        <th>Stok</th>
                        <th>Min-Stok</th>
                        <th>Deskripsi</th>
                        <th>Kategori</th>
                    </tr>
                </tfoot>

                {{-- <tfoot>
                    <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga-Jual</th>
                        <th>Harga-Beli</th>
                        <th>Stok</th>
                        <th>Min-Stok</th>
                        <th>Kategori</th>
                    </tr>
                </tfoot> --}}
            </table>
        </div>
    </div>

@endsection