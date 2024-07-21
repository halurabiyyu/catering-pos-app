@extends('admin.layout.template')

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Tambah Level</h3>
    <div class="card-tools"></div>
  </div>
  <div class="card-body">
    <div class="" style="">
      <form action="{{route('level.store')}}" method="post">
        @csrf
        <label for="">Kode Level</label>
        <input type="text" class="form-control" name="level_kode" id="level_kode" placeholder="Contoh: ADM" value="{{old('level_kode')}}">
        <label for="">Nama Level</label>
        <input type="text" class="form-control" name="level_nama" id="level_nama" placeholder="Contoh: Admin" value="{{old('level_nama')}}">
        <div class="my-2">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endpush
