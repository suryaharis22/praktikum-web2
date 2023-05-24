@php
    $nama = 'Surya';
    $nilai = 50;

@endphp

@if ($nilai > 60)
    @php
        $ket = 'Lulus';
    @endphp
@else

@php
        $ket = 'Gagal';
    @endphp
    
@endif

surya {{$nilai}} keterangan {{$ket}}