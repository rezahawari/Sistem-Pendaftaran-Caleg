@extends('Admin/index')
@section('sidebar')
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link text-white" href="/admin/dashboard">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-tachometer opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white " href="/admin/pengajuan">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-check-square opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Pendaftaran</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white " href="/admin/user">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Admin</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white active bg-gradient-danger" href="/admin/caleg">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-users"></i>
            </div>
            <span class="nav-link-text ms-1">Caleg</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white " href="/admin/dapil">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-map-o opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dapil</span>
        </a>
        </li>
    </ul>
@endsection
@section('breadcrumb')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Caleg</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Daftar Caleg</h6>
@endsection
@section('konten')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-danger shadow-danger border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Caleg</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="container">
            <a href="#modalTambah" data-bs-toggle="modal" class="btn btn-danger btn-sm"><i class="fa fa-plus"></i></a>

          <div class="table-responsive p-0">
            <table class="table table-hover align-items-center mb-0" id="tabel-1">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nama</th>
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Status</th>
                  <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7"></th>
                  <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th> -->
                </tr>
              </thead>
              <tbody>
                  @foreach ($user as $a)
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">

                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{$a->name}}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                        @if ($a->kelengkapan == NULL)
                        <div>
                          {{-- <span class="badge badge-sm bg-gradient-success">Lengkap</span> --}}
                        <span class="badge badge-sm bg-gradient-danger">Belum Lengkap</span>
                        {{-- <span class="badge badge-sm bg-gradient-success">Sudah Lengkpa Belum Kirim</span> --}}
                        @endif
                        @if ($a->kelengkapan != NULL && $a->status != NULL)
                        <div>
                          <span class="badge badge-sm bg-gradient-success">Lengkap dan sudah submit</span>
                        {{-- <span class="badge badge-sm bg-gradient-success">Belum Lengkap</span> --}}
                        {{-- <span class="badge badge-sm bg-gradient-success">Sudah Lengkpa Belum Kirim</span> --}}
                        @endif
                        @if ($a->kelengkapan != NULL && $a->status == NULL)
                        <div>
                          {{-- <span class="badge badge-sm bg-gradient-success">Lengkap</span> --}}
                        {{-- <span class="badge badge-sm bg-gradient-success">Belum Lengkap</span> --}}
                        <span class="badge badge-sm bg-gradient-warning">Sudah lengkap belum submit</span>
                        @endif


                    </td>
                    <td class="align-middle text-center text-sm">
                        <a href="/admin/caleg/{{$a->id}}/detail?info=a5a70a59ee3eaabb18979b18840ca4aa310de38b">
                        <span class="badge badge-sm bg-gradient-info"><i class="fa fa-info-circle"></i></span>

                        </a>
                        <a href="/admin/caleg/{{$a->id}}/destroy?what=a5a70a59ee3eaabb18979b18840ca4aa310de38b">
                        <span class="badge badge-sm bg-gradient-danger"><i class="fa fa-trash"></i></span>

                        </a>

                    </td>

                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
           </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Caleg</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/admin/user/add-caleg" method="post">
              @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="nama" name="nama">
                <label for="floatingInput">Nama Caleg</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="username" name="username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="pass" name="pass">
                <label for="floatingInput">Password</label>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection
