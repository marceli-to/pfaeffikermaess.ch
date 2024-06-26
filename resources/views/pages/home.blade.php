@extends('app')
@section('seo_title', 'Pfäffikermäss – 8. bis 10. November 2024 – Sporthalle Mettlen')
@section('seo_description', 'Ein Dorffest, in Form einer traditionellen Gewerbeausstellung, steht an. Tauchen Sie ein in die Vielfalt unserer Gewerberegion und entdecken Sie spannende Aussteller, die mit ihren Produkten und Dienstleistungen begeistern. Von aufregenden Veranstaltungen bis hin zu fesselnden Shows ist für jeden etwas geboten, sodass dieser Anlass zu einem wahrhaft besonderen Erlebnis wird.')
@section('content')
<figure class="relative aspect-[16/8] md:aspect-[16/5]">
  <picture>
    <img 
      src="/media/img/pfaeffikermaess-2024-visual-see.jpg" 
      alt="Pfäffikermäss - 8. bis 10. November 2024" 
      height="1600" 
      width="1050"
      class="block absolute w-full h-full object-fill">
  </picture>
  <x-icons.logo class="block w-180 sm:w-240 md:w-[320px] xl:w-[400px] 2xl:w-[500px] h-auto absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2" />
</figure>
<x-layout.section class="bg-scarlet">
  <x-layout.inner>
    <h1 class="font-extrabold text-md lg:text-xl mb-10 xl:mb-20">Ein Dorffest, in Form einer<br>traditionellen Gewerbeausstellung, steht an.</h1>
    <div class="md:grid md:grid-cols-12 md:gap-x-20 xl:gap-x-40">
      <div class="text-white md:col-span-9 xl:col-span-8">
        <p>Tauchen Sie ein in die Vielfalt unserer Gewerberegion und entdecken Sie spannende Aussteller, die mit ihren Produkten und Dienstleistungen begeistern. Von aufregenden Veranstaltungen bis hin zu fesselnden Shows ist für jeden etwas geboten, sodass dieser Anlass zu einem wahrhaft besonderen Erlebnis wird.</p>
        <p>Geniessen Sie während Ihres Messebesuchs eine kulinarische Reise durch die Region und lassen Sie sich von den köstlichen Angeboten verwöhnen. Als weiteres Highlight steht wieder der Lehrlingswettbewerb Züri-Oberland vom 6. bis 9. November gemeinsam mit der Messe auf dem Programm.</p>
        <p>Nach einer langen Zeit freuen wir uns ganz besonders darauf, mit Ihnen ein gelungenes Wochenende zu verbringen. Seien Sie dabei und lassen Sie uns gemeinsam dieses Fest der Vielfalt und des Miteinanders feiern</p>
      </div>
      <div class="md:col-span-3 xl:col-span-4 mt-20 md:mt-0">
        <a href="https://www.lwzo.ch" target="_blank" title="Lehrlingswettbewerb Züri-Oberland">
          <img src="/media/img/pfaeffikermaesse-lwzo.png" alt="Lehrlingswettbewerb Züri-Oberland" class="block w-full h-auto max-w-[240px] mx-auto md:max-w-none"  />
        </a>
      </div>
    </div>
  </x-layout.inner>
</x-layout.section>
<x-layout.section class="bg-white">
  <x-layout.inner>
    <div class="flex justify-center">
      <a href="/media/downloads/Anmeldung_PfaeffikerMaess_2024-v2.pdf" 
        target="_blank"
        class="bg-scarlet hover:bg-black transition-all rounded-full font-extrabold uppercase text-md lg:text-xl text-white text-center px-30 py-10 inline-block w-auto"
        title="Anmeldeformular für Aussteller">
        Anmeldeformular<br>für Aussteller
      </a>
    </div>
    <div class="grid grid-cols-12 gap-20 lg:gap-25 mt-20 lg:mt-50">
      <div class="col-span-full sm:col-span-6">
        <figure>
          <picture class="w-full">
            <source media="(min-width: 1024px)" srcset="/media/img/pfaeffikermaess-2024-eingang-lg.jpg">
            <source media="(min-width: 768px)" srcset="/media/img/pfaeffikermaess-2024-eingang-md.jpg">
            <source srcset="/media/img/pfaeffikermaess-2024-eingang-sm.jpg">
            <img 
              src="/media/img/pfaeffikermaess-2024-eingang-sm.jpg" 
              alt="Pfäffikermäss – Eingangsbereich" 
              height="1600" 
              width="1059"
              loading="lazy"
              class="block w-full h-auto">
          </picture>
        </figure>
      </div>
      <div class="col-span-full sm:col-span-6">
        <figure>
          <picture class="w-full">
            <source media="(min-width: 1024px)" srcset="/media/img/pfaeffikermaess-2024-licht-an-lg.jpg">
            <source media="(min-width: 768px)" srcset="/media/img/pfaeffikermaess-2024-licht-an-md.jpg">
            <source srcset="/media/img/pfaeffikermaess-2024-licht-an-sm.jpg">
            <img 
              src="/media/img/pfaeffikermaess-2024-licht-an-sm.jpg" 
              alt="Pfäffikermäss – Licht an" 
              height="1600" 
              width="1059"
              loading="lazy"
              class="block w-full h-auto">
          </picture>
        </figure>
      </div>
      <div class="col-span-full sm:col-span-6">
        <figure>
          <picture class="w-full">
            <source media="(min-width: 1024px)" srcset="/media/img/pfaeffikermaess-2024-konzert-lg.jpg">
            <source media="(min-width: 768px)" srcset="/media/img/pfaeffikermaess-2024-konzert-md.jpg">
            <source srcset="/media/img/pfaeffikermaess-2024-konzert-sm.jpg">
            <img 
              src="/media/img/pfaeffikermaess-2024-konzert-sm.jpg" 
              alt="Pfäffikermäss – Konzert" 
              height="1600" 
              width="1059"
              loading="lazy"
              class="block w-full h-auto">
          </picture>
        </figure>
      </div>
      <div class="col-span-full sm:col-span-6">
        <figure>
          <picture class="w-full">
            <source media="(min-width: 1024px)" srcset="/media/img/pfaeffikermaess-2024-vogelperspektive-lg.jpg">
            <source media="(min-width: 768px)" srcset="/media/img/pfaeffikermaess-2024-vogelperspektive-md.jpg">
            <source srcset="/media/img/pfaeffikermaess-2024-vogelperspektive-sm.jpg">
            <img 
              src="/media/img/pfaeffikermaess-2024-vogelperspektive-sm.jpg" 
              alt="Pfäffikermäss – Vogelperspektive" 
              height="1600" 
              width="1059"
              loading="lazy"
              class="block w-full h-auto">
          </picture>
        </figure>
      </div>
    </div>
  </x-layout.inner>
</x-layout.section>
@endsection