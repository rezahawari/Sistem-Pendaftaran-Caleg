@extends("Layout/main")
@section('konten')
    <div class="col py-3">
        <div class="container">
            <div class="row">
                <h3 class="header">Dokumen</h3>
                <div class="col"></div>
                    <form method="POST" action="/doc/store" enctype="multipart/form-data">
                        @csrf
                        <div class="inputdoc">
                            <label for="formktp" class="form-label">KTP</label>
                            <div class="row">
                                <div class="col-md-9">
                                    {{-- onchange="document.getElementById('filename').value=this.value" --}}
                                    <input class="form-control" id="formktp" type="file" name="ktp" style="display:none;"
                                        onchange="change('formktp','filename')">
                                    @if (Auth::user()->ktp == null)
                                        <input type="text" class="form-control is-invalid" id="filename" value="Pilih File"
                                            onclick="document.getElementById('formktp').click()" onkeydown="return false;">
                                    @else
                                        <input type="text" class="form-control is-valid" id="filename" value="Sudah Upload"
                                            onclick="document.getElementById('formktp').click()" onkeydown="return false;">
                                    @endif
                                </div>
                                <div class="col">

                                    @if (Auth::user()->ktp == null)
                                    <a class="btn tombol1 text-white disabled"><i class="fa fa-download"></i></a>
                                    <a class="btn tombol text-white disabled"><i class="fa fa-trash"></i></a>
                                    @else
                                    <a class="btn tombol1 text-white" href="{{ asset('filecaleg/ktp/' . Auth::user()->ktp) }}" target="_blank"><i class="fa fa-download"></i></a>
                                    <a class="btn tombol text-white" href="/doc/{{Auth::user()->id}}?what=92849aeec004d64f3cdd984a81100ee7"><i class="fa fa-trash"></i></a>

                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="inputdoc">
                            <label for="formkta" class="form-label">KTA</label>
                            <div class="row">
                                <div class="col-md-9">
                                    <input class="form-control" id="formkta" type="file" name="kta" style="display:none;"
                                        onchange="change('formkta','ktaname')">
                                    @if (Auth::user()->kta == null)
                                        <input type="text" class="form-control is-invalid" id="ktaname" value="Pilih File"
                                            onkeydown="return false" onclick="document.getElementById('formkta').click()">
                                    @else
                                        <input type="text" class="form-control is-valid" id="ktaname" value="Sudah Upload"
                                            onkeydown="return false" onclick="document.getElementById('formkta').click()">
                                    @endif
                                </div>
                                <div class="col">
                                    @if (Auth::user()->kta == null)
                                    <a class="btn tombol1 text-white disabled"><i class="fa fa-download"></i></a>
                                    <a class="btn tombol text-white disabled"><i class="fa fa-trash"></i></a>

                                    @else
                                    <a class="btn tombol1 text-white" href="{{ asset('filecaleg/kta/' . Auth::user()->kta) }}" target="_blank"><i class="fa fa-download"></i></a>
                                    <a class="btn tombol text-white" href="/doc/{{Auth::user()->id}}?what=44769ad2aea97161f74cca5dd270eee9"><i class="fa fa-trash"></i></a>

                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="inputdoc">
                            <label for="formbpjs" class="form-label">BPJS</label>
                            <div class="row">
                                <div class="col-md-9">
                                    <input class="form-control" id="formbpjs" type="file" name="bpjs"
                                        style="display: none" onchange="change('formbpjs','bpjsname')">
                                    @if (Auth::user()->bpjs == null)
                                        <input type="text" class="form-control is-invalid" id="bpjsname" value="Pilih File"
                                            onkeydown="return false" onclick="document.getElementById('formbpjs').click()">
                                    @else
                                        <input type="text" class="form-control is-valid" id="bpjsname" value="Sudah Upload"
                                            onkeydown="return false" onclick="document.getElementById('formbpjs').click()">
                                    @endif
                                </div>
                                <div class="col">
                                    @if (Auth::user()->bpjs == null)
                                    <a class="btn tombol1 text-white disabled"><i class="fa fa-download"></i></a>
                                    <a class="btn tombol text-white disabled"><i class="fa fa-trash"></i></a>
                                    @else
                                    <a class="btn tombol1 text-white" href="{{ asset('filecaleg/bpjs/' . Auth::user()->bpjs) }}" target="_blank"><i class="fa fa-download"></i></a>
                                    <a class="btn tombol text-white" href="/doc/{{Auth::user()->id}}?what=f6bc5ffef23c03eeba5df579eabd3cfe"><i class="fa fa-trash"></i></a>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="inputdoc">
                            <label for="formcv" class="form-label">CV</label>
                            <div class="row">
                                <div class="col-md-9">
                                    <input class="form-control" id="formcv" type="file" name="cv" style="display: none"
                                        onchange="change('formcv','cvname')">
                                    @if (Auth::user()->cv == null)
                                        <input type="text" class="form-control is-invalid" id="cvname" value="Pilih File"
                                            onkeydown="return false" onclick="document.getElementById('formcv').click()">
                                    @else
                                        <input type="text" class="form-control is-valid" id="cvname" value="Sudah Upload"
                                            onkeydown="return false" onclick="document.getElementById('formcv').click()">
                                    @endif
                                </div>
                                <div class="col">
                                    @if (Auth::user()->cv == null)
                                    <a class="btn tombol1 text-white disabled"><i class="fa fa-download"></i></a>
                                    <a class="btn tombol text-white disabled"><i class="fa fa-trash"></i></a>
                                    @else
                                    <a class="btn tombol1 text-white" href="{{ asset('filecaleg/cv/' . Auth::user()->cv) }}" target="_blank"><i class="fa fa-download"></i></a>
                                    <a class="btn tombol text-white" href="/doc/{{Auth::user()->id}}?what=de3ec0aa2234aa1e3ee275bbc715c6c9"><i class="fa fa-trash"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="inputdoc"></div>
                        <label for="formrek" class="form-label">Rekening Tabungan / Deposito</label>
                        <div class="row">
                            <div class="col-md-9">
                                <input class="form-control" id="formrek" type="file" name="rekening" style="display: none"
                                    onchange="change('formrek','rekname')">
                                @if (Auth::user()->rekening == null)
                                    <input type="text" class="form-control is-invalid" id="rekname" value="Pilih File"
                                        onkeydown="return false" onclick="document.getElementById('formrek').click()">
                                @else
                                    <input type="text" class="form-control is-valid" id="rekname" value="Sudah Upload"
                                        onkeydown="return false" onclick="document.getElementById('formrek').click()">
                                @endif
                            </div>
                            <div class="col">
                                @if (Auth::user()->rekening == null)
                                <a class="btn tombol1 text-white disabled"><i class="fa fa-download"></i></a>
                                <a class="btn tombol text-white disabled"><i class="fa fa-trash"></i></a>
                                @else
                                <a class="btn tombol1 text-white" href="{{ asset('filecaleg/rekening/' . Auth::user()->rekening) }}" target="_blank"><i class="fa fa-download"></i></a>
                                <a class="btn tombol text-white" href="/doc/{{Auth::user()->id}}?what=ed3743d3a98e9167be3dae7c46e4852a"><i class="fa fa-trash"></i></a>
                                @endif
                            </div>
                        </div>
                        <div class="inputdoc">
                            <label for="formnpwp" class="form-label">NPWP</label>
                            <div class="row">
                                <div class="col-md-9">
                                    <input class="form-control" id="formnpwp" type="file" name="npwp"
                                        style="display: none" onchange="change('formnpwp','npwpname')">
                                    @if (Auth::user()->npwp == null)
                                        <input type="text" class="form-control is-invalid" id="npwpname" value="Pilih File"
                                            onkeydown="return false" onclick="document.getElementById('formnpwp').click()">
                                    @else
                                        <input type="text" class="form-control is-valid" id="npwpname" value="Sudah Upload"
                                            onkeydown="return false" onclick="document.getElementById('formnpwp').click()">
                                    @endif
                                </div>
                                <div class="col">
                                    @if (Auth::user()->npwp == null)
                                    <a class="btn tombol1 text-white disabled"><i class="fa fa-download"></i></a>
                                    <a class="btn tombol text-white disabled"><i class="fa fa-trash"></i></a>
                                    @else
                                    <a class="btn tombol1 text-white" href="{{ asset('filecaleg/npwp/' . Auth::user()->npwp) }}" target="_blank"><i class="fa fa-download"></i></a>
                                    <a class="btn tombol text-white" href="/doc/{{Auth::user()->id}}?what=0924820a16d5610515ed2e1c0ca04f61"><i class="fa fa-trash"></i></a>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="inputdoc">
                            <label for="formpernyataan" class="form-label">Pernyataan bersedia</label>
                            <div class="row">
                                <div class="col-md-9">
                                    <input class="form-control" id="formpernyataan" type="file" name="pernyataan"
                                        style="display: none" onchange="change('formpernyataan','pernyataanname')">
                                    @if (Auth::user()->pernyataan == null)
                                        <input type="text" class="form-control is-invalid" id="pernyataanname"
                                            value="Pilih File" onkeydown="return false"
                                            onclick="document.getElementById('formpernyataan').click()">
                                    @else
                                        <input type="text" class="form-control is-valid" id="pernyataanname"
                                            value="Sudah Upload" onkeydown="return false"
                                            onclick="document.getElementById('formpernyataan').click()">
                                    @endif
                                    <label for="formFileLg" class="unduh">Template berkas <a class="text-primary"
                                            href="http://">Unduh</a></label>
                                </div>
                                <div class="col">
                                    @if (Auth::user()->pernyataan == null)
                                    <a class="btn tombol1 text-white disabled"><i class="fa fa-download"></i></a>
                                    <a class="btn tombol text-white disabled"><i class="fa fa-trash"></i></a>
                                    @else
                                    <a class="btn tombol1 text-white" href="{{ asset('filecaleg/pernyataan/' . Auth::user()->pernyataan) }}" target="_blank"><i class="fa fa-download"></i></a>
                                    <a class="btn tombol text-white" href="/doc/{{Auth::user()->id}}?what=2c947d68ae198a6b04e64c688c1e625f"><i class="fa fa-trash"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="sbmt">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('script')
@if (Session::has('success'))
<script>
    $( document ).ready(function() {
        toastr.success('<?php echo Session::get('success') ?>', 'Berhasil');
    });
    </script>


@endif
    <script>
        function change(idForm, idInput) {
            var a = document.getElementById(idForm)
            var theSplit = a.value.split('\\');
            console.log(theSplit);
            var b = document.getElementById(idInput);
            b.classList.remove('is-invalid')
            document.getElementById(idInput).value = theSplit[theSplit.length - 1];
            // fileLabel.innerHTML = theSplit[theSplit.length-1];
        }
    </script>
@endsection
