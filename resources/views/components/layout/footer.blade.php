@if (!Route::is('page.privacy') && !Route::is('page.imprint'))
<x-layout.section class="relative !p-0">
  <x-misc.map />
</x-layout.section>
@endif
<footer class="bg-scarlet text-white">
  <div class="px-15 py-20 md:px-25 md:py-30 lg:p-40">
    <x-layout.inner>
      <x-layout.grid>
        <x-layout.span class="md:col-span-6">
          <strong>Verein Pfäffiker Messe</strong><br>
          c/o Miriam Schwarz<br>
          Balmerstrasse 3<br>
          CH-8330 Pfäffikon ZH<br>
          <a href="mailto:kontakt@pfaeffikermaess.ch"
            class="underline decoration-1 underline-offset-4 hover:no-underline">
            kontakt@pfaeffikermaess.ch
          </a>
        </x-layout.span>
        <x-layout.span class="md:col-span-6 flex flex-col mt-40 sm:mt-0 sm:justify-end sm:items-end text-sm lg:text-base">
          <nav>
            <ul>
              <li>
                <a href="{{ route('page.imprint') }}" title="Impressum">Impressum</a>
              </li>
              <li>
                <a href="{{ route('page.privacy') }}" title="Datenschutz">Datenschutz</a>
              </li>
              <li>
                <a href="https://stoz.ch" target="_blank" title="stoz.ch" rel="noopener">design by stoz</a>
              </li>
            </ul>
          </nav>
        </x-layout.span>
      </x-layout.grid>
    </x-layout.inner>
  </div>
</footer>
@vite('resources/js/app.js')
</body>
</html>
<!-- made with ❤ by stoz.ch & marceli.to -->