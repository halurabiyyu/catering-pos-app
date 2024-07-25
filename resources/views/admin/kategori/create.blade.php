@extends('admin.layout.template')

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Tambah Kategori</h3>
    <div class="card-tools"></div>
  </div>
  <div class="card-body">
    <div class="" style="">
      <form action="{{route('kategori.store')}}" method="post">
        @csrf
        <label for="">Kode Kategori</label>
        <input type="text" class="form-control" name="category_code" id="category_code" placeholder="Contoh: SEA" value="{{old('category_code')}}">
        <label for="">Nama Kategori</label>
        <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Contoh: Seafood" value="{{old('category_name')}}">
        <div class="my-2 d-flex">
            <a href="{{route('kategori.index')}}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-success mx-2">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endpush
