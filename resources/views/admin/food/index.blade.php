@extends('admin.layout.template')

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title m-auto">{{$breadcrumb->title}}</h3>
    <div class="card-tools"></div>
  </div>
  <div class="card-body">
    @if (session('success'))
    <div class="alert alert-success">
      {{session('success')}}
    </div>
    @endif
    @if(session('error'))
    <div class="alert alert-error">
      {{session('error')}}
    </div>
    @endif
    <a href="{{route('food.create')}}" class="btn btn-success my-1">Tambah</a>
    <div class="table-responsive">
      <table id="foodTable" class="table table-striped">
        <thead>
          <tr>
            <th>Nomor</th>
            <th>Kode Makanan</th>
            <th>Nama Makanan</th>
            <th>Kategori</th>
            <th>Harga ($)</th>
            <th>Aksi</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>
@endsection

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            $('#foodTable').DataTable({
                serverSide: true,
                ajax: {
                    url: "{{ url('admin/food/list') }}",
                    dataType: "json",
                    type: "POST",
                },
                columns: [{
                    data: "DT_RowIndex",
                    className: "text-center",
                    orderable: false,
                    searchable: false
                }, {
                    data: "food_code",
                    className: "text-center",
                    orderable: true,
                    searchable: true,
                }, {
                    data: "food_name",
                    className: "text-center",
                    orderable: true,
                    searchable: true,
                }, {
                    data: "category.category_name",
                    className: "text-center",
                    orderable: true,
                    searchable: true,
                }, {
                    data: "food_price",
                    className: "text-center",
                    orderable: true,
                    searchable: true,
                },{
                    data: "aksi",
                    className: "text-center",
                    orderable: false,
                    searchable: false
                }]
            });
        });
    </script>
@endpush