@extends('app')
@section('seo_title', 'Siedlungsgarten inmitten vom «Schwamendinger Grün»')
@section('seo_description', 'Ab anfangs 2027 bieten wir an der Glattwiesen-/Grosswiesenstrasse in Zürich-Schwamendingen moderne Neubauwohnungen an. Die Vielfalt der 255 Wohnungen reicht von gemütlichen Studios bis hin zu grosszügigen Familienwohnungen – ideal für jede Lebensphase.')
@section('content')
<x-layout.section class="bg-white">
  <x-layout.inner>
    <div class="max-w-3xl">
      <h1><span class="text-black">Werkwinkel &ndash;</span><br>Innovativ und Zukunftsorientiert</h1>
    </div>
    <div class="md:grid md:grid-cols-12 md:gap-20">
      <div class="md:col-span-8 hyphens-auto">
        <p>Der Montag, 20. Januar 2025, markiert den Start für den Bau des Innovationsparks «Werkwinkel» für Start-ups und zukunftsorientierte Unternehmungen. Die Firma consqwnt AG und deren Eigentümer Jannine und Daniel Roner realisieren auf gut 3’000 m2 Bauland, mit der Gesamtleitung der Sanjo Management AG, eine moderne Gewerbehalle inmitten von Wolfhausen ZH in der Gemeinde Bubikon. Dabei wird die bestehende Überbauung Obstwinkel mit der Erstellung vom Werkwinkel ergänzt und abgeschlossen.</p>
        <p>In den rund <strong>16’000 m<sup>3</sup> Bauvolumen</strong> entstehen <strong>1.400 m<sup>2</sup> Gewerbeflächen sowie 600 m2 Büroflächen</strong>, welche nach den Bedürfnissen der künftigen Mieter eingeteilt werden können. Das modulare Konzept, in Verbindung mit einer hochwertigen Architektur, bietet Mietern die nötige Flexibilität, die Innenräume nach ihren individuellen Wünschen zu gestalten.</p>
        <x-media.image 
          :image="'werkwinkel-querschnitt'" 
          :sizes="['md', 'sm']"
          :width="1600"
          :height="524"
          :class="'my-20 lg:my-40'"
          :alt="'Visualisierung Werkwinkel Querschnitt'" />
        <p>Innovativ und zukunftsorientiert sollen nicht nur die Unternehmen sein, sondern auch das Gebäude selbst. Durch das beachtliche Volumen bietet das Objekt nicht nur Platz in der Horizontalen, sondern auch in der Vertikalen mit diversen Erschliessungsoptionen. Aktuell wird an einer Lösung gearbeitet, welche es ermöglicht, den Mietern standardisierte modulare Holzboxen zur Verfügung zu stellen, die sich stapeln lassen und ihnen die Möglichkeit bieten, die gemietete Fläche optimal zu nutzen und zu erweitern.</p>
        <p>Die nachhaltige Holzbaukonstruktion mit ihrer prägnanten Lärchenschindelfassade, sichtbaren V-Trägern und Betonsockeln soll die Grenze zwischen dem Industrie- und Wohnquartier vermitteln. Zudem soll das Gebäude als repräsentatives Aushängeschild für die sich darin ansässigen Unternehmen dienen. Zum Thema Nachhaltigkeit trägt auch eine Photovoltaikanlage auf dem Shed-Dach mit über 200 kWp sowie eine Anbindung zu einer bestehenden Heizzentrale beim Nachbargebäude bei.</p>
        <p>Der «Werkwinkel» soll ein Hub für Kreativität und Austausch sein und den Standort Wolfhausen durch den Mehrwert eines qualitativ hochwertigen Industriebaus sowie den künftigen Mietern stärken.</p>
        <h3>Sind Sie interessiert?</h3>
        <p>Gerne senden wir Ihnen weitere Informationen, sobald die Vermietung startet. Bitte füllen Sie bei Interesse das Kontaktformular aus.</p>
      </div>
      <div class="mt-20 md:mt-0 md:col-span-4">
        <x-media.image 
          :image="'werkwinkel-innen'" 
          :sizes="['sm']"
          :width="900"
          :height="638"
          :alt="'Visualisierung Werkwinkel Innen'" />
      </div>
    </div>
  </x-layout.inner>
</x-layout.section>

<x-layout.section class="bg-almond pb-20">
  <x-layout.inner>
    <h2 class="mb-15 lg:mb-25">Kontaktformular</h2>
    @livewire('create-inquiry')
    <div class="mt-20 lg:mt-40">
      <h3>Ihr Ansprechpartner</h3>
      <div class="flex gap-x-30 lg:gap-x-60 mt-10 lg:mt-20">
        <a 
          href="https://sanjo.ch"
          target="_blank"
          title="Webseite Sanjo Management AG"
          class="max-w-[120px] md:max-w-[175px] block w-full h-auto">
          <x-icons.logo-marketer class="w-full h-auto" />
        </a>
        <address class="not-italic">
          <strong>Sanjo Management AG</strong><br>Ziegelwies 2<br>8852 Altendorf<br>
          <a href="tel:+41 55 446 60 40" title="Telefon Nr." class="hover:underline decoration-1 underline-offset-2">+41 55 446 60 40</a><br>
          <a href="https://www.sanjo.ch" target="_blank" rel="noopener" title="Webseite Sanjo Management AG" class="hover:underline decoration-1 underline-offset-2">www.sanjo.ch</a>
        </address>
      </div>
    </div>
  </x-layout.inner>
</x-layout.section>

@endsection