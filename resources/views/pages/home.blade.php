@extends('app')
@section('seo_title', 'Siedlungsgarten inmitten vom «Schwamendinger Grün»')
@section('seo_description', 'Ab anfangs 2027 bieten wir an der Glattwiesen-/Grosswiesenstrasse in Zürich-Schwamendingen moderne Neubauwohnungen an. Die Vielfalt der 255 Wohnungen reicht von gemütlichen Studios bis hin zu grosszügigen Familienwohnungen – ideal für jede Lebensphase.')
@section('content')
<x-layout.section class="bg-white">
  <x-layout.inner>
    <div class="max-w-3xl">
      <h1><span class="text-black">Werkwinkel &ndash;</span><br>Innovativ und Zukunftsorientiert</h1>
    </div>
  </x-layout.inner>
</x-layout.section>

<x-layout.section class="bg-almond">
  <x-layout.inner>
    <h2 class="text-xl lg:text-2xl font-extrabold text-beige mb-15 lg:mb-25">Kontaktformular</h2>
    @livewire('create-inquiry')
  </x-layout.inner>
</x-layout.section>

@endsection