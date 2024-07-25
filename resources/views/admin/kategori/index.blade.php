@extends('admin.layout.template')

@section('content')

<div class="card">
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
    <div class="table-responsive">
      <a href="{{route('kategori.create')}}" class="btn btn-success my-1">Tambah</a>
      <table id="kategoriTable" class="table table-hover">
        <thead>
          <tr>
            <th>Nomor</th>
            <th>Kode Kategori</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>
@endsection

@push('css')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> --}}
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            var dataKategori   = $('#kategoriTable').DataTable({
                serverSide: true,
                ajax: {
                    url: "{{ url('admin/kategori/list') }}",
                    dataType: "json",
                    type: "POST",
                },
                columns: [{
                    data: "category_id",
                    className: "text-center",
                    orderable: true,
                    searchable: true,
                }, {
                    data: "category_code",
                    className: "text-center",
                    orderable: true,
                    searchable: true,
                }, {
                    data: "category_name",
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

        // document.addEventListener('DOMContentLoaded', function() {
        //     var petunjukModal = new bootstrap.Modal(document.getElementById('petunjukModal'));
        //     document.getElementById('modalButton').addEventListener('click', function() {
        //         petunjukModal.show();
        //     });
        // });
    </script>
@endpush