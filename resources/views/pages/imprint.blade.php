@extends('app')
@section('seo_title', 'Impressum – Pfäffikermäss – 8. bis 10. November 2024 – Sporthalle Mettlen')
@section('content')
<figure class="relative aspect-[16/8] md:aspect-[16/5]">
  <a href="{{ route('page.home')}}" title="Startseite">
    <picture>
      <img 
        src="/media/img/pfaeffikermaess-2024-visual-see.jpg" 
        alt="Pfäffikermäss - 8. bis 10. November 2024" 
        height="1600" 
        width="1050"
        class="block absolute w-full h-full object-fill">
    </picture>
    <x-icons.logo class="block w-180 sm:w-240 md:w-[320px] xl:w-[400px] 2xl:w-[500px] h-auto absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2" />
  </a>
</figure>
<x-layout.section class="text-black">
  <x-layout.inner class="imprint">
    <h1>Impressum</h1>
    <p>
      Verein Pfäffiker Messe<br>
      c/o Miriam Schwarz<br>
      Balmerstrasse 3<br>
      CH-8330 Pfäffikon ZH<br>
      <a href="mailto:kontakt@pfaeffikermaess.ch"
        class="hover:underline underline-offset-2 decoration-1">
        kontakt@pfaeffikermaess.ch
      </a>
    </p>
    <h2>Design und Entwicklung</h2>
    <p>Stoz Werbeagentur AG<br>Barzloostrasse 2<br>8330 Pfäffikon ZH<br><a href="mailto:hello@stoz.ch" target="_blank" class="hover:underline underline-offset-2 decoration-1">hello@stoz.ch</a><br><a href="https://www.stoz.ch" target="_blank" rel="noopener" class="hover:underline underline-offset-2 decoration-1">www.stoz.ch</a></p>
    <h2>Programmierung</h2>
    <p>Marcel Stadelmann, Zürich<br><a href="https://marceli.to" target="_blank" rel="noopener" class="hover:underline underline-offset-2 decoration-1">marceli.to</a></p>
  </x-layout.inner>
</x-layout.section>
@endsection