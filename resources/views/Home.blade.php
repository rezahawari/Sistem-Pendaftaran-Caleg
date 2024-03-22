@extends("layout")
@section('konten')
    <section class="user1">
        <div class="container">
            @if (Auth::user()->pas_foto == NULL)
            <img class="profil d-flex mx-auto align-items-center justify-content-center" src="{{ asset('img/Foto.png') }}"
                alt="">
            @else
            <img class="profil d-flex mx-auto align-items-center justify-content-center" src="{{ asset('filecaleg/pas_foto/'.Auth::user()->pas_foto) }}"
                alt="">
            @endif
            <div class="db">
                <p class="fw-bold">{{Auth::user()->name}}</p>
            </div>
            <!-- {{-- <div class="container1">
                <div class="card align-items-center justify-content-center py-5">
                    <div class="card-block text-center mx-5">
                        <h4 class="card-title">Profil</h4>
                    </div>
                    <div class="card-block">
                        <span class="badge bg-danger">*Lengkap</span>
                    </div>
                    <a class="stretched-link" href="/profile"></a>
                </div>

                <div class="card align-items-center justify-content-center py-5">
                    <div class="card-block text-center mx-5">
                        <h4 class="card-title">Dokumen</h4>
                    </div>
                    <div class="card-block">
                        <span class="badge bg-danger">*Lengkap</span>
                    </div>
                    <a class="stretched-link" href="/doc"></a>
                </div>

                <div class="card align-items-center justify-content-center py-5">
                    <div class="card-block text-center mx-5">
                        <h4 class="card-title">Pendaftaran</h4>
                    </div>
                    <div class="card-block">
                        <span class="badge bg-danger">*Lengkap</span>
                    </div>
                    <a class="stretched-link" href="/pengajuan"></a>
                </div>

                <div class="card align-items-center justify-content-center py-5">
                    <div class="card-block text-center mx-5">
                        <h4 class="card-title">Status Pendaftaran</h4>
                    </div>
                    <div class="card-block">
                        <span class="badge bg-danger">*Lengkap</span>
                    </div>
                    <a class="stretched-link" href="/status"></a>
                </div>
            </div> --}} -->

            <div class="container">
                <div class="row row-cols-2 gap-3 justify-content-center">
                    <div class="col-sm-4">
                        <div class="card align-items-center justify-content-center py-5">
                            <div class="card-block text-center mx-5">
                                <h4 class="card-title">Profil</h4>
                            </div>
                            <div class="card-block">
                                @if ($profil == true)
                                <span class="badge bg-success">Lengkap</span>
                                @else
                                <span class="badge bg-danger">Belum Lengkap</span>

                                @endif
                            </div>
                            <a class="stretched-link" href="/profil"></a>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card align-items-center justify-content-center py-5">
                            <div class="card-block text-center mx-5">
                                <h4 class="card-title">Dokumen</h4>
                            </div>
                            <div class="card-block">
                                @if ($doc == true)
                                <span class="badge bg-success">Lengkap</span>
                                @else
                                <span class="badge bg-danger">Belum Lengkap</span>

                                @endif
                            </div>
                            <a class="stretched-link" href="/doc"></a>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card align-items-center justify-content-center py-5">
                            <div class="card-block text-center mx-5">
                                <h4 class="card-title">Pendaftaran</h4>
                            </div>
                            <div class="card-block">
                                {{-- <span class="badge bg-danger">*Lengkap</span> --}}
                            </div>
                            <a class="stretched-link" href="/pengajuan"></a>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card align-items-center justify-content-center py-5">
                            <div class="card-block text-center mx-5">
                                <h4 class="card-title">Status Pendaftaran</h4>
                            </div>
                            <div class="card-block">
                                {{-- <span class="badge bg-danger">*Lengkap</span> --}}
                            </div>
                            <a class="stretched-link" href="/status"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
