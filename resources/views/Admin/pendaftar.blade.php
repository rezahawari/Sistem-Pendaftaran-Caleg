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
        <a class="nav-link text-white active bg-gradient-danger" href="/admin/pengajuan">
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
        <a class="nav-link text-white " href="/admin/caleg">
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
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Pengajuan</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Kelola Pengajuan</h6>
@endsection
@section('konten')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">

          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-danger shadow-danger border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Pendaftar</h6>
              </div>
              <br>
              {{-- <div class="container">
                <a href="javascript:;" class="text-white badge bg-danger text-dark font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    PDF
                </a>
                <a href="javascript:;" class="text-white badge bg-success text-dark font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Excel
                </a>
              </div> --}}

            </div>

            <div class="card-body px-0 pb-2">
              <div class="container">
                <div class="table-responsive p-0 data-table">
                    <table class="table table-hover align-items-center mb-0" id="tabel-1">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Nama</th>
                          <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Tanggal Pengajuan</th>
                          <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Dapil</th>
                          <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Status</th>
                          <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($pengajuan as $a)
                          <tr>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">{{$a->user->name}}</h6>
                                  {{-- <p class="text-xs text-secondary mb-0">john@creative-tim.com</p> --}}
                                </div>
                              </div>
                            </td>
                            <td>
                                <h6 class="mb-0 text-sm">{{$a->tgl_pengajuan}}</h6>
                              {{-- <p class="text-xs text-secondary mb-0">Organization</p> --}}
                            </td>
                            <td>
                                <h6 class="mb-0 text-sm">{{$a->dapil->nama_dapil}}</h6>
                            </td>
                            <td>
                                @if ($a->status == "Diajukan")
                                <span class="badge badge-sm bg-gradient-warning">Diajukan</span>
                                @endif
                                @if ($a->status == "Diterima")
                                <span class="badge badge-sm bg-gradient-success">Diterima</span>
                                @endif
                                @if ($a->status == "Ditolak")
                                <span class="badge badge-sm bg-gradient-danger">Ditolak</span>
                                @endif
                            </td>
                            <td>
                                @if ($a->status == 'Diajukan')
                                <a href="/admin/pengajuan/{{$a->user->id}}/{{$a->id}}/detail?info=609abc13a694b5d68c4df7fb484671b0fc2add4b" class="text-secondary font-weight-bold" data-toggle="tooltip" data-original-title="Edit user">
                                    <span class="badge badge-sm bg-gradient-info"><i class="fa fa-info-circle"></i></span>
                                </a>
                                @else
                                <a class="text-secondary font-weight-bold disabled" data-toggle="tooltip" data-original-title="Edit user">
                                    <span class="badge badge-sm bg-gradient-info"><i class="fa fa-info-circle"></i></span>
                                </a>

                                @endif
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
@endsection
