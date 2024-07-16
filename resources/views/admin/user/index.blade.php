@extends('admin.layout.template')

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Halo, apakabar!!!</h3>
    <div class="card-tools"></div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table id="userTable" class="table table-striped">
        <thead>
          <tr>
            <th>Nomor</th>
            <th>Kode Level</th>
            <th>Username</th>
            <th>Nama</th>
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
            $('#userTable').DataTable({
                serverSide: true,
                ajax: {
                    url: "{{ url('admin/user/list') }}",
                    dataType: "json",
                    type: "POST",
                },
                columns: [{
                    data: "DT_RowIndex",
                    className: "text-center",
                    orderable: false,
                    searchable: false
                }, {
                    data: "level.level_kode",
                    className: "text-center",
                    orderable: true,
                    searchable: true,
                }, {
                    data: "username",
                    className: "text-center",
                    orderable: true,
                    searchable: true,
                }, {
                    data: "nama",
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