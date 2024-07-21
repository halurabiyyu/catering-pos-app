@extends('admin.layout.template')

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Detail User</h3>
    <div class="card-tools"></div>
  </div>
  <div class="card-body">
    <div class="table-responsive" style="">
      <table class="table">
        <tr>
            <th>Email</th>
            <td>{{$user->email}}</td>
        </tr>
        <tr>
            <th>Username</th>
            <td>{{$user->username}}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{$user->nama}}</td>
        </tr>
        <tr>
            <th>Level Kode</th>
            <td>{{$user->level->level_kode}}</td>
        </tr>
    </table>
    </div>
    <a href="{{route('user.index')}}" class="btn btn-secondary">Kembali</a>
  </div>
</div>
@endsection

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endpush
