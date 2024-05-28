@extends('layouts/app')
@section('title','Index sayfası')
{{-- @section('ad','koray danaci') --}}
@includeIf('inc.navbasr',['menu1'=>'anasayfa1','menu2'=>'hakkımızda1'])
@section('content')
  <h1>Blade temel şablonu uygulandı!</h1>
  {{--  @php
   echo __DIR__;
   echo "<br>";
   echo __FILE__;
   @endphp
   @br @br
   koray @br danacı  @br
   @addName (koray danacı)
   @custom (<hr>)
@endsection--}}


 <?php
      /*  $sayi=4;
     if ($sayi>5)
         {
             echo "Sayı 5'ten büyük";
         }
     else if($sayi<5)
         {
             echo "Sayı 5'ten küçük";
         }
     else
         {
             echo "Sayi 5'e eşit";
         }*/
 ?>
    <!-- ***** Blade yapısı if koşulu -->

  @php($sayi=1)
    {{--
        @if($sayi>5)
            Sayı 5 ten büyük
            @elseif ($sayi<5)
            Sayı 5 ten küçük
            @else
            Sayı 5'e EŞİT
        @endif --}}

<?php /*echo $sayi==5 ? '5 e eşit' : 'değil'; */ ?>
        <!-- ***** Blade yapısı Kısayol if -->
    {{-- {{$sayi==5 ? '5e eşit' : 'değil'}}--}}

  {{--Eğer bu koşul gerçekleşirse  false mu true mi olduğunu gösterir. 0false 1 2 3 true, yada false değerse false--}}
  {{-- @unless($sayi)
       ok false
  @endunless--}}

  {{-- Bir değişkenin varlığını kontrol ediyor. Değişken var mı yok mu onu kontrol eder. --}}
  {{-- @isset($sayi)
     Tanımlı
 @endisset--}}
 {{-- Bir değişkenin boş olup olmadığını kontrol ediyor. EMPTY. --}}
  {{--    @empty($sayi)
   BOŞŞ
    @endempty
 --}}


    <?php
  /*  switch($sayi)
        {
            case 0:
            echo "sayi 0'a eşit";
            break;
        case 1:
            echo "Sayı 1 'e eşit";
            break;
        default:
            echo "Sayı eşit değil";
            break;
         }
*/
    ?>
  {{--   @switch($sayi)
      @case(0)
          Sayı 0'a eşit
      @break
      @case(1)
      Sayı 1'e eşit
      @break
      @default
      Sayı 1'e eşit
      @endswitch
--}}

    <?php /* for($i=0; $i<=10; $i++)
        {
            echo $i."<br>";
        } */
        ?>
  {{--  @for($i=0; $i<=10; $i++)
      {{$i}}
      @br
  @endfor--}}

    <?php
    /*    $dizi=['php1','bootstrap','js'];
foreach ($dizi as $key)
        {
            echo $key." ";
        }*/
      ?>
  {{--  @foreach($dizi as $key)
         {{$key}} @br
     @endforeach--}}

  {{-- *** Koşul doğru oldukça while döngüsü çalışır.  --}}
    <?php
    $deger=0;
   /* while ($deger<10)
        {
            echo $deger." ";
            $deger++;
        } */
    ?>
  {{--
  @while($deger<10)
  {{$deger}}
      @php($deger++)
  @endwhile
--}}
  {{-- *** FOR ELSE - 53 : foreach döngüsünde if kullanmaya gerek kalmadan kısaltıyor.  --}}

  {{--
  @php($dizi=[])
  @if(count($dizi)>0)
      @foreach($dizi as $key)
          <li>{{$key}}</li>
      @endforeach
  @else
      Eleman Bulunamadı
  @endif
 --}}
  {{-- @php($dizi=['Dayı','uras'])
 @forelse($dizi as $key)
     <li>{{$key}}</li>
     @empty
     Eleman Bulunamadı!
 @endforelse --}}

  {{-- @php($dizi=['Dayı','uras'])
 @forelse($dizi as $key)
     <li>{{$key}}</li>
 @empty
     Eleman Bulunamadı!
 @endforelse --}}

  {{-- *** Continue, Break - 54 :  contiue devam ediyor, Break döngüyü o an sonlandırıyor. --}}
  {{--   @php($dizi=['casu','koray','uras'])
     @foreach($dizi as $key)
         @if($key=='koray')
             @continue
         @endif
         {{$key}}
     @endforeach--}}

  {{-- *** Döngü Özellikleri - 55 :  --}}

  {{--   @php($dizi=["uras","koray","casu","gurkan"])
     <ul>
         @foreach($dizi as $key)--}}
   {{--   <li>{{$loop->index}} {{$key}}</li> --}}  {{--  *** index Sıralama yapar dizilerin değeri belirtir 0 1 2 3. --}}
                {{--      <li>{{$loop->iteration}} {{$key}}</li>   --}} {{--  *** iteration 1 2 3 4 diye sıralama yapar. --}}
      {{--      <li>{{$loop->remaining}} {{$key}}</li> --}} {{--  *** remaining 3 2 1 0 tersten sıralama yapar indix değerine göre. --}}
    {{--     <li>{{$loop->count}} {{$key}}</li>--}}
                {{--*** count Toplam dizi sayısını verir! first ilk elemanı verir last son değeri verir
                even -> çift sayıya denk gelenleri verir
                 odd tek sayıya denk gelenleri verir
                 depth döngü derinliğini verir. Kaç döngü var onu verir.
                 parent üst eleman değerini verir.--}}
  {{--     @endforeach
</ul>--}}
