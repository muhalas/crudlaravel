@extends('layout.adminlte');


@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Arankas Table</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Arankas Table</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  
    <div class="container">
        <a href="/tambahData" class="btn btn-primary">Tambah Data</a>
        <div class="row justify-content-center mb-2 mt-2">
          {{-- @if ($message = Session::get('success'))
          <div class="alert alert-info" role="alert">
              {{$message}}
          </div>
          @endif --}}
            <table class="table">
                <thead>
                  <tr>
                    {{-- <th scope="col">#</th>
                    <th scope="col">datetime</th>
                    <th scope="col">Value 1</th>
                    <th scope="col">Value 2</th>
                    <th scope="col">Device ID</th> --}}
                    <th scope="col">#</th>
                    <th scope="col">Code</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Dibuat</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                   $no = 1;   
                  @endphp
                    @foreach ($data as $row)
                    <tr>
                        {{-- <th scope="row">{{$row->id}}</th>
                        <td>{{$row->datetime}}</td>
                        <td>{{$row->value_1}}</td>
                        <td>{{$row->value_2}}</td>
                        <td>{{$row->device_id}}</td> --}}
                        <th scope="row">{{$no++}}</th>
                        <td>{{$row->code}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->created_at->format('D M Y')}}</td>
                        <td>{{$row->status}}</td>
                        <td>
                            <a href="/tampildata/{{$row->id}}" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->name}}">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
  

    
    {{-- alert delete --}}
    <script>
      $('.delete').click(function(){
        var deleteid = $(this).attr('data-id');
        var nama = $(this).attr('data-nama');
  
        swal({
          title: "Kamu Yakin?",
          text: "Ingin Menghapus data ini "+nama+"",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location = "/deletedata/"+deleteid+"";
            swal("Yeay! Data Berhasil Di Hapus", {
              icon: "success",
            });
          } else {
            swal("Tidak Jadi Menghapus Data");
          }
        });
      });
    </script>
</div>

@endsection();