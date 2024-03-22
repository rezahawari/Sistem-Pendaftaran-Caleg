
@extends("Layout/main")
@section('konten')
@if (Session::has('send'))
{{-- <script>window.location="https://stackoverflow.com";</script> --}}

@endif
    <div class="container">
        <!-- content area -->
        {{-- all title use h3 and header class!!! --}}
        <h3 class="header">STATUS PENDAFTARAN</h3>

        {{-- table --}}
        <div class="col-10 table-responsive tablestatus">
            <table class="table table-bordered" id="tabel-1">
                <thead class="bg-grey">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Pendaftaran</th>
                        <th scope="col">Dapil</th>
                        <th scope="col">Status</th>
                        <th scope="col">Alasan</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($pengajuan as $p)
                    <tr>
                        <td>{{$p->user->name}}</td>
                        <td>{{$p->tgl_pengajuan}}</td>
                        <td>{{$p->dapil->nama_dapil}}</td>
                        @if ($p->status == 'Diajukan')
                        <td><span class="badge bg-warning">Diajukan</span></td>
                        <td><a href="" class="btn btn-primary btn-sm disabled"><i class="fa fa-eye"></i></a></td>
                        @endif
                        @if ($p->status == 'Diterima')
                        <td><span class="badge bg-success">Diterima</span></td>
                        <td><a href="" class="btn btn-primary btn-sm disabled"><i class="fa fa-eye"></i></a></td>

                        @endif
                        @if ($p->status == 'Ditolak')
                        <td><span class="badge bg-danger">Ditolak</span></td>
                        <td><a href="#alasan" data-bs-toggle="modal" data-bs-alasan="{{$p->alasan}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a></td>

                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="alasan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Alasan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <textarea class="form-control txtarea" placeholder="Leave a comment here" id="alasanform" style="height: 100px" disabled></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
@if (Session::has('send'))
<script>
    $( document ).ready(function() {
        toastr.success('<?php echo Session::get('send') ?>', 'Berhasil');
    });
    </script>


@endif
<script>
    var alasan = document.getElementById('alasan')
    alasan.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient = button.getAttribute('data-bs-alasan')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's contents
    var modalBodyInput = alasan.querySelector('.modal-body #alasanform')
    modalBodyInput.value = recipient
    })
</script>
@endsection
