<h1>blade yapısı</h1>

@php
    $ad="koray danaci";
@endphp
<br>
Adınız...: {{$ad}}
<br>ikinci adınız: {{$isim}}
<br>
@php
    $deger="<script>alert('hack')</script>";
@endphp
{!! $deger !!}