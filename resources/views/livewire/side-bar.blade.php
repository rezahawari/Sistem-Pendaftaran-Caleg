<div>
        <div class="d-flex justify-content-center text-center my-3 ">
            <div class="">
                @if (Auth::user()->pas_foto == null)
                    <img class="profil" src="{{ asset('img/Foto.png') }}" alt="">
                @else
                    <img class="profil" src="{{ asset('filecaleg/pas_foto/' . Auth::user()->pas_foto) }}"
                        alt="">
                @endif
                <p class="text-center fw-bold my-2">{{ Auth::user()->name }}</p>
            </div>
        </div>

        {{-- <ul class="link">
            <li><a class=" text-dark" href="">Profile</a></li>
            <li><a class=" text-dark" href="">Document</a></li>
            <li><a class="text-dark" href="">Status Pendaftaran</a></li>
            <li><a class=" tomboldaftar btn" href="">Pengajuan Pendaftaran</a></li>
        </ul> --}}
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start px-4"
            id="menu">
            <li class="nav-item">
                <a href="/profil" class="nav-link align-middle">
                    <i class="fs-4 bi-house"></i> <span class=" text-dark">Profil</span>
                </a>
            </li>

            <li>
                {{-- {{$count}} --}}
                <div wire:loading.block>Processing Payment...</div>
                {{-- <button wire:click="increment">+</button> --}}
                <button wire:click="goDoc" class="nav-link align-middle">
                    </i> <span class=" text-dark">Document</span> </button>
            </li>
            <li>
                <a href="/status" class="nav-link align-middle">
                    <span class=" text-dark">Status Pendaftaran</span> </a>
            </li>
            <li>
                {{-- @if (Auth::user()->kelengkapan != 'lengkap' || Auth::user()->status != null)
                    <a href="/pengajuan" class="nav-link  align-middle disabled">
                    @else
                        <a href="/pengajuan" class="nav-link  align-middle">
                            @endif --}}
                            <a href="/pengajuan" class="nav-link  align-middle">
                <span class=" tomboldaftar btn">Pengajuan Pendaftaran</span> </a>
            </li>
        </ul>
</div>
