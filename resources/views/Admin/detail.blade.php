@extends('Admin/index')
@section('sidebar')
    @if (request('info') == 'a5a70a59ee3eaabb18979b18840ca4aa310de38b')

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
    @endif
    @if (request('info') == '609abc13a694b5d68c4df7fb484671b0fc2add4b')
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
        <a class="nav-link text-white" href="/admin/caleg">
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

    @endif
@endsection
@section('breadcrumb')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        @if (request('info') == '609abc13a694b5d68c4df7fb484671b0fc2add4b')
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/admin/pengajuan">Pengajuan</a></li>

        @else
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/admin/caleg">Caleg</a></li>

        @endif
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Detail</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Detail</h6>
@endsection
@section('konten')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-danger shadow-danger border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Detail Caleg</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="col py-3">
              <div class="container">
                <div class="row">
                    {{-- <h3 class="header">Profile</h3> --}}
                    <div class="col-12 d-flex justify-content-center ">
                        <div class="card rounded" style="max-width: 257px;">
                            @if ($user->pas_foto == NULL)
                            <img src="{{asset('img/Foto.png') }}" class="cardimg rounded" style="max-height:284px;" alt="..." id="preview">
                            @else
                            <img src="{{asset('filecaleg/pas_foto/'.$user->pas_foto) }}" class="cardimg" style="max-height:284px;" alt="..." id="preview">

                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6 g-3">

                      <!-- <div class="form-floating">
                      <input type="text" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" name="nama">
                      <label for="floatingInput">Email address</label>
                        </div> -->
                      <div class="form-floating mb-3">
                          @if ($user->name == NULL)
                          <input type="text" class="form-control is-invalid" id="floatingInput" placeholder="Nama" name="nama" disabled>
                          @else
                          <input type="text" class="form-control" id="floatingInput" placeholder="Nama" name="nama" value="{{$user->name}}" disabled>

                          @endif
                        <label for="floatingInput">Nama</label>
                      </div>

                      <br>
                      <div class="form-floating mb-3">
                          @if ($user->emails == NULL)
                          <input type="text" class="form-control is-invalid" id="floatingInput" placeholder="Emaul" name="email" disabled>
                          @else
                          <input type="text" class="form-control" id="floatingInput" placeholder="Email" name="email" value="{{$user->emails}}" disabled>

                          @endif
                        <label for="floatingInput">Email</label>
                      </div>

                      <br>
                      <!-- <div class="form-group">
                      <input type="date" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir" name="tanggal">
                        </div> -->
                      <div class="form-floating mb-3">
                          @if ($user->tgl_lahir == NULL)
                          <input type="date" class="form-control is-invalid" id="floatingInput" placeholder="date" name="date" disabled>

                          @else
                          <input type="date" class="form-control" id="floatingInput" placeholder="date" name="date" value="{{$user->tgl_lahir}}" disabled>

                          @endif
                        <label for="floatingInput">Tanggal Lahir</label>
                      </div>
                      <br>
                      <!-- <div class="form-group">
                      <input type="tel" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Telepon" name="telp">
                        </div> -->
                      <div class="form-floating mb-3">
                          @if ($user->no_telp == NULL)
                          <input type="tel" class="form-control is-invalid" id="floatingInput" placeholder="Nomor Telepon" name="telp" disabled>

                          @else
                          <input type="tel" class="form-control" id="floatingInput" placeholder="Nomor Telepon" name="telp" value="{{$user->no_telp}}" disabled>

                          @endif
                        <label for="floatingInput">Nomor Telepon</label>
                      </div>
                      <br>
                      <!-- <div class="form-group">
                              <input type="text" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Latar Belakang Pekerjaan">
                          </div> -->
                      <div class="form-floating">
                          @if ($user->alamat == NULL)
                          <textarea class="form-control txtarea is-invalid" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" disabled></textarea>

                          @else
                          <textarea class="form-control txtarea" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" disabled>{{$user->alamat}}</textarea>

                          @endif
                        <label for="floatingTextarea2">Alamat</label>
                      </div>
                      <br>
                      <!-- <div class="form-group">
                              <input type="email" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Organisai Yang  di Ikuti">
                          </div> -->
                      <div class="form-floating">
                          @if ($user->latar_belakang == NULL)
                          <textarea class="form-control txtarea is-invalid" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" disabled>{{$user->latar_belakang}}</textarea>

                          @else
                          <textarea class="form-control txtarea" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" disabled>{{$user->latar_belakang}}</textarea>

                          @endif
                        <label for="floatingTextarea2">Latar Belakang Pekerjaan</label>
                      </div>
                      <br>
                      <!-- <div class="form-group">
                              <input type="email" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jaringan Togas/Tomas Yang di Kenal">
                          </div> -->
                      <div class="form-floating">
                          @if ($user->jaringan == NULL)
                          <textarea class="form-control txtarea is-invalid" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" disabled></textarea>

                          @else
                          <textarea class="form-control txtarea" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" disabled>{{$user->jaringan}}</textarea>

                          @endif
                        <label for="floatingTextarea2">Jaringan Togas/Tomas Yang di Kenal</label>
                      </div>

                    </div>
                    <div class="col-sm-6 g-3">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                              <h6 class="mb-0">Dokumen</h6>
                            </div>
                            <div class="card-body p-3">
                              <ul class="list-group">
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                                  <div class="avatar me-3">
                                    <img src="{{asset('img/file.jpeg')}}" alt="kal">
                                  </div>
                                    @if ($user->ktp == NULL)
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">KTP<span class="mx-2 badge badge-sm bg-danger rounded-pill">Belum Upload</span></h6>
                                        <p class="mb-0 text-xs">File not uploaded</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto streched-link" href="javascript:;">
                                        <i class="fa fa-download"></i>
                                    </a>

                                    @else
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">KTP<span class="mx-2 badge badge-sm bg-success rounded-pill">Sudah Upload</span></h6>
                                        <p class="mb-0 text-xs">{{$user->ktp}}</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto streched-link" href="{{asset('filecaleg/ktp/'.$user->ktp)}}">
                                        <i class="fa fa-download" data-bs-toggle="tooltip" data-bs-placement="top" title="Download KTP"></i>
                                    </a>
                                    @endif
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                                  <div class="avatar me-3">
                                    <img src="{{asset('img/file.jpeg')}}" alt="kal">
                                  </div>
                                    @if ($user->kta == NULL)
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">KTA<span class="mx-2 badge badge-sm bg-danger rounded-pill">Belum Upload</span></h6>
                                        <p class="mb-0 text-xs">File not uploaded</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto streched-link" href="javascript:;">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    @else
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">KTA<span class="mx-2 badge badge-sm bg-success rounded-pill">Sudah Upload</span></h6>
                                        <p class="mb-0 text-xs">{{$user->kta}}</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto streched-link" href="{{asset('filecaleg/kta/'.$user->kta)}}">
                                        <i class="fa fa-download" data-bs-toggle="tooltip" data-bs-placement="top" title="Download KTA"></i>
                                    </a>
                                    @endif
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                                  <div class="avatar me-3">
                                    <img src="{{asset('img/file.jpeg')}}" alt="kal">
                                  </div>
                                    @if ($user->bpjs == NULL)
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">BPJS<span class="mx-2 badge badge-sm bg-danger rounded-pill">Belum Upload</span></h6>
                                        <p class="mb-0 text-xs">File not uploaded</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto streched-link" href="javascript:;">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    @else
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">BPJS<span class="mx-2 badge badge-sm bg-success rounded-pill">Sudah Upload</span></h6>
                                        <p class="mb-0 text-xs">{{$user->bpjs}}</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto streched-link" href="{{asset('filecaleg/bpjs/'.$user->bpjs)}}">
                                        <i class="fa fa-download" data-bs-toggle="tooltip" data-bs-placement="top" title="Download BPJS"></i>
                                    </a>

                                    @endif
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                                  <div class="avatar me-3">
                                    <img src="{{asset('img/file.jpeg')}}" alt="kal">
                                  </div>
                                    @if ($user->cv == NULL)
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">CV<span class="mx-2 badge badge-sm bg-danger rounded-pill">Belum Upload</span></h6>
                                        <p class="mb-0 text-xs">File not uploaded</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto streched-link" href="javascript:;">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    @else
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">CV<span class="mx-2 badge badge-sm bg-success rounded-pill">Sudah Upload</span></h6>
                                        <p class="mb-0 text-xs">{{$user->cv}}</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto streched-link" href="{{asset('filecaleg/cv/'.$user->cv)}}">
                                        <i class="fa fa-download" data-bs-toggle="tooltip" data-bs-placement="top" title="Download CV"></i>
                                    </a>
                                    @endif
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                                  <div class="avatar me-3">
                                    <img src="{{asset('img/file.jpeg')}}" alt="kal">
                                  </div>
                                    @if ($user->rekening == NULL)
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Rekening<span class="mx-2 badge badge-sm bg-danger rounded-pill">Belum Upload</span></h6>
                                        <p class="mb-0 text-xs">File not uploaded</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto streched-link" href="javascript:;">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    @else
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Rekening<span class="mx-2 badge badge-sm bg-success rounded-pill">Sudah Upload</span></h6>
                                        <p class="mb-0 text-xs">{{$user->rekening}}</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto streched-link" href="{{asset('filecaleg/rekening/'.$user->rekening)}}">
                                        <i class="fa fa-download" data-bs-toggle="tooltip" data-bs-placement="top" title="Download Rekening"></i>
                                    </a>

                                    @endif
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                                  <div class="avatar me-3">
                                    <img src="{{asset('img/file.jpeg')}}" alt="kal">
                                  </div>
                                    @if ($user->npwp == NULL)
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">NPWP<span class="mx-2 badge badge-sm bg-danger rounded-pill">Belum Upload</span></h6>
                                        <p class="mb-0 text-xs">File not uploaded</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto streched-link" href="javascript:;">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    @else
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">NPWP<span class="mx-2 badge badge-sm bg-success rounded-pill">Sudah Upload</span></h6>
                                        <p class="mb-0 text-xs">{{$user->npwp}}</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto streched-link" href="{{asset('filecaleg/npwp/'.$user->npwp)}}">
                                        <i class="fa fa-download" data-bs-toggle="tooltip" data-bs-placement="top" title="Download NPWP"></i>
                                    </a>
                                    @endif
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                                  <div class="avatar me-3">
                                    <img src="{{asset('img/file.jpeg')}}" alt="kal">
                                  </div>
                                    @if ($user->pernyataan == NULL)
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Pernyataan<span class="mx-2 badge badge-sm bg-danger rounded-pill">Belum Upload</span></h6>
                                        <p class="mb-0 text-xs">File not uploaded</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto streched-link" href="javascript:;">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    @else
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Pernyataan<span class="mx-2 badge badge-sm bg-success rounded-pill">Sudah Upload</span></h6>
                                        <p class="mb-0 text-xs">{{$user->pernyataan}}</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto streched-link" href="{{asset('filecaleg/pernyataan/'.$user->pernyataan)}}">
                                        <i class="fa fa-download" data-bs-toggle="tooltip" data-bs-placement="top" title="Download Pernyataan"></i>
                                    </a>

                                    @endif
                                </li>

                              </ul>
                            </div>
                        </div>
                    </div>
                    @if (request('info') == '609abc13a694b5d68c4df7fb484671b0fc2add4b')
                    <div class="col-12 mt-4">
                        <a href="#modalresponse" data-bs-toggle="modal" class="btn btn-primary w-100">Response</a>
                    </div>

                    @endif

                  </div>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@if (request('info') == '609abc13a694b5d68c4df7fb484671b0fc2add4b')
<!-- Modal -->
<div class="modal fade" id="modalresponse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Respon Pengajuan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/admin/pengajuan/detail/response" method="post">
            @csrf
            <input type="hidden" value="{{$user->id}}" name="id">
            <input type="hidden" value="{{$pengajuan->id}}" name="idpengajuan">
            <input type="hidden" value="{{$pengajuan->dapil->id}}" name="iddapil">
            <div class="row">
              <div class="col-12 d-flex justify-content-center">
                <input type="radio" class="btn-check" name="persetujuan" value="terima" id="option2" onclick="addDisabled()">
                <label class="btn btn-outline-success w-25" for="option2">Terima</label>
                <input type="radio" class="btn-check" name="persetujuan" value="tolak" id="option4" onclick="removedisabled()">
                <label class="btn btn-outline-danger w-25" for="option4">Tolak</label>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here" id="formalasan" style="height: 100px" name="alasan" disabled></textarea>
                  <label for="formalasan">Alasan</label>
                </div>
              </div>
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

@endif
@endsection
@section('script')
    <script>
        function removedisabled(){
            $('#formalasan').removeAttr("disabled");
        }

        function addDisabled(){
            $('#formalasan').attr('disabled','disabled');
        }
    </script>
@endsection
