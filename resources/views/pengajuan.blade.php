@extends("Layout/main")
@section('konten')
    <!-- content area -->
    <div class="col py-5 ">
        <div class="container">
            <h3 class="my-4">Pengajuan Pendaftaran</h3>
            <form action="/pengajuan/store" method="post">
                @csrf
                @foreach ($dapil as $d)
                <div class="form-check rad selectbtn mb-3">
                    <input type="hidden" value="{{$d->pemilih}}" name="pemilih">
                    <input class="form-check-input " type="radio" name="pilihan" id="exampleRadios1" value="{{$d->id}}">

                    <div class="d-flex justify-content-between">
                        <div class="row">
                            <label class="form-check-label" for="exampleRadios1">
                                <b>{{$d->nama_dapil}}</b>
                            </label>

                            <label class="form-check-label" for="exampleRadios1">
                                {{$d->wilayah}}
                            </label>
                        </div>

                        <label class="form-check-label" for="exampleRadios1">
                            {{$d->pemilih}} / {{$d->kuota}}
                        </label>
                    </div>
                </div>
                @endforeach

                {{-- button submit --}}
                <button type="submit" class="btn tombol my-3" style="width: 100%;">
                    Submit
                </button>
            </form>
        </div>
    </div>
    </div>
    </div>
@endsection
