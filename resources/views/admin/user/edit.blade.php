@extends('admin.layout.template')

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Tambah User</h3>
    <div class="card-tools"></div>
  </div>
  <div class="card-body">
    <div class="" style="">
      <form action="{{url('admin/user/' . $user->user_id)}}" method="post">
        @csrf
        {!! method_field('PUT') !!}
        <label for="">Level Id</label>
        <input type="number" class="form-control" name="level_id" id="level_id" placeholder="Contoh: 1/2/3" value="{{$user->level_id}}">
        <label for="">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Contoh: admin@test.com" value="{{$user->email}}">
        <label for="">Username</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="Contoh: admin12" value="{{$user->username}}">
        <label for="">Nama</label>
        <input type="texst" class="form-control" name="nama" id="nama" placeholder="Contoh: Admin" value="{{$user->nama}}">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Contoh: admin123" value="">
        <div class="my-2 d-flex">
            <a href="{{route('user.index')}}" class="btn btn-secondary">Kembali</a>
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
