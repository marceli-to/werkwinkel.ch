<header>
  <x-layout.inner class="relative">
    <a 
      href="{{ route('page.home') }}"
      title="Startseite">
      <x-icons.logo class="max-w-[275px] w-full h-auto absolute top-0 right-0" />
    </a>
  </x-layout.inner>
  <x-media.image 
    :image="'werkwinkel-aussen'" 
    :alt="'Visualisierung Werkwinkel Aussen'" />
</header>