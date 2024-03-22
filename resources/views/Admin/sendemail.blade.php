@component('mail::message')
# {{$data['title']}}
{{$data['isi']}}

@component('mail::button', ['url' => $data['url']])
Klik disini
@endcomponent

Hormat Kami,<br>
Gerindra Jateng
@endcomponent
