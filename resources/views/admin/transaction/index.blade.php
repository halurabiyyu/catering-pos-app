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
    {{-- <a href="{{route('user.create')}}" class="btn btn-success my-1">Tambah</a> --}}
    <div class="table-responsive">
      <table id="transactionTable" class="table table-striped">
        <thead>
          <tr>
            <th>Nomor</th>
            <th>Tanggal</th>
            <th>ID Transaksi</th>
            <th>Nama Pembeli</th>
            <th>Total Harga ($)</th>
            <th>Status</th>
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
            $('#transactionTable').DataTable({
                serverSide: true,
                ajax: {
                    url: "{{ url('admin/transaction/list') }}",
                    dataType: "json",
                    type: "POST",
                },
                columns: [{
                    data: "DT_RowIndex",
                    className: "text-center",
                    orderable: false,
                    searchable: false
                }, {
                    data: "created_at",
                    className: "text-center",
                    orderable: true,
                    searchable: true,
                    render: function(data, type, row) {
                      const date = new Date(data);
                      // Format tanggal (DD-MM-YYYY)
                      const formattedDate = date.toLocaleDateString('en-GB');
                      // Format waktu (HH:mm)
                      const formattedTime = date.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
                      return `${formattedDate} ${formattedTime}`;
                    }
                }, {
                    data: "transaction_id",
                    className: "text-center",
                    orderable: true,
                    searchable: true,
                }, {
                    data: "user.nama",
                    className: "text-center",
                    orderable: true,
                    searchable: true,
                }, {
                    data: "total_harga",
                    className: "text-center",
                    orderable: true,
                    searchable: true,
                }, {
                    data: "status",
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