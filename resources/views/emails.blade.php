@component('mail::message')
# Ada Pengajuan Baru

Halo admin ada pengajuan baru dari :

Tanggal : {{$data['tgl']}} <br>
Nama    : {{$data['name']}} <br>
Dapil   : {{$data['dapil']}} <br>

@component('mail::button', ['url' => $data['url']])
Klik Disini Untuk Konfirmasi
@endcomponent
@endcomponent
