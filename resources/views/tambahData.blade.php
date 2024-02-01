@extends('layout.adminlte');

@section('content');
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah Data</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/arankas">Arankas Table</a></li>
            <li class="breadcrumb-item active">Tambah Data</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-8"> 
                <div class="card">
                    <div class="card-body">
                        <form action="/insert" method="POST" enctype="multipart/form-data">
                          @csrf
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Input Code</label>
                              <input type="text" name='code' class="form-control" id="code" aria-describedby="code">
                              {{-- <div id="code" class="form-text">Input Code</div> --}}
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Input Nama</label>
                              <input type="text" name='name' class="form-control" id="name" aria-describedby="name">
                              {{-- <div id="name" class="form-text">Input Nama</div> --}}
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">status</label>
                              <select class="form-select" aria-label="Default select example" name='status' id="status">
                                    <option selected>Pilih status</option>
                                    <option value="1">nonaktif</option>
                                    <option value="2">aktif</option>
                              </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </div>
</html>
@endsection();