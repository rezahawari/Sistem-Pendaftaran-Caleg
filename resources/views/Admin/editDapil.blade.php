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
        <a class="nav-link text-white " href="/admin/caleg">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-users"></i>
            </div>
            <span class="nav-link-text ms-1">Caleg</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white active bg-gradient-danger" href="/admin/dapil">
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
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/admin/dapil">Dapil</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Edit</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Edit Dapil</h6>
@endsection
@section('konten')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">

          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-danger shadow-danger border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Ubah {{$dapil->nama_dapil}}</h6>
              </div>

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
                <!-- form edit -->
                <div class="row">
                    <h3 class="header">Edit {{$dapil->nama_dapil}}</h3>
                    <div class=" mx-3 cardprofile">
                        <form method="POST" action="/admin/dapil/{{$dapil->id}}/update">
                            @csrf
                    </div>
                    <div class=" g-3 textfield">
                        <!-- <div class="form-floating">
                                                <input type="text" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" name="nama">
                                                <label for="floatingInput">Email address</label>
                                            </div> -->

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="nama" name="nama" value="{{$dapil->nama_dapil}}" disabled>
                            <label for="floatingInput">Nama Dapil</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="wilayah" name="wilayah" value="{{$dapil->wilayah}}">
                            <label for="floatingInput">Wilayah</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingInput" placeholder="kuota" name="kuota" value="{{$dapil->kuota}}">
                            <label for="floatingInput">Kuota</label>
                        </div>
                        @if ($dapil->status == 'active')
                        <div class="form-check form-switch">
                            <input class="form-check-input mt-2" type="checkbox" id="flexSwitchCheckChecked" checked name="status">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Inactive / Active</label>
                        </div>

                        @else
                        <div class="form-check form-switch">
                            <input class="form-check-input mt-2" type="checkbox" id="flexSwitchCheckChecked" name="status">
                            <label class="form-check-label" for="flexSwitchCheckChecked"> Inactive / Active</label>
                        </div>

                        @endif
                        <button type="submit" class="btn btn-danger w-100 mt-3">Save Change</button>
                    </form>
                </div>
                <!-- end form -->
              </div>
            </div>
          </div>
        </div>
      </div>
</div>


@endsection

