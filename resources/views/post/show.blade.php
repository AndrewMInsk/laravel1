
current timestamp: {{ date("Ymd") }}
@foreach ($str as $elem)
    {{$elem['name']}}
@endforeach
@php
    dump(234);
@endphp

{{ $var ?? 'eee' }}

{{-- комментарий --}}
