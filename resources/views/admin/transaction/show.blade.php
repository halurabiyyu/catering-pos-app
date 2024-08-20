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
            <th>Tanggal</th>
            <th>Nama Makanan</th>
            <th>Kuantitas</th>
            <th>Harga Satuan</th>
        </tr>
        @if (isset($transaction))
            @foreach ($transaction as $item)
                <tr>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->food->food_name}}</td>
                    <td>{{$item->kuantitas}}</td>
                    <td>{{$item->harga_satuan}}</td>
                </tr>
            @endforeach
        @endif
    </table>
    </div>
    <a href="{{route('transaction.index')}}" class="btn btn-secondary">Kembali</a>
  </div>
</div>
@endsection

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endpush
