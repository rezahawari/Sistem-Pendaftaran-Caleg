@extends("Layout/main")
@section('konten')
    <!-- content area -->
    <section class="mobile-profil">
        <div class="container-sm">
            <div class="col py-3">
                <div class="row">
                    <h3 class="header">Profil</h3>
                    <div class="col-3 mx-3 cardprofile">
                        <form method="POST" action="/profil/store" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                @if (Auth::user()->pas_foto == null)
                                    <img src="{{ asset('img/Foto.png') }}" class="cardimg" alt="..." id="preview">
                                @else
                                    <img src="{{ asset('filecaleg/pas_foto/' . Auth::user()->pas_foto) }}"
                                        class="cardimg" alt="..." id="preview">
                                @endif
                                @if (Auth::user()->pas_foto == null)
                                    <div class="card-body">
                                        <input type="file" class="btncard form-control is-invalid" id="image" name="foto"
                                            onchange="removeclass('image')">
                                        <!-- <a href="#" class="btncard"></a> -->
                                    </div>
                                @else
                                    <div class="card-body">
                                        <input type="file" class="btncard form-control" id="image" name="foto">
                                        <!-- <a href="#" class="btncard"></a> -->
                                    </div>
                                @endif
                            </div>
                    </div>
                    <div class="col-6 g-3 textfield">
                        <!-- <div class="form-floating">
                                                <input type="text" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" name="nama">
                                                <label for="floatingInput">Email address</label>
                                            </div> -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Nama" name="nama"
                                value="{{ Auth::user()->name }}">
                            <label for="floatingInput">Nama</label>
                        </div>
                        <br>

                        <!-- email -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Email" name="email"
                                value="{{ Auth::user()->emails }}">
                            <label for="floatingInput">Email</label>
                        </div>
                        <br>
                        <!-- <div class="form-group">
                                                <input type="date" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir" name="tanggal">
                                            </div> -->
                        <div class="form-floating mb-3">
                            @if (Auth::user()->tgl_lahir == null)
                                <input type="date" class="form-control is-invalid" id="tgl_lahir" placeholder="date"
                                    name="date" onchange="removeclass('tgl_lahir')">
                            @else
                                <input type="date" class="form-control" id="tgl_lahir" placeholder="date" name="date"
                                    value="{{ Auth::user()->tgl_lahir }}">
                            @endif
                            <label for="tgl_lahir">Tanggal Lahir</label>
                        </div>
                        <br>
                        <!-- <div class="form-group">
                                                <input type="tel" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Telepon" name="telp">
                                            </div> -->
                        <div class="form-floating mb-3">
                            @if (Auth::user()->no_telp == null)
                                <input type="tel" class="form-control is-invalid" id="formtelp" placeholder="Nomor Telepon"
                                    name="telp" onkeydown="removeclass('formtelp')">
                            @else
                                <input type="tel" class="form-control" id="formtelp" placeholder="Nomor Telepon"
                                    name="telp" value="{{ Auth::user()->no_telp }}">
                            @endif
                            <label for="formtelp">Nomor Telepon</label>
                        </div>
                        <br>
                        <!-- <div class="form-group">
                                                        <input type="text" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Latar Belakang Pekerjaan">
                                                    </div> -->
                        <div class="form-floating">
                            @if (Auth::user()->alamat == null)
                                <textarea class="form-control txtarea is-invalid" placeholder="Leave a comment here" id="formalamat"
                                    style="height: 100px" name="alamat"
                                    onkeydown="removeclass('formalamat')"></textarea>
                            @else
                                <textarea class="form-control txtarea" placeholder="Leave a comment here" id="formalamat" style="height: 100px"
                                    name="alamat">{{ Auth::user()->alamat }}</textarea>
                            @endif
                            <label for="formalamat">Alamat</label>
                        </div>
                        <br>
                        <!-- <div class="form-group">
                                                        <input type="email" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Organisai Yang  di Ikuti">
                                                    </div> -->
                        <div class="form-floating">
                            @if (Auth::user()->latar_belakang == null)
                                <textarea class="form-control txtarea is-invalid" placeholder="Leave a comment here" id="formlatar"
                                    style="height: 100px" name="latar" onkeydown="removeclass('formlatar')"></textarea>
                            @else
                                <textarea class="form-control txtarea" placeholder="Leave a comment here" id="formlatar" style="height: 100px"
                                    name="latar">{{ Auth::user()->latar_belakang }}</textarea>
                            @endif
                            <label for="formlatar">Latar Belakang Pekerjaan</label>
                        </div>
                        <br>
                        <!-- <div class="form-group">
                                                        <input type="email" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jaringan Togas/Tomas Yang di Kenal">
                                                    </div> -->
                        <div class="form-floating">
                            @if (Auth::user()->jaringan == null)
                                <textarea class="form-control txtarea is-invalid" placeholder="Leave a comment here" id="formjaringan"
                                    style="height: 100px" name="jaringan"
                                    onkeydown="removeclass('formjaringan')"></textarea>
                            @else
                                <textarea class="form-control txtarea" placeholder="Leave a comment here" id="formjaringan" style="height: 100px"
                                    name="jaringan">{{ Auth::user()->jaringan }}</textarea>
                            @endif
                            <label for="formjaringan">Jaringan Togas/Tomas Yang di Kenal</label>
                        </div>
                        <br>
                        <button type="submit" class="sbmt">Simpan</button>
                        <br>
                    </div>
                    </form>
                </div>
            </div>
    </section>
@endsection
