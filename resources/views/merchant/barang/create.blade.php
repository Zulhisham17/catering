@extends('merchant.layouts.main')

@section('content')

<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="row d-flex bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3 col-10">Tambah Data</h6>

            </div>
        </div>
        <div class="card-body px-4 pb-2">
            <form action="/merchant/barang/" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="1">
                <div class="row">

                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                                value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                            <label for="Kategori" class="ms-0">Kategori</label>
                            <select class="form-control p-2" name="kategori" id="Kategori">
                                <option value="">Silahkan Pilih :</option>
                                @if (old('kategori') == "Makanan Berat")
                                    <option value="Makanan Berat" selected>Makanan Berat</option>
                                @else
                                    <option value="Makanan Berat">Makanan Berat</option>
                                @endif

                                @if (old('kategori') == "Makanan Ringan")
                                    <option value="Makanan Ringan" selected>Makanan Ringan</option>
                                @else
                                    <option value="Makanan Ringan">Makanan Ringan</option>
                                @endif

                                @if (old('kategori') == "Minuman")
                                    <option value="Minuman" selected>Minuman</option>
                                @else
                                    <option value="Minuman">Minuman</option>
                                @endif


                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Stok Barang</label>
                            <input type="text" name="stok" class="form-control @error('stok') is-invalid @enderror"
                                value="{{ old('stok') }}">
                            @error('stok')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Harga</label>
                            <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror"
                                value="{{ old('harga') }}">
                            @error('harga')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-secondary btn-lg w-100">SUBMIT</button>
            </form>
        </div>


    </div>
</div>

@endsection
