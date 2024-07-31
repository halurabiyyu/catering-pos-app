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
    <div class="table-responsive">
      <a href="{{route('level.create')}}" class="btn btn-success my-1">Tambah</a>
      <table id="levelTable" class="table table-hover">
        <thead>
          <tr>
            <th>Nomor</th>
            <th>Kode Level</th>
            <th>Nama Level</th>
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
            var dataLevel   = $('#levelTable').DataTable({
                serverSide: true,
                ajax: {
                    url: "{{ url('admin/level/list') }}",
                    dataType: "json",
                    type: "POST",
                },
                columns: [{
                    data: "level_id",
                    className: "text-center",
                    orderable: true,
                    searchable: true,
                }, {
                    data: "level_kode",
                    className: "text-center",
                    orderable: true,
                    searchable: true,
                }, {
                    data: "level_nama",
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