<header>
  <x-layout.inner class="relative">
    <a 
      href="{{ route('page.home') }}"
      title="Startseite">
      <x-icons.logo class="max-w-[180px] md:max-w-[225px] lg:max-w-[300px] w-full h-auto absolute top-20 right-20 md:top-30 md:right-30 xl:top-70 xl:right-0" />
    </a>
  </x-layout.inner>
  <x-media.image 
    :image="'werkwinkel-aussen'" 
    :sizes="['xl', 'lg', 'md', 'sm']"
    :width="2400"
    :height="1136"
    :alt="'Visualisierung Werkwinkel Aussen'" />
</header>