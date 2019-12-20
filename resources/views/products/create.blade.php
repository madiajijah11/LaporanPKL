@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Produk</h3>
                </div>
                <div class="card-body">
                    <!-- MENAMPILKAN ERROR APABILA TERDAPAT FLASH MESSAGE ERROR -->
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error')}}
                    </div>
                    @endif
                    
                    <form action="{{ url('/product/') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Nama Produk</label>
                    <input type="text" name="title" class="form-control" placeholder="Masukan nama produk">
                    <p class="text-danger">{{ $errors->first('title') }}</p>
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" name="description" class="form-control" cols="10" rows="10" class="form-control">
                    <p class="text-danger">{{ $errors->first('description') }}</p>
                </div>
                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="number" name="price" class="form-control">
                    <p class="text-danger">{{ $errors->first('price') }}</p>
                </div>
                <div class="form-group">
                    <label for="">Stok</label>
                    <input type="number" name="stock" class="form-control">
                    <p class="text-danger">{{ $errors->first('stock') }}</p>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Simpan</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection